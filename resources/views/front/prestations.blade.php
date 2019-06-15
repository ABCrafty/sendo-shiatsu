@extends('layouts.front-layout')

@section('title')
    Prestations/prendre rendez-vous - @parent
@endsection

@section('meta-description')
    Apportez équilibre, relaxation, concentration et soulagez vos taux avec le Shiatsu au coeur
    de Strasbourg. Prenez rendez-vous pour découvrir ses bienfaits !
@endsection

@section('content')

<div class="prestations-container">
        <h1>Prestations</h1>
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
                <div class="link text-center">
                    <button class="btn btn-custom-green"
                            data-toggle="modal"
                            data-target="#rdvModal">Prendre rendez-vous</button>
                </div>

                <div class="modal fade" id="rdvModal" tabindex="-1" role="dialog" aria-labelledby="rdvModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Prendre rdv sur therapeutes.com</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Vous allez être redirigé vers mon agenda en ligne sur therapeutes.com.
                                Acceptez-vous d'être redirigé ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Revenir sur le site</button>
                                <a class="btn btn-custom-green" href="https://www.therapeutes.com/praticien-shiatsu/strasbourg/pierre-black" target="_blank">Aller sur therapeutes.com</a>
                            </div>
                        </div>
                    </div>
                </div>

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
                <div class="link text-center">
                    <button class="btn btn-custom-green"
                            data-toggle="modal"
                            data-target="#rdvModal">Prendre rendez-vous</button>
                </div>

                <div class="modal fade" id="rdvModal" tabindex="-1" role="dialog" aria-labelledby="rdvModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Prendre rdv sur therapeutes.com</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Vous allez être redirigé vers mon agenda en ligne sur therapeutes.com.
                                Acceptez-vous d'être redirigé ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Revenir sur le site</button>
                                <a class="btn btn-custom-green" href="https://www.therapeutes.com/praticien-shiatsu/strasbourg/pierre-black" target="_blank">Aller sur therapeutes.com</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                <a class="btn btn-custom-green" href="{{ route('contact.create') }}">Me contacter</a>
            </div>
        </div>
</div>



@endsection
