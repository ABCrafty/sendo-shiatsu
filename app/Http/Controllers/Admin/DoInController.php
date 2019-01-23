<?php

namespace App\Http\Controllers\Admin;

use App\DoIn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DoInController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $doin = DoIn::first();
        return view('admin.do_in', compact('doin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wellness' => 'required',
            'first_paragraph_title' => 'required|max:150',
            'first_paragraph_content' => 'required',
            'second_paragraph_title' => 'required|max:150',
            'second_paragraph_content' => 'required',
            'third_paragraph_title' => 'required|max:150',
            'third_paragraph_content' => 'required'
        ],
        [
            'first_paragraph_title.required' => 'Le titre de la 1ère prestation est requis',
            'first_paragraph_title.max' => 'Le titre de la 1ère prestation ne peut pas excéder 150 caractères',
            'second_paragraph_title.required' => 'Le titre de la 2ème prestation est requis',
            'second_paragraph_title.max' => 'Le titre de la 2ème prestation ne peut pas excéder 150 caractères',
            'third_paragraph_title.required' => 'Le titre de la 3ème prestation est requis',
            'third_paragraph_title.max' => 'La description du 3ème paragraphe est requis',
            'first_paragraph_content.required' => 'Le contenu de la 1ère prestation est requis',
            'second_paragraph_content.required' => 'Le contenu de la 2ème prestation est requis',
            'third_paragraph_content.required' => 'Le contenu de la 3ème prestation est requis',
            'wellness.required' => 'Le contenu du champ des bienfaits est requis'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $doin = DoIn::first();
            if (!$doin) {
                $doin = new DoIn;
            }

            $path = $request
                ->file('img')
                ->storeAs('public/do_in', $request->file('img')->getClientOriginalName());
            $request['image'] = '/' . str_replace('public', 'storage', $path);

            unset($request['_token']);
            $request->wellness = nl2br($request->wellness);

            $doin->fill($request->all());
            $doin->save();

            session()->flash('message', 'Informations du Do In sauvegardés avec succès');
            return redirect()->route('admin.doin.show');
        }
    }
}
