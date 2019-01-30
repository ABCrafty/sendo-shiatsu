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
                <h2>Centre de pratique</h2>
                <p>Prestation détaillé Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus sapien id turpis fringilla dictum. Maecenas vitae sem facilisis, aliquam nulla quis, egestas mauris. Donec nec aliquet odio. Sed mollis, nulla ac mattis fermentum, lacus mauris volutpat.</p>
                <div class="prestation-horaire">
                    <!-- titre à dynamiser -->
                    <h4>Mes horaires au centre :</h4>
                    <ul>
                        <!-- boucler cette liste avec la colonne horaires -->
                        <li>Lundi - 7h/11h</li>
                        <li>Mardi - 7h/11h</li>
                        <li>Mercredi - 7h/11h</li>
                    </ul>
                </div>
                </div>
            <div class="prestation-aside">
                <div class="prestation-illustration">
                    <img src="{{ asset('images/logo_sendo_shiatsu.png') }}" alt="">
                </div>
                <button class="btn btn-custom-green">Prendre rdv</button>
            </div>
        </div>
        <div class="prestation-page prestation-domicile" id="prestation-domicile">
            <div class="prestation-presentation">
                    <h3>A Domicile</h3>
                    <p>Prestation détaillé Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus sapien id turpis fringilla dictum. Maecenas vitae sem facilisis, aliquam nulla quis, egestas mauris. Donec nec aliquet odio. Sed mollis, nulla ac mattis fermentum, lacus mauris volutpat.</p>
            </div>
            <div class="prestation-aside">
                <div class="prestation-illustration">
                    <img src="{{ asset('images/logo_sendo_shiatsu.png') }}" alt="">
                </div>
                <button class="btn btn-custom-green">Prendre rdv</button>
            </div>
        </div>
        <div class="prestation-page prestation-entreprise" id="prestation-entreprise">
            <div class="prestation-presentation">
                    <h3>Entreprise</h3>
                    <p>Prestation détaillé Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus sapien id turpis fringilla dictum. Maecenas vitae sem facilisis, aliquam nulla quis, egestas mauris. Donec nec aliquet odio. Sed mollis, nulla ac mattis fermentum, lacus mauris volutpat.</p>
            </div>
            <div class="prestation-aside">
                <div class="prestation-illustration">
                    <img src="{{ asset('images/logo_sendo_shiatsu.png') }}" alt="">
                </div>
                <button class="btn btn-custom-green">Me contacter</button>
            </div>
        </div>
</div>



@endsection
