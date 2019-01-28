@extends('layouts.admin-layout')

@section('title')
    Présentation du Do In
@endsection

@section('content')
    <form action="{{ route('admin.doin.update') }}" class="doin" enctype="multipart/form-data" method="POST">
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

        <h4>Description du Do In</h4>

        <!-- Premier bloc -->
        <div class="form-group row">
            <label class="col-md-4 col-form-label" for="first_title">Titre du 1er paragraphe</label>
            <div class="col-md-4">
                <input
                    id="first_title"
                    name="first_paragraph_title"
                    type="text"
                    @if($doin)value="{{ $doin->first_paragraph_title }}" @endif
                    placeholder="Titre"
                    class="form-control {{ !$errors->has('first_paragraph_title') ?: 'is-invalid' }}"
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
                    class="form-control {{ !$errors->has('first_paragraph_content') ?: 'is-invalid' }}"
                    required
                > @if($doin){{ $doin->first_paragraph_content }} @endif</textarea>
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
                    @if($doin)value="{{ $doin->second_paragraph_title }}" @endif
                    placeholder="Titre"
                    class="form-control {{ !$errors->has('second_paragraph_title') ?: 'is-invalid' }}"
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
                    class="form-control {{ !$errors->has('second_paragraph_content') ?: 'is-invalid' }}"
                    required
                > @if($doin){{ $doin->second_paragraph_content }} @endif</textarea>
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
                    @if($doin)value="{{ $doin->third_paragraph_title }}" @endif
                    placeholder="Titre"
                    class="form-control {{ !$errors->has('third_paragraph_title') ?: 'is-invalid' }}"
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
                    class="form-control {{ !$errors->has('third_paragraph_content') ?: 'is-invalid' }}"
                    required
                > @if($doin){{ $doin->third_paragraph_content }} @endif</textarea>
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

        <div class="preview-doin">
            @if($doin)<img src="{{ $doin->image }}" alt=""> @endif
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
                    class="form-control {{ !$errors->has('wellness') ?: 'is-invalid' }}"
                    required
                >@if($doin){{ $doin->wellness }} @endif</textarea>
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