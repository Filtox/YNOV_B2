@extends('layouts.template')


@section('titre')
    
@endsection


@section('contenue')
    <div class="card text-center">
        <div class="card-header">
            {{ $restaurant->nom }}
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $restaurant->nom }}</h5>
        <p class="card-text"> Adresse : {{ $restaurant->adresse }}</p>
        <p class="card-text"> Ville : {{ $restaurant->ville }}</p>
        <p class="card-text"> Code Postal : {{ $restaurant->codepostal }}</p>
        <p class="card-text"> Description : {{ $restaurant->description }}</p>
        <p class="card-text"> Types de Restaurant : {{ $restaurant->types }}</p>
        <a href="{{ route('restaurants.edit', $restaurant) }}" class="btn btn-primary">Modifier</a>
        <a href="{{ route('restaurants.destroy', $restaurant) }}" class="btn btn-primary">DELETE</a>
        </div>
    </div>
@endsection