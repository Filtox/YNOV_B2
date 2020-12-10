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
        <p class="card-text"> Types de Restaurant : {{ $restaurant->description }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
        2 days ago
        </div>
    </div>
@endsection