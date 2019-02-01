@extends('layouts.front-layout')

@section('title')
    Prestations - @parent
@endsection


@section('content')

<div class="prestations-container">
        <h1>Prestations</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus sapien id turpis fringilla dictum. Maecenas vitae sem facilisis, aliquam nulla quis, egestas mauris. Donec nec aliquet odio. Sed mollis, nulla ac mattis fermentum, lacus mauris volutpat.</p>

        <div class="prestations-navigation">
            <a class="btn btn-custom-green js-scrollTo" href="#prestation-centre">Centre de pratique</a>
            <a class="btn btn-custom-green js-scrollTo" href="#prestation-domicile">A domicile</a>
            <a class="btn btn-custom-green js-scrollTo" href="#prestation-entreprise">Entreprises</a>
        </div>


        <div class="prestation-page prestation-centre" id="prestation-centre">
            <div class="prestation-presentation">
                <h3>{{ $prestation->first_prestation_title }}</h3>
                <p>{{ $prestation->first_prestation_content }}</p>
                <div class="prestation-horaire">
                    <!-- titre à dynamiser -->
                    <h4>Mes horaires au centre :</h4>
                    <ul>
                        <!-- boucler cette liste avec la colonne horaires -->
                        @foreach(explode("\n", $prestation->first_prestation_horaires) as $line)
                            <li>{{ $line }}</li>
                        @endforeach
                    </ul>
                </div>
                </div>
            <div class="prestation-aside">
                <div class="prestation-illustration">
                    <img src="{{ $prestation->first_prestation_image }}" alt="{{ basename($prestation->first_prestation_image) }}">
                </div>
                <button class="btn btn-custom-green">Prendre rdv</button>
            </div>
        </div>
        <div class="prestation-page prestation-domicile" id="prestation-domicile">
            <div class="prestation-presentation">
                    <h3>{{ $prestation->second_prestation_title }}</h3>
                <p>{{ $prestation->second_prestation_content }}</p>
            </div>
            <div class="prestation-aside">
                <div class="prestation-illustration">
                    <img src="{{ $prestation->second_prestation_image }}" alt="{{ basename($prestation->second_prestation_image) }}">
                </div>
                <button class="btn btn-custom-green">Prendre rdv</button>
            </div>
        </div>
        <div class="prestation-page prestation-entreprise" id="prestation-entreprise">
            <div class="prestation-presentation">
                    <h3>{{ $prestation->third_prestation_title }}</h3>
                    <p>{{ $prestation->third_prestation_content }}</p>
            </div>
            <div class="prestation-aside">
                <div class="prestation-illustration">
                    <img src="{{ $prestation->third_prestation_image }}" alt="{{ basename($prestation->third_prestation_image) }}">
                </div>
                <button class="btn btn-custom-green">Me contacter</button>
            </div>
        </div>
</div>



@endsection
