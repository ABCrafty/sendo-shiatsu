@extends('layouts.admin-layout')

@section('title')
    Témoignages
@endsection

@section('content')
<h4>Citations</h4>
<div class="col-md-12 text-right">
    <button class="btn btn-primary" data-toggle="modal" data-target="#newCitation">
        <i class="fas fa-plus"></i>
        Nouvelle citation
    </button>
</div>
<table class="table table-hover witness">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Auteur</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($witnesses as $witness)
        <tr data-id="{{ $witness->id }}">
            <td>{{ $witness->title }}</td>
            <td>{{ $witness->content }}</td>
            <td>{{ $witness->author }}</td>
            <td>{{ date('d/m/Y H:i', strtotime($witness->created_at)) }}</td>
            <td>
                <button class="btn btn-warning">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-danger delete">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="newCitation" tabindex="-1" role="dialog" aria-labelledby="newCitationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="col-md-10 offset-md-1" id="new">
                <div class="modal-header">
                    <h5 class="modal-title" id="newCitationLabel">Nouvelle citation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="c_author">Auteur</label>
                        <textarea class="form-control" id="c_author" required ></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="c_title">Titre</label>
                        <textarea class="form-control" id="c_title" required ></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="c_content">Citation</label>
                        <textarea class="form-control" id="c_content" required ></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editCitation" tabindex="-1" role="dialog" aria-labelledby="editCitationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="edit">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCitationLabel">Editer une citation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row col-md-10 offset-md-1">
                        <label for="e_author">Auteur</label>
                        <textarea class="form-control" id="e_author" ></textarea>
                    </div>
                    <div class="form-group row col-md-10 offset-md-1">
                        <label for="e_title">Titre</label>
                        <textarea class="form-control" id="e_title" ></textarea>
                    </div>
                    <div class="form-group row col-md-10 offset-md-1">
                        <label for="e_content">Citation</label>
                        <textarea class="form-control" id="e_content" ></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteCitation" tabindex="-1" role="dialog" aria-labelledby="deleteCitationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supprimer la citation ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <strong>Attention :</strong>
                    Cette action est irréversible.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection