@extends('layouts.template')

@section('title')
    {{ $employer->nom }}
@endsection

@section('contenu')
    Nom : {{ $employer->nom }}<br>
    Prenom : {{ $employer->prenom }}<br>
    Restaurant : {{ $employer->restaurant->nom }}<br>
@endsection
