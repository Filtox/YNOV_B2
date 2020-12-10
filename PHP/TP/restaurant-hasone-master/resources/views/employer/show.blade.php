@extends('layouts.template2')


@section('titre')
    
@endsection


@section('contenue')
    <div class="card text-center">
        <div class="card-header">
            {{ $employer->nom }}
        </div>
        <div class="card-body">
        <h5 class="card-title">{{ $employer->nom }}</h5>
        <h5 class="card-title">{{ $employer->prenom }}</h5>
        <h5 class="card-title">{{ $employer->restaurant_id }}</h5>
        </div>
    </div>
@endsection