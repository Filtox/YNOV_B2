@extends('layouts.template')

@section('title')
    Accueil
@endsection

@section('contenu')
    @foreach($restaurants as $restaurant)
    <div style="display: flex">
        <a href="{{ route('restaurant.show', $restaurant) }}" style="margin-right: .5em">{{ $restaurant->nom }}</a>
        <a href="{{ route('restaurant.edit', $restaurant) }}"style="margin-right: .2em">
            <button style="cursor: pointer">Modifier</button>
        </a>
        <form action="{{ route('restaurant.destroy', $restaurant) }}" method="POST">
            @csrf
            @method("DELETE")
            <input type="submit" value="Supprimer" style="cursor: pointer">
        </form>
        </div><br><br>
    @endforeach
@endsection