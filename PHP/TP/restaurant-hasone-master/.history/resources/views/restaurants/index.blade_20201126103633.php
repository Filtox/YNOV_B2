@extends('layouts.template')

@section('titre')
    Restaurant
@endsection

@section('contenue')

    @foreach ($restaurants as $restaurant)

    <tr>
        <th scope="row">{{ $restaurant->nom }}</th>
        <td>{{ $restaurant->adresse }}</td>
        <td>{{ $restaurant->ville }}</td>
        <td>{{ $restaurant->codepostal }}</td>
        <td>{{ $restaurant->types }}</td>
        <td>{{ $restaurant->codepostal }}</td>
        <td><a href=" {{ route("restaurants.show", $restaurant->id) }} " class="card-link">Details</a></td>
    </tr>





        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $restaurant->nom }}</h5>
            <p class="card-text">{{ $restaurant->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $restaurant->adresse }}</li>
            <li class="list-group-item">{{ $restaurant->ville }}</li>
            <li class="list-group-item">{{ $restaurant->types }}</li>
            </ul>
            <div class="card-body">
            <a href=" {{ route("restaurants.show", $restaurant->id) }} " class="card-link">Details</a>
            <a href=" {{ route("restaurants.destroy", $restaurant) }}" class="card-link">Delete</a>
            </div>
        </div>
    @endforeach
    
@endsection