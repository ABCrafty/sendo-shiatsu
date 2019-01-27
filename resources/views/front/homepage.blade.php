@extends('layouts.front-layout')

@section('title')
    Accueil - @parent
@endsection

@section('content')

    <div class="activites-home">
        <div class="home-shiatsu">
            <h1>Shiatsu</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet in odio quis aliquam. Praesent posuere mauris nunc, ac auctor orci porta quis. Curabitur vel nisi ornare, porttitor orci eget, dictum velit. Vivamus quis eleifend eros, eu turpis duis.</p>
            <button class="btn btn-custom-green">
                Découvrez le Shiatsu
            </button>
        </div>
        <div class="home-doin">
            <h2>Do In</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet in odio quis aliquam. Praesent posuere mauris nunc, ac auctor orci porta quis. Curabitur vel nisi ornare, porttitor orci eget, dictum velit. Vivamus quis eleifend eros, eu turpis duis.</p>
            <button class=" btn btn-custom-green">
                Découvrez le Do In
            </button>
        </div>
    </div> <!-- activites-home -->

    <h3 class="prestation-title">Mes prestations</h3>

    <div class="prestations-home">
        <div class="prestation">
            <h3>A domicile</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet in odio quis aliquam. Praesent posuere mauris nunc, ac auctor orci porta quis. Curabitur vel nisi ornare, porttitor orci eget, dictum velit. Vivamus quis eleifend eros, eu turpis duis.</p>
            <button class="btn btn-custom-white">Prendre rendez-vous</button>
        </div>
        <div class="prestation">
            <h3>Centre de pratique</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet in odio quis aliquam. Praesent posuere mauris nunc, ac auctor orci porta quis. Curabitur vel nisi ornare, porttitor orci eget, dictum velit. Vivamus quis eleifend eros, eu turpis duis.</p>
            <button class="btn btn-custom-white">Prendre rendez-vous</button>
        </div>
        <div class="prestation">
            <h3>Entreprises</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet in odio quis aliquam. Praesent posuere mauris nunc, ac auctor orci porta quis. Curabitur vel nisi ornare, porttitor orci eget, dictum velit. Vivamus quis eleifend eros, eu turpis duis.</p>
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
