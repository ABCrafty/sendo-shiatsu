<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
            'shiatsu_text' => 'required|max:255',
            'doin_text' => 'required|max:255',
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

            foreach (['shiatsu', 'doin'] as $field) {
                if (!empty($request->$field)) {
                    $request[$field . '_image'] = $this->uploadFile($request->$field);
                }
            }

            unset($request['_token']);

            $homepage->fill($request->all());
            $homepage->save();

            session()->flash('message', 'Informations de la page d\'accueil sauvegardés avec succès');
            return redirect()->route('admin.homepage');
        }
    }

    private function uploadFile($file) {
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('public/homepage', $filename);
        return '/' . str_replace('public', 'storage', $path);
    }
}