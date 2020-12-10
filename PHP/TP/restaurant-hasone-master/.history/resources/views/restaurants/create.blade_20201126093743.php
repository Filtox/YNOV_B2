@extends('layouts.template')

@section('titre')
    Ajouter un Restaurant
@endsection

@section('contenue')
    <form method="POST" action="{{ route('restaurants.store') }}">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" name="title" id="title" required="required"><br>

        <label for="description">contenue : </label>
        <textarea name="description" id="description" class="form-control" rows="14" required="required"></textarea>
        <input type="checkbox" name="published" value="1">

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection