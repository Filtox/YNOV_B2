@extends('layouts.template')

@section('title')
    Liste Employés
@endsection

@section('contenu')
    @foreach($employers as $employer)
        <a href="{{ route('employer.show', $employer) }}">Employé : {{ $employer->nom }}, {{ $employer->prenom }}</a><br>
        <a href="{{ route('restaurant.show', $employer->restaurant) }}">Restaurant : {{ $employer->restaurant->nom }}</a>
        <div style="display: flex">
            <a href="{{ route('employer.edit', $employer) }}" style="margin-right: .2em">
                <button style="cursor: pointer">Modifier</button>
            </a>
            <form action="{{ route('employer.destroy', $employer) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Supprimer" style="cursor: pointer">
            </form>
        </div><br><br>
    @endforeach
@endsection