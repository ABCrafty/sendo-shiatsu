@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', 'Accès interdit')

@section('image')
<div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __($exception->getMessage() ?: 'Désolé, vous n'êtes pas autorisé à accéder à cette page.'))
