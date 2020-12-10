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
        <input type="checkbox" name="published" value="1">

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection