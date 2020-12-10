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
        <td><a href=" {{ route("restaurants.show", $restaurant->id) }} " class="btn btn-primary">Details</a></td>
        <form action="{{ route('articles.destroy', $article) }}" method="POST"> 
            @csrf 
            @method('DELETE') 
            <input type="submit" value="Supprimer"></form>
        <td><a href=" {{ route("restaurants.destroy", $restaurant) }}" class="btn btn-danger">Delete</a></td>
    </tr>

    @endforeach
    
@endsection