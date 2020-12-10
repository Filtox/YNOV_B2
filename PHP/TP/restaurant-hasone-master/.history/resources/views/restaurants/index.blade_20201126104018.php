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
        <td><a href=" {{ route("restaurants.show", $restaurant->id) }} " class="card-link">Details</a></td>
        <td><a href=" {{ route("restaurants.destroy", $restaurant->id) }}" class="card-link">Delete</a></td>
    </tr>

    @endforeach
    
@endsection