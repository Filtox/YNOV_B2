@extends('layouts.template')

@section('titre')
    Ajouter un Restaurant
@endsection

@section('contenue')
    <form method="POST" action="{{ route('restaurants.store') }}">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name" required="required"><br>

        <label for="Adresse">Adresse : </label>
        <input name="Adresse" id="Adresse" class="form-control" rows="14" required="required"><br>

        <label for="ville">ville : </label>
        <input name="ville" id="ville" class="form-control" rows="14" required="required"><br>

        <label for="code">Code Postal : </label>
        <input name="code" id="code" class="form-control" rows="14" required="required"><br>

        <label for="description">Description : </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="types">Types de Cuisine : </label>
        <input name="types" id="types" class="form-control" rows="14" required="required"><br>

        <label for="etat">Etat : (</label>
        <input name="etat" id="etat" class="form-control" rows="14" required="required"><br>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection