@extends('layouts.front-layout')

@section('title')
    Accueil - @parent
@endsection

@section('content')

    <div class="activites-home">
        <div class="home-shiatsu">
            <h1>Shiatsu</h1>
            <p>{{ $homepage->shiatsu_text }}</p>
            <a href="{{ route('front.shiatsu') }}" class="btn btn-custom-green">
                Découvrez le Shiatsu
            </a>
        </div>
        <div class="home-doin">
            <h2>Do In</h2>
            <p>{{ $homepage->doin_text }}</p>
            <a href="{{ route('front.doin') }}" class=" btn btn-custom-green">
                Découvrez le Do In
            </a>
        </div>
    </div> <!-- activites-home -->

    <h3 class="prestation-title">Mes prestations</h3>

    <div class="prestations-home">
        <div class="prestation">
            <h3>{{ $homepage->first_presta_title }}</h3>
            <p>{{ $homepage->first_presta_content }}</p>
            <button class="btn btn-custom-white">Prendre rendez-vous</button>
        </div>
        <div class="prestation">
            <h3>{{ $homepage->second_presta_title }}</h3>
            <p>{{ $homepage->second_presta_content }}</p>
            <button class="btn btn-custom-white">Prendre rendez-vous</button>
        </div>
        <div class="prestation">
            <h3>{{ $homepage->third_presta_title }}</h3>
            <p>{{ $homepage->third_presta_content }}</p>
            <button class="btn btn-custom-white">Me contacter</button>
        </div>
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
