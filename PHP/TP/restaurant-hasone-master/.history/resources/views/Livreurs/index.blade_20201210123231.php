@extends('layouts.template')

@section('titre')
    Livreur
@endsection

@section('contenue')

    @foreach ($livreurs as $livreur)

    <tr>
        <th scope="row">{{ $livreur->nom }}</th>
        <td><a href=" {{ route("livreurs.show", $livreur->id) }} " class="btn btn-primary">Details</a></td>
        <td><a href=" {{ route("livreurs.edit", $livreur) }} " class="btn btn-primary">Modifier</a></td>
        <td><form action="{{ route('livreurs.destroy', $restaurant) }}" method="POST"> 
            @csrf 
            @method('DELETE') 
            <input type="submit" value="Supprimer"></form></td>
    </tr>

    @endforeach
    
@endsection