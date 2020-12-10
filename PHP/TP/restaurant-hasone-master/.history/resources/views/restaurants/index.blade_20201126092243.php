@extends('layouts.template')

@section('titre')
    Restaurant
@endsection

@section('contenue')

    @foreach ($restaurants as $restaurant)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $restaurant->nom }}</h5>
            <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    @endforeach
    
@endsection