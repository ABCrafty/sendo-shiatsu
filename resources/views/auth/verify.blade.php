@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vérifiez votre adresse e-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Un lien de vérification vous a été envoyé
                        </div>
                    @endif

                    Avant de continuer, vérifiez votre boite mail
                    Si vous n'avez pas reçu le mail, <a href="{{ route('verification.resend') }}">Cliquez ici pour renvoyer le mail</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
