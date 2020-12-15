@extends('layouts.template2')

@section('titre')
    Ajouter un Employé
@endsection

@section('contenue')
    <form method="POST" action="{{ route('restaurants.store') }}">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name" required="required"><br>

        <label for="Prenom">Prenom : </label>
        <input name="Prenom" id="Prenom" class="form-control" rows="14" required="required"><br>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection