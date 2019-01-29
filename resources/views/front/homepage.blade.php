@extends('layouts.front-layout')

@section('title')
    Accueil - @parent
@endsection

@section('content')

    <div class="activites-home">
        <div    class="home-shiatsu"
                style="background-image: url('{{ $homepage->shiatsu_image }}');
                       background-repeat: no-repeat;
                       background-size: cover">
            <div class="white-background">
                <h1>Shiatsu</h1>
                <p>{{ $homepage->shiatsu_text }}</p>
                <a href="{{ route('front.shiatsu') }}" class="btn btn-custom-green">
                    Découvrez le Shiatsu
                </a>
            </div>
        </div>
        <div    class="home-doin"
                style="background-image: url('{{ $homepage->shiatsu_image }}');
                       background-repeat: no-repeat;
                       background-size: cover">
            <div class="white-background">
                <h2>Do In</h2>
                <p>{{ $homepage->doin_text }}</p>
                <a href="{{ route('front.doin') }}" class=" btn btn-custom-green">
                    Découvrez le Do In
                </a>
            </div>
        </div>
    </div> <!-- activites-home -->

    <h3 class="prestation-title">Mes prestations</h3>

    <div class="prestations-home">
        <div class="prestation">
            <h3>{{ $homepage->first_presta_title }}</h3>
            <p>{{ $homepage->first_presta_content }}</p>
            <button class="btn btn-custom-white">En savoir plus</button>
        </div>
        <div class="prestation">
            <h3>{{ $homepage->second_presta_title }}</h3>
            <p>{{ $homepage->second_presta_content }}</p>
            <button class="btn btn-custom-white">En savoir plus</button>
        </div>
        <div class="prestation">
            <h3>{{ $homepage->third_presta_title }}</h3>
            <p>{{ $homepage->third_presta_content }}</p>
            <button class="btn btn-custom-white">Me contacter</button>
        </div>
    </div>

    <div class="home-form-container">
            <h3>Vous avez des questions ? Vous souhaitez me contacter ? Envoyez-moi un message
                    et je vous répondrai dans les plus brefs délais !
            </h3>
            <form action="{{ route('contact.store') }}" method="POST" class="home-form">
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

                    <div class="col-12 col-md-8 offset-md-2">
                        <div class="form-group">
                            <label for="email">Votre adresse email</label>
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
    </div>

    <!-- <h3>Les derniers articles du blog</h3>
    <div class="blog-home">
        <div class="blog-preview">
            <h3>Titre article</h3>
            <p>Aperçu article...</p>
            <div class="blog-buttons">
                <button class="btn btn-primary">Lire l'article</button>
                <button class=" btn">Tous les articles</button>
            </div>
            <div class="blog-img">
                <img src="#" alt="">
            </div>
        </div>
    </div>

    -->

@endsection
