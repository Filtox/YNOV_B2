@extends('layouts.template2')


@section('titre')
    
@endsection


@section('contenue')
    <div class="card text-center">
        <div class="card-header">
            {{ $restaurant->nom }}
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $restaurant->nom }}</h5>
        <p class="card-text"> Adresse : {{ $restaurant->adresse->adresse }}</p>
        <p class="card-text"> Ville : {{ $restaurant->adresse->ville }}</p>
        <p class="card-text"> Code Postal : {{ $restaurant->adresse->codepostal }}</p>
        <p class="card-text"> Description : {{ $restaurant->description }}</p>
        <p class="card-text"> Types de Restaurant : {{ $restaurant->types }}</p>
        <p class="card-text"> Employers : 
            @foreach ($employes as $employe)
                {{ $restaurant->employes }}
            @endforeach
             </p> 
        
        <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-primary">Modifier</a>
        <a href="{{ route('employes.create', $restaurant->id) }}" class="btn btn-success">Add Emp</a>
        <a href="{{ route('restaurants.destroy', $restaurant) }}" class="btn btn-danger">DELETE</a>
        </div>
    </div>
@endsection