@extends('layouts.front-layout')

@section('title')
    Tarifs - @parent
@endsection

@section('content')
    <div class="prices-container">
        <h1>Les Tarifs</h1>

        <div class="prices prices-centre">
            <h2>Centre de yoga</h2>

            @foreach($prices as $price)
            @if($price->center)
            @foreach(json_decode($price->prices, true) as $p)
            <div class="price">
                <p>{{ $price->title }} - {{ $p['name'] }}</p>
                <p>{{ $p['price'] }}€</p>
            </div>
            @endforeach

            @endif
            @endforeach

        </div>

        <div class="prices prices-domicile">
            <h2>A domicile</h2>
            @foreach($prices as $price)
            @if(!$price->center)
            @foreach(json_decode($price->prices, true) as $p)
            <div class="price">
                <p>{{ $price->title }} - {{ $p['name'] }}</p>
                <p>{{ $p['price'] }}€</p>
            </div>
            @endforeach

            @endif
            @endforeach
        </div>

        <div class="prices prices-entreprises">
            <h3>Entreprises</h3>
            <p>Vous pouvez <a href="{{ route('contact.create') }}" style="text-decoration: underline">me contacter</a> pour obtenir un devis de prestation dans votre entreprise.</p>

        </div>

    </div>

@endsection
