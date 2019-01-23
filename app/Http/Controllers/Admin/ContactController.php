<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use App\Contact;
use App\Mail\NewContact;

class ContactController extends Controller
{
    public function index ()
    {
        $messages = Contact::all();
        return view('admin.contact', ['messages' => $messages]);
    }

    public function show (Request $request)
    {
        $message = Contact::find($request->data['id']);
        if (!$message->lu) {
            $message->lu = true;
            $message->save();
        }

        return response()->json($message);
    }

    public function delete (Request $request)
    {
        $message = Contact::find($request->id);
        $message->delete();
        return response()->json('ok');
    }

}