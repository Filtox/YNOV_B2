@extends('layouts.template')

@section('title')
    Ajout Restaurant
@endsection

@section('formulaire')
    <form action="{{ route('restaurant.store') }}" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="Nom"><br>
        <input type="text" name="adresse" placeholder="Adresse"><br>
        <input type="text" name="ville" placeholder="Ville"><br>
        <input type="text" name="codepostal" placeholder="Codepostal"><br>
        <input type="text" name="siteweb" placeholder="Site web"><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <input type="text" name="cuisine" placeholder="Cuisine"><br>
        <select name="etat">
            <option value="ouvert">Ouvert</option>
            <option value="ferme">Fermé</option>
            <option value="entravaux">En travaux</option>
        </select><br>
        <input type="submit" value="Ajouter"><br>
    </form>
@endsection