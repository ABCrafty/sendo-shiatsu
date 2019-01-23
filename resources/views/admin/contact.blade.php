@extends('layouts.admin-layout')

@section('title')
    Messages reçus
@endsection

@section('content')
<div class="row messages">
    <h4>Messages reçus</h4>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Expéditeur</th>
                <th>Objet</th>
                <th>Reçu le :</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($messages as $message)
            <tr class="{{ $message->lu ? 'read' : 'pending' }}" data-id="{{ $message->id }}">
                <td>{{ $message->email }}</td>
                <td>{{ $message->sujet }}</td>
                <td>{{ date('d/m/Y H:i', strtotime($message->created_at)) }}</td>
                <td>
                    <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="showMessage" tabindex="-1" role="dialog" aria-labelledby="showMessageLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-12">
                        <span class="message-email"></span>
                    </div>
                    <div class="col-md-12">
                        <span class="message-sujet"></span>
                    </div>
                    <div class="col-md-12">
                        <span class="message-date"></span>
                    </div>
                    <div class="col-md-12 message-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="far fa-trash-alt"></i>
                        Supprimer
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer le message ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Attention, la suppression de ce message est irréversible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger">Confirmer</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection