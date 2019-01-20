<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
    }
    public function edit($id) {
        $contentExists = Homepage::first();
        $homepage = Homepage::findOrFail($id);
        return view('admin/homepage/edit', compact('homepage', 'contentExists'));
    }
    public function create() {
        return view('admin/homepage/create');
    }
    public function store(HomepageRequest $request) {
        $input = $request->all();
        foreach($input as $key=>$value)
            if($value == null || !isset($key))
                $input[$key] ='';
        unset($input['_token']);
        $content = Homepage::create($input);
        $content->save();
        session()->flash('message','Page d\'accueil créée');
        return redirect()->route('dashboard.index')->with('success', 'Contenu de la page d\'accueil créé');
    }
    public function update(HomepageRequest $request, $homepage) {
        $homepage = Homepage::find($homepage);
        $input = $request->all();
        foreach($input as $key=>$value)
            if($value == null || !isset($key))
                $input[$key] ='';
        $homepage->update($input);
        session()->flash('message','Page d\'accueil mise à jour');
        return redirect()->route('dashboard.index');
    }
    public function destroy() {
    }
}
