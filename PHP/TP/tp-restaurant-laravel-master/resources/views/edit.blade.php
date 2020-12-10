@extends('layouts.template')

@section('title')
    Modifier
@endsection

@section('formulaire')
    <form action="{{ route('restaurant.update', $restaurant) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="nom" value="{{ $restaurant->nom }}"><br>
        <input type="text" name="adresse" value="{{ $restaurant->adresse->adresse }}"><br>
        <input type="text" name="ville" value="{{ $restaurant->adresse->ville }}"><br>
        <input type="text" name="codepostal" value="{{ $restaurant->adresse->codepostal }}"><br>
        <input type="text" name="siteweb" value="{{ $restaurant->siteweb }}"><br>
        <textarea name="description">{{ $restaurant->description }}</textarea><br>
        <input type="text" name="cuisine" value="{{ $restaurant->cuisine }}"><br>
        <select name="etat">
            <option value="ouvert">Ouvert</option>
            <option value="ferme">Fermé</option>
            <option value="entravaux">En travaux</option>
        </select><br>
        <input type="submit" value="Modifier"><br>
    </form>
@endsection