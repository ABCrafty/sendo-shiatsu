<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Contact;
use App\Mail\NewContact;

class ContactController extends Controller
{
    public function index ()
    {
        $messages = Contact::all();
        return view('admin.contact.index', ['messages' => $messages]);
    }

    public function create ()
    {
        return view('front.contact');
    }

    public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:140',
            'sujet' => 'required|max:150',
            'message' => 'required|min:100'
        ],
        [
            'email.email' => 'Le champ "email" doit contenir une adresse email valide',
            'email.required' => 'Le champ "email" est requis',
            'email.max' => 'Adresse email (beaucoup) trop longue',
            'message.min' => 'Le message doit contenir au moins 100 caractères',
            'message.required' => 'Le champ "message" est requis'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $contact = new Contact;
            $contact->email = $request->email;
            $contact->sujet = $request->sujet;
            $contact->message = $request->message;
            $contact->lu = false;

            $contact->save();
            // Mail::to('jlevarato@pm.me')
            //    ->send(new NewContact($contact));

            session()->flash('message','<strong>Message envoyé !</strong><br />Vous devriez recevoir des nouvelles très bientôt.');
            return redirect()->route('contact.create');
        }

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