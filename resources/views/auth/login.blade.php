@extends('layouts.app')
@section('title')
    Connexion - @parent
@endsection

@section('content')
    <div class="login-container">

        <h1>Se connecter</h1>


        {!! Form::open(['route' => ['login'], 'method' => 'post',
                'enctype' => 'multipart/form-data', 'role' => 'form', 'class' => ' form-bordered form-horizontal']) !!}

        @include('layouts.errors._errors')
        <div class="form-group form-custom <?php if($errors->has('email')) { echo 'has-danger';} ?>">
            <div class="col-3">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
            </div>
            <div class="col-12">
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! $errors->first('email', '<span class="help-block">Ce champ est obligatoire</span>') !!}
            </div>
        </div>

        <div class="form-group form-custom <?php if($errors->has('password')) { echo 'has-danger';} ?>">
            <div class="col-6">
                {!! Form::label('password', 'Mot de passe', ['class' => 'control-label']) !!}
            </div>
            <div class="col-12 password-field">
                {!! Form::password('password', null, ['class' => 'form-control']) !!}
                {!! $errors->first('password', '<span class="help-block">Ce champ est obligatoire</span>') !!}
            </div>
        </div>

        <button type="submit" class="btn blue-button">Se connecter</button>

        {!! Form::close() !!}
    </div>
@endsection