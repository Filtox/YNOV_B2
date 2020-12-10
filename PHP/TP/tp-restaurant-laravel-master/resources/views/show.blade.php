@extends('layouts.template')

@section('title')
    {{ $restaurant->nom }}
@endsection

@section('contenu')
    Nom : {{ $restaurant->nom }}<br>
    Adresse : {{ $restaurant->adresse->adresse }}<br>
    Ville : {{ $restaurant->adresse->ville }}<br>
    Code Postal : {{ $restaurant->adresse->codepostal }}<br>
    Site Web : {{ $restaurant->siteweb }}<br>
    Description : {{ $restaurant->description }}<br>
    Cuisine : {{ $restaurant->cuisine }}<br>
    Etat : {{ $restaurant->etat }}<br>
@endsection
