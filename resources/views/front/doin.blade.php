@extends('layouts.front-layout')

@section('title')
    Do-In - @parent
@endsection


@section('content')

    <div class="presentation-container">
        <div class="presentation">
            <h1>Do In : Qu'est-ce que c'est ?</h1>
            <div class="paragraph-presentation">
                <p>Contenu paragraphe</p>
            </div>
            <div class="paragraph-presentation">
                <h3>Titre paragraphe</h3>
                <p>Contenu paragraphe</p>
            </div>
            <div class="paragraph-presentation">
                <h3>Titre paragraphe</h3>
                <p>Contenu paragraphe</p>
            </div>
        </div>
        <div class="side-presentation">
            <div class="presentation-image">
                <img src="" alt="">
            </div>

            <div class="wellness-list">
                <ul>
                    <li>Bienfait</li>
                    <li>Bienfait</li>
                    <li>Bienfait</li>
                    <li>Bienfait</li>
                    <li>Bienfait</li>
                </ul>
            </div>

            <button class="btn">Prendre rendez-vous</button>
        </div>
    </div>
@endsection