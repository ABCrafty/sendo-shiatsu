@extends('layouts.front-layout)

@section('title')

@endsection

@section('content')

<div class="activites-home">
    <div class="home-shiatsu">
        <h1>Shiatsu</h1>
        <p>blabla</p>
        <button class="discover">
            Découvrez le Shiatsu
        </button>
    </div>
    <div class="home-doin">
        <h2>Do In</h2>
        <p>blabla</p>
        <button class="discover">
            Découvrez le Do In
        </button>
    </div>
</div> <!-- activites-home -->

    <h3>Mes prestations</h3>

    <div class="prestations-home">
        <div class="prestation">
            <h3>A domicile</h3>
            <p>blabla</p>
            <button class="button-rdv">Prendre rendez-vous</button>
        </div>
        <div class="prestation">
            <h3>Centre de pratique</h3>
            <p>blabla</p>
            <button class="button-rdv">Prendre rendez-vous</button>
        </div>
        <div class="prestation">
            <h3>Entreprises</h3>
            <p>blabla</p>
            <button class="button-rdv">Me contacter</button>
        </div>
    </div>

    <h3>Les derniers articles du blog</h3>
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

@endsection