@extends('layouts.admin-layout')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <form action="{{ route('admin.homepage.update') }}" class="homepage" enctype="multipart/form-data" method="POST">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <h4>Informations de la page d'accueil</h4>

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
                            @if($homepage)value="{{ $homepage->first_presta_title }}" @endif
                            placeholder="Titre"
                            class="form-control {{ !$errors->has('first_presta_title') ?: 'is-invalid' }}"
                            required
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="first_content">Description de la 1ère prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control {{ !$errors->has('first_presta_content') ?: 'is-invalid' }}"
                            id="first_content"
                            name="first_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        >@if($homepage){{ $homepage->first_presta_content }}@endif</textarea>
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
                            @if($homepage)value="{{ $homepage->second_presta_title }}" @endif
                            placeholder="Titre"
                            class="form-control {{ !$errors->has('second_presta_title') ?: 'is-invalid' }}"
                            required
                        >
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="second_content">Description de la 2ème prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control {{ !$errors->has('second_presta_content') ?: 'is-invalid' }}"
                            id="second_content"
                            name="second_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        >@if($homepage){{ $homepage->second_presta_content }}@endif</textarea>
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
                            @if($homepage)value="{{ $homepage->third_presta_title }}" @endif
                            placeholder="Titre"
                            class="form-control {{ !$errors->has('third_presta_title') ?: 'is-invalid' }}"
                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="third_content">Description de la 3ème prestation</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control {{ !$errors->has('third_presta_content') ?: 'is-invalid' }}"
                            id="third_content"
                            name="third_presta_content"
                            placeholder="Max: 255 caractères"
                            required
                        >@if($homepage){{ $homepage->third_presta_content }}@endif</textarea>
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
                    @if($homepage)<img src="{{ $homepage->shiatsu_image }}" alt="">@endif
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="shiatsu_text">Description du Shiatsu</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control {{ !$errors->has('shiatsu_text') ?: 'is-invalid' }}"
                            id="shiatsu_text"
                            name="shiatsu_text"
                            placeholder="Max: 255 caractères"
                            required
                        >@if($homepage){{ $homepage->shiatsu_text }}@endif</textarea>
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
                    @if($homepage)<img src="{{ $homepage->doin_image }}" alt="">@endif
                </div>

                <div class="form-group row">
                    <label class="col-md-4 col-form-label" for="doin_text">Description du Do In</label>
                    <div class="col-md-4">
                        <textarea
                            class="form-control {{ !$errors->has('doin_text') ?: 'is-invalid' }}"
                            id="doin_text"
                            name="doin_text"
                            placeholder="Max: 255 caractères"
                            required>@if($homepage){{ $homepage->doin_text }}@endif</textarea>
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