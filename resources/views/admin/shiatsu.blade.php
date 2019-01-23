@extends('layouts.admin-layout')

@section('title')
    Présentation du Shiatsu
@endsection

@section('content')
    <form action="{{ route('admin.shiatsu.update') }}" class="shiatsu" enctype="multipart/form-data" method="POST">
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

    <!-- Premier bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="first_title">Titre du 1er paragraphe</label>
            <div class="col-md-4">
                <input
                        id="first_title"
                        name="first_paragraph_title"
                        type="text"
                        @if($shiatsu)value="{{ $shiatsu->first_paragraph_title }}" @endif
                        placeholder="Titre"
                        class="form-control"
                        required
                />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="first_content">1er paragraphe</label>
            <div class="col-md-4">
                <textarea
                        id="first_content"
                        name="first_paragraph_content"
                        type="text"
                        rows="6"
                        class="form-control"
                        required
                > @if($shiatsu){{ $shiatsu->first_paragraph_content }} @endif</textarea>
            </div>
        </div>

        <hr />

        <!-- Deuxième bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="second_title">Titre du 2ème paragraphe</label>
            <div class="col-md-4">
                <input
                        id="second_title"
                        name="second_paragraph_title"
                        type="text"
                        @if($shiatsu)value="{{ $shiatsu->second_paragraph_title }}" @endif
                        placeholder="Titre"
                        class="form-control"
                        required
                />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="second_content">2ème paragraphe</label>
            <div class="col-md-4">
                <textarea
                        id="second_content"
                        name="second_paragraph_content"
                        type="text"
                        rows="6"
                        placeholder="Titre"
                        class="form-control"
                        required
                > @if($shiatsu){{ $shiatsu->second_paragraph_content }} @endif</textarea>
            </div>
        </div>

        <hr />

        <!-- Troisième bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="third_title">Titre du 3ème paragraphe</label>
            <div class="col-md-4">
                <input
                        id="third_title"
                        name="third_paragraph_title"
                        type="text"
                        @if($shiatsu)value="{{ $shiatsu->third_paragraph_title }}" @endif
                        placeholder="Titre"
                        class="form-control"
                        required
                />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="third_content">3ème paragraphe</label>
            <div class="col-md-4">
                <textarea
                        id="third_content"
                        name="third_paragraph_content"
                        type="text"
                        rows="6"
                        placeholder="Titre"
                        class="form-control"
                        required
                > @if($shiatsu){{ $shiatsu->third_paragraph_content }} @endif</textarea>
            </div>
        </div>

        <hr />

        <!-- Image + wellness -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="image">Titre du 3ème paragraphe</label>
            <div class="col-md-4">
                <input type="file" name="img" class="form-control-file" id="image" />
            </div>
        </div>

        <div class="preview-shiatsu">
            @if($shiatsu)<img src="{{ $shiatsu->image }}" alt=""> @endif
        </div>

        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="wellness">Liste des bienfaits</label>
            <div class="col-md-4">
                <textarea
                        id="third_content"
                        name="wellness"
                        type="text"
                        rows="6"
                        placeholder="Hello"
                        class="form-control"
                        required
                >@if($shiatsu){{ $shiatsu->wellness }} @endif</textarea>
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