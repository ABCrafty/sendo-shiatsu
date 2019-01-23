@extends('layouts.admin-layout')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <form action="{{ route('admin.homepage.update') }}" class="homepage" enctype="multipart/form-data" method="POST">
        @csrf

        @if($errors)
            @foreach($errors as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif

        <ul class="nav nav-tabs" id="tabulations" role="tablist">
            <li class="nav-item">
                <a
                    class="nav-link active"
                    id="prestations-tab"
                    data-toggle="tab"
                    href="#prestations"
                    role="tab"
                    aria-controls="prestations"
                    aria-selected="true"
                >
                    Prestations
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="shiatsu-tab"
                    data-toggle="tab"
                    href="#shiatsu"
                    role="tab"
                    aria-controls="shiatsu"
                    aria-selected="false"
                >
                    Shiatsu
                </a>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="doin-tab"
                    data-toggle="tab"
                    href="#doin"
                    role="tab"
                    aria-controls="doin"
                    aria-selected="false"
                >
                    Do In
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade show active"
                id="prestations"
                role="tabpanel"
                aria-labelledby="prestations-tab"
            >
                <!-- PREMIER BLOC -->

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="first_title">Titre de la 1ère prestation</label>
                    <div class="col-md-4">
                        <input
                            id="first_title"
                            name="first_presta_title"
                            type="text"
                            value="{{ $homepage->first_presta_title }}"
                            placeholder="Titre"
                            class="form-control"
                            required
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="first_content">Description de la 1ère prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control"
                            id="first_content"
                            name="first_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        >{{ $homepage->first_presta_content }}</textarea>
                    </div>
                </div>

                <hr />

                <!-- DEUXIÈME BLOC -->

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="second_title">Titre de la 2ème prestation</label>
                    <div class="col-md-4">
                        <input
                            id="second_title"
                            name="second_presta_title"
                            type="text"
                            value="{{ $homepage->second_presta_title }}"
                            placeholder="Titre"
                            class="form-control"
                            required
                        >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="second_content">Description de la 2ème prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control"
                            id="second_content"
                            name="second_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        >{{ $homepage->second_presta_content }}</textarea>
                    </div>
                </div>

                <hr />

                <!-- TROISIÈME BLOC -->

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="third_title">Titre de la 3ème prestation</label>
                    <div class="col-md-4">
                        <input
                            id="third_title"
                            name="third_presta_title"
                            type="text"
                            value="{{ $homepage->third_presta_title }}"
                            placeholder="Titre"
                            class="form-control"
                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="third_content">Description de la 3ème prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control"
                            id="third_content"
                            name="third_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        >{{ $homepage->third_presta_content }}</textarea>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="shiatsu"
                role="tabpanel"
                aria-labelledby="shiatsu-tab"
            >
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="shiatsu">Illustration du Shiatsu</label>
                    <div class="col-md-4">
                        <input type="file" name="shiatsu" class="form-control-file" id="shiatsu_image" />
                    </div>
                </div>

                <div class="preview-shiatsu">
                    <img src="{{ $homepage->shiatsu_image }}" alt="">
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="shiatsu_text">Description du Shiatsu</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="shiatsu_text" name="shiatsu_text" placeholder="Max: 255 caractères" required>{{ $homepage->shiatsu_text }}</textarea>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="doin"
                role="tabpanel"
                aria-labelledby="doin-tab"
            >
                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="doin">Illustration du Do In</label>
                    <div class="col-md-4">
                        <input type="file" name="doin" class="form-control-file" id="doin_image" />
                    </div>
                </div>

                <div class="preview-doin">
                    <img src="{{ $homepage->doin_image }}" alt="">
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="doin_text">Description du Do In</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="doin_text" name="doin_text" placeholder="Max: 255 caractères" required>{{ $homepage->doin_text }}</textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                Enregistrer
                <i class="fas fa-check"></i>
            </button>
        </div>
    </form>
@endsection