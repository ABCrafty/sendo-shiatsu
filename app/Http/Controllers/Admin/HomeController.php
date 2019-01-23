<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Homepage;


class HomeController extends Controller
{
    public function show ()
    {
        $homepage = Homepage::first();
        return view('admin.homepage', compact('homepage'));
    }

    public function update (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shiatsu_text' => 'required|max:150',
            'doin_text' => 'required|max:150',
            'first_presta_title' => 'required|max:150',
            'first_presta_content' => 'required|max:255',
            'second_presta_title' => 'required|max:150',
            'second_presta_content' => 'required|max:255',
            'third_presta_title' => 'required|max:150',
            'third_presta_content' => 'required|max:255'
        ],
        [
            'first_presta_title.required' => 'Le titre de la 1ère prestation est requis',
            'first_presta_title.max' => 'Le titre de la 1ère prestation ne peut pas excéder 150 caractères',
            'second_presta_title.required' => 'Le titre de la 2ème prestation est requis',
            'second_presta_title.max' => 'Le titre de la 2ème prestation ne peut pas excéder 150 caractères',
            'third_presta_title.required' => 'Le titre de la 3ème prestation est requis',
            'third_presta_title.max' => 'La description du 3ème paragraphe est requis',
            'first_presta_content.required' => 'Le contenu de la 1ère prestation est requis',
            'first_presta_content.max' => 'Le contenu de la 1ère prestation ne peut pas excéder 255 caractères',
            'second_presta_content.required' => 'Le contenu de la 2ème prestation est requis',
            'second_presta_content.max' => 'Le contenu de la 2ème prestation ne peut pas excéder 255 caractères',
            'third_presta_content.required' => 'Le contenu de la 3ème prestation est requis',
            'third_presta_content.max' => 'Le contenu de la 3ème prestation ne peut pas excéder 255 caractères',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $homepage = Homepage::first();
            if (!$homepage) {
                $homepage = new Homepage;
            }

            if ($request->hasFile('shiatsu_image')) {
                $request->shiatsu_image = $request->file('shiatsu_image')->storeAs('images', $request->file('shiatsu_image')->getClientOriginalName());
            } else {
                $request->shiatsu_image = $homepage->shiatsu_image;
            }

            if ($request->hasFile('doin_image')) {
                $request->doin_image = $request->file('doin_image')->storeAs('images', $request->file('doin_image')->getClientOriginalName());
            } else {
                $request->shiatsu_image = $homepage->doin_image;
            }

            unset($request['_token']);

            $homepage->fill($request->all());
            $homepage->save();

            session()->flash('message', 'Informations de la page d\'accueil sauvegardés avec succès');
            return redirect()->route('admin.homepage');
        }
    }
}