<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Prestations;

class PrestationsController extends Controller
{
    public function show ()
    {
        $prestations = Prestations::first();
        return view('admin.prestations', compact('prestations'));
    }

    public function update (Request $request)
    {
        $prestation = Prestations::first();
        if (!$prestation) {
            $prestation = new Prestations;
        }

        $validator = Validator::make($request->all(), [
            'first_prestation_title' => 'required|max:255',
            'first_prestation_content' => 'required',
            'first_prestation_horaires' => 'required',
            'second_prestation_title' => 'required|max:255',
            'second_prestation_content' => 'required',
            'third_prestation_title' => 'required|max:255',
            'third_prestation_content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            foreach (['first_prestation', 'second_prestation', 'third_prestation'] as $field) {
                $request[$field . '_image'] = $this->uploadFile($request->$field);
            }

            $prestation->fill($request->all());
            $prestation->save();
            session()->flash('message', 'Informations de la page des prestations sauvegardés avec succès');
            return redirect()->route('admin.prestation.show');
        }
    }

    private function uploadFile($file) {
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('public/prestations', $filename);
        return '/' . str_replace('public', 'storage', $path);
    }
}
