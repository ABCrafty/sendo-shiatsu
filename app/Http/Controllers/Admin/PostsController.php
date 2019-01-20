<?php

namespace App\Http\Controllers\Admin;

use App\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use Yajra\Datatables\Datatables;

class PostsController extends Controller
{
    public function __construct()
    {
    }
    public function index() {
        $posts = Posts::latest()->count();
        return view('admin.blog.index', compact('posts'));
    }
    public function create() {
        return view('admin.blog.create');
    }
    public function store(Request $request) {
        $default_path = 'uploads/articles/'.str_replace(' ', '-', $request->input('title')).'/';
        // use the custom upload function written in Controller.php
        $illustration = $this->upload(['file' => $request->file('illustration'), 'path' => $default_path]);
        $input = [];
        $input['title'] = $request->input('title');
        $input['user_id'] = auth()->user()->id;
        $input['body'] = $request->input('body');
        $input['illustration'] = $illustration;
        $post = Posts::create($input);
        $post->save($input);
        session()->flash('message','Nouvel article créé');
        return redirect()->route('blog.index');
    }
    public function edit($id) {
        $post = Posts::find($id);
        return view('admin.blog.edit', compact('post'));
    }
    public function update($post, Request $request) {
        $post = Posts::find($post);
        $default_path = 'uploads/articles/'.str_replace(' ', '-', $request->input('title')).'/';
        if($request->file('illustration')) {
            $illustration = $this->upload(['file' => $request->file('illustration'), 'path' => $default_path]);
        }
        $input = [];
        $input['title'] = $request->input('title');
        $input['body'] = $request->input('body');
        if($request->file('illustration')) {
            $input['illustration'] = $illustration;
        }
        $post->update($input);
        session()->flash('message','Article mis à jour');
        return redirect()->route('blog.index');
    }
    public function destroy($post) {
        $post = Posts::find($post);
        $post->delete();
        session()->flash('message', 'Article supprimé');
        return redirect()->back();
    }
    /*public function ajaxListing() {
        $posts = Posts::select(['id', 'title']);
        return Datatables::of($posts)
            ->addColumn('action', function ($post) {
                return '<a class="data-action" href="'.route('blog.edit', $post->id).'">
                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                            <a class="data-action" href="'.route('blog.destroy', $post->id).'">
                            <i class="fa fa-times fa-2x" aria-hidden="true"></i></a>';
            })
            ->make(true);
    }*/
}
