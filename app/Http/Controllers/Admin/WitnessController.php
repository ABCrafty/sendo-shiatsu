<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Witness;

class WitnessController extends Controller
{
    public function index ()
    {
        $witnesses = Witness::all();

        return view('admin.witnesses', compact('witnesses'));
    }

    public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'author' => 'required|max:255',
            'title' => 'required|max:255',
            'content' => 'required|max:255'
        ],
        [
            'author.required' => 'Le champ "auteur" est requis',
            'author.max' => 'La taille du champ ne peut excéder 255 caractères',
            'title.required' => 'Le champ "Titre" est requis',
            'title.max' => 'La taille du champ ne peut excéder 255 caractères',
            'content.required' => 'Le champ "Citation" est requis',
            'content.max' => 'La taille du champ ne peut excéder 255 caractères'
        ]);
        if ($validator->failed()) {
            return response()->json($validator);
        } else {
            $witness = new Witness;
            $witness->author = $request->author;
            $witness->title = $request->title;
            $witness->content = $request['content'];

            $witness->save();

            return response()->json($witness);
        }
        return response()->json($request->all());
    }

    public function update (Request $request)
    {
        // ...
    }

    public function delete (Request $request)
    {
        // ...
    }
}
