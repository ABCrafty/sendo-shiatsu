<?php

namespace App\Http\Controllers\Admin;

use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function edit($id) {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }
    public function update($user, Request $request) {
        $user = User::find($user);
        $default_path = 'uploads/users/'.str_replace(' ', '-', $request->input('title')).'/';
        if(!isset($user->password)) {
            $this->validate($request, [
                'password' => 'required'
            ]);
        }
        if(!isset($user->email)) {
            $this->validate($request, [
                'email' => 'required|email'
            ]);
        }
        if($request->file('avatar')) {
            $avatar = $this->upload(['file' => $request->file('avatar'), 'path' => $default_path]);
        }
        $input = [];
        $input['username'] = $request->input('username');
        $input['email'] = $request->input('email');
        $input['description'] = $request->input('description');
        if($request->file('avatar')) {
            $input['avatar'] = $avatar;
        }
        $user->update($input);
        session()->flash('message','Utilisateur mis à jour');
        return redirect()->route('users.index');
    }
}
