@extends('layouts.admin-layout')

@section('title')
    Tarifs
@endsection

@section('content')
    <div class="row prices">
        <div class="col-md-6 centre">
            <h4 class="text-center">En centre</h4>
            @foreach($prices as $price)
            @if($price->center)
            <div class="card" data-id="{{ $price->id }}">
                <div class="card-body">
                    <h5 class="card-title" data-toggle="collapse" data-id="{{ $price->id }}" data-target="#centre{{ $price->id }}">{{ $price->title }}</h5>
                    <div class="collapse" id="centre{{ $price->id }}">
                        <table class="table table-hover">
                            <tbody>
                            @foreach(json_decode($price->prices, true) as $p)
                                <tr>
                                    <td>{{ $p['name'] }}</td>
                                    <td>{{ $p['price'] }}€</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            <button class="btn btn-warning">Editer</button>
                            <button class="btn btn-danger">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-md-6 domicile">
            <h4 class="text-center">À domicile</h4>
            @foreach($prices as $price)
                @if(!$price->center)
                    <div class="card" data-id="{{ $price->id }}">
                        <div class="card-body">
                            <h5 class="card-title" data-toggle="collapse" data-target="#centre{{ $price->id }}">{{ $price->title }}</h5>
                            <div class="collapse" id="centre{{ $price->id }}">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach(json_decode($price->prices, true) as $p)
                                        <tr>
                                            <td>{{ $p['name'] }}</td>
                                            <td>{{ $p['price'] }}€</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <button class="btn btn-warning">Editer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cTarifModal">
                <i class="fas fa-plus"></i>
                Nouveau tarif
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cTarifModal" tabindex="-1" role="dialog" aria-labelledby="cTarifModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.prices.create') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau tarif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="title">Titre de la prestation</label>
                                <input type="text" class="form-control" name="title" id="title" />
                            </div>
                            <h5>Tarifs</h5>
                            <div class="grid">
                            <div class="row">
                                <div class="form-group col-md-5">
                                        <input
                                            type="text"
                                            name="price[0][name]"
                                            class="form-control"
                                            placeholder="ex: Tarif normal"
                                            required
                                        />
                                    </div>

                                    <div class="form-group col-md-5">
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                name="price[0][price]"
                                                class="form-control"
                                                placeholder="ex: 25.00"
                                                required
                                            />
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon1">€</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 rm-row">
                                        <button type="button" class="btn btn-danger">&times;</button>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary btn-sm add-tarif">
                                    <i class="fas fa-plus"></i>
                                    Nouveau tarif
                                </button>
                            </div>

                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="center" class="custom-control-input" id="toggleCenter" checked>
                                <label class="custom-control-label" for="toggleCenter">Prestation en centre</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eTarifModal" tabindex="-1" role="dialog" aria-labelledby="eTarifModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.prices.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="title">Titre de la prestation</label>
                                <input type="text" class="form-control" name="title" id="title" />
                            </div>
                            <h5>Tarifs</h5>
                            <div class="grid">
                                <div class="form-group col-md-5">
                                    <input
                                        type="text"
                                        name="price[0][name]"
                                        class="form-control"
                                        placeholder="ex: Tarif normal"
                                        required
                                    />
                                </div>

                                <div class="form-group col-md-5">
                                    <div class="input-group">
                                        <input
                                            type="text"
                                            name="price[0][price]"
                                            class="form-control"
                                            placeholder="ex: 25.00"
                                            required
                                        />
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-primary btn-sm add-tarif">
                                    <i class="fas fa-plus"></i>
                                    Nouveau tarif
                                </button>
                            </div>

                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="center" class="custom-control-input" id="toggleCenter" checked>
                                <label class="custom-control-label" for="toggleCenter">Prestation en centre</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dTarifModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer la prestation ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Les prix liés seront également supprimés. <br />
                    Attention, cette action est irreversible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                        Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection