@extends('layouts.template')

@section('titre')
    Adresse
@endsection

@section('contenue')

    @foreach ($adresses as $adresse)

    <tr>
        <th scope="row">{{ $adresse->restaurant->nom }}</th>
        <td>{{ $adresse->adresse }}</td>
        <td>{{ $restaurant->adresse->ville }}</td>
        <td>{{ $restaurant->adresse->codepostal }}</td>
        <td>{{ $restaurant->types }}</td>
        
    </tr>

    @endforeach
    
@endsection