@extends('layouts.template')

@section('titre')
    Adresse
@endsection

@section('contenue')

    @foreach ($adresses as $adresse)

    <tr>
        <th scope="row">{{ $adresse->restaurant->nom }}</th>
        <td>{{ $adresse->adresse }}</td>
        <td>{{ $adresse->ville }}</td>
        <td>{{ $adresse->codepostal }}</td>
        <td>{{ $$adresse->restauranttypes }}</td>
        
    </tr>

    @endforeach
    
@endsection