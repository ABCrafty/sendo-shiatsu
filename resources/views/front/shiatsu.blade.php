@extends('layouts.front-layout')

@section('title')
    Shiatsu - @parent
@endsection

@section('meta-description')
Le Shiatsu est une thérapie manuelle Japonaise qui apporte relaxation, équilibre mental et
physique ainsi que le maintien de votre santé. Découvrez ses bienfaits avec Sendo Shiatsu à Strasbourg.
@endsection

@section('content')

    <div class="container shiatsu">
        <div class="row">
            <div class="col-md-9">
                <div class="presentation">
                    <h3>{{ $shiatsu->first_paragraph_title }}</h3>
                    <div class="paragraph-presentation">
                        @foreach(explode("\n", $shiatsu->first_paragraph_content) as $i => $line)
                            @if (trim($line))
                                {!!'<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="paragraph-presentation">
                        <h3>{{ $shiatsu->second_paragraph_title }}</h3>
                        @foreach(explode("\n", $shiatsu->second_paragraph_content) as $line)
                            @if (trim($line))
                                {!! '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                    <div class="paragraph-presentation">
                        <h3>{{ $shiatsu->third_paragraph_title }}</h3>
                        @foreach(explode("\n", $shiatsu->third_paragraph_content) as $line)
                            @if (trim($line))
                                {!! '<p>' . $line . '</p>' !!}
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 aside">
                <div class="illustration">
                    <img src="{{ $shiatsu->image }}" alt="{{ basename($shiatsu->image) }}">
                </div>

                <div class="wellness-list">
                    <ul>
                    @foreach(explode("\n", $shiatsu->wellness) as $line)
                        <li>{{ $line }}</li>
                    @endforeach
                    </ul>
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
    </div>

@endsection
