@extends('errors::illustrated-layout')

@section('code', '500')
@section('title', __('Erreur'))

@section('image')
<div style="background-image: url({{ asset('/svg/500.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', 'Un problème est survenu sur le site. Veuillez contacter les administrateurs.')
