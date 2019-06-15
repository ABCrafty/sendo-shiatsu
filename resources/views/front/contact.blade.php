@extends('layouts.front-layout')

@section('title')
    Contact
@endsection

@section('content')
<div class="contact-form-container"> <!-- Supprimer si besoin -->
    <h1>Contactez-moi si vous avez besoin de renseignements, je vous répondrai dans les plus brefs délais.</h1>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        @if($errors->any())
            <div class="alert alert-warning" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-8 offset-md-2">
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" placeholder="Adresse email" name="email" class="form-control {{ !$errors->has('email') ?: 'is-invalid' }}" required>
            </div>
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <input type="text" id="sujet" placeholder="Sujet" name="sujet" class="form-control {{ !$errors->has('sujet') ?: 'is-invalid' }}" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Tapez votre message..." name="message" class="form-control {{ !$errors->has('message') ?: 'is-invalid' }}" required></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-custom-green">Envoyer</button>
            </div>
        </div>

    </form>
</div> <!-- Supprimer si besoin -->
@endsection
