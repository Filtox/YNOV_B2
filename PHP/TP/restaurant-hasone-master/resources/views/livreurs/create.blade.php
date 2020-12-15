@extends('layouts.template2')

@section('titre')
    Ajouter un livreur
@endsection

@section('contenue')
    <form method="POST" action="{{ route('livreurs.store') }}">
        @csrf
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required="required"><br>

        <input type="hidden" name="restaurant_id" value="{{ $restaurant_id }}"><br><br>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection