@extends('layouts.admin-layout')

@section('title')
    Prestations
@endsection

@section('content')
    <form action="{{ route('admin.prestation.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_title">Titre du premier paragraphe</label>
            <input
                type="text"
                id="first_title"
                name="first_prestation_title"
                placeholder="Titre"
                class="form-control"
                required
                @if($prestations)value="{{ $prestations->first_prestation_title }}"@endif
            />
        </div>

        <div class="form-group">
            <label for="first_content">Contenu du premier paragraphe</label>
            <textarea
                id="first_content"
                name="first_prestation_content"
                placeholder="Titre"
                class="form-control"
                rows="4"
                required
            >@if($prestations){{ $prestations->first_prestation_content}}@endif</textarea>
        </div>

        <div class="form-group">
            <label for="horaires">Horaires</label>
            <textarea
                id="horaires"
                name="first_prestation_horaires"
                placeholder="Titre"
                class="form-control"
                rows="4"
                required
            >@if($prestations){{ $prestations->first_prestation_horaires }}@endif</textarea>
        </div>

        <div class="first_preview">
            @if($prestations)
                <img src="{{ $prestations->first_prestation_image }}" alt="" />
            @endif
        </div>

        <div class="form-group">
            <label for="first_image">Illustration du premier paragraphe</label>
            <input type="file" name="first_prestation" class="form-control-file" id="first_image" required />
        </div>

        <hr />

        <div class="form-group">
            <label for="second_title">Titre du deuxième paragraphe</label>
            <input
                type="text"
                id="second_title"
                name="second_prestation_title"
                placeholder="Titre"
                class="form-control"
                required
                @if($prestations)value="{{ $prestations->second_prestation_title }}"@endif
            />
        </div>

        <div class="form-group">
            <label for="second_content">Contenu du deuxième paragraphe</label>
            <textarea
                id="second_content"
                name="second_prestation_content"
                placeholder="Titre"
                class="form-control"
                rows="4"
                required
            >@if($prestations){{ $prestations->second_prestation_content}}@endif</textarea>
        </div>

        <div class="second_preview">
            @if($prestations)
                <img src="{{ $prestations->second_prestation_image }}" alt="" />
            @endif
        </div>

        <div class="form-group">
            <label for="second_image">Example file input</label>
            <input type="file" name="second_prestation" class="form-control-file" id="second_image" required />
        </div>

        <hr />

        <div class="form-group">
            <label for="third_title">Titre du troisième paragraphe</label>
            <input
                type="text"
                id="third_title"
                name="third_prestation_title"
                placeholder="Titre"
                class="form-control"
                required
                @if($prestations)value="{{ $prestations->third_prestation_title }}"@endif
            />
        </div>

        <div class="form-group">
            <label for="third_content">Contenu du troisième paragraphe</label>
            <textarea
                id="third_content"
                name="third_prestation_content"
                placeholder="Titre"
                class="form-control"
                rows="4"
                required
            >@if($prestations){{ $prestations->third_prestation_content}}@endif</textarea>
        </div>

        <div class="third_preview">
            @if($prestations)
                <img src="{{ $prestations->third_prestation_image }}" alt="" />
            @endif
        </div>

        <div class="form-group">
            <label for="third_image">Illustration du troisième paragraphe</label>
            <input type="file" name="third_prestation" class="form-control-file" id="third_image" required />
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">
                Enregistrer
                <i class="fas fa-check"></i>
            </button>
        </div>
    </form>
@endsection