@extends('layouts.template')

@section('titre')
    Livreur
@endsection

@section('contenue')

    @foreach ($livreurs as $livreur)

    <tr>
        <th scope="row">{{ $restaurant->nom }}</th>
        <td>{{ $restaurant->adresse->adresse }}</td>
        <td>{{ $restaurant->adresse->ville }}</td>
        <td>{{ $restaurant->adresse->codepostal }}</td>
        <td>{{ $restaurant->types }}</td>
        <td><a href=" {{ route("restaurants.show", $restaurant->id) }} " class="btn btn-primary">Details</a></td>
        <td><a href=" {{ route("restaurants.edit", $restaurant) }} " class="btn btn-primary">Modifier</a></td>
        <td><form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST"> 
            @csrf 
            @method('DELETE') 
            <input type="submit" value="Supprimer"></form></td>
    </tr>

    @endforeach
    
@endsection