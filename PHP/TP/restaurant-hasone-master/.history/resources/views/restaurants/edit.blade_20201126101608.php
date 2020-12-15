@extends('layouts.template')

@section('titre')
    Modification
@endsection

@section('contenue')
    <form method="POST" action="{{ route('restaurants.update') }}">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" name="name" id="name"><br>

        <label for="Adresse">Adresse : </label>
        <input name="Adresse" id="Adresse" class="form-control" rows="14" ><br>

        <label for="ville">ville : </label>
        <input name="ville" id="ville" class="form-control" rows="14" ><br>

        <label for="code">Code Postal : </label>
        <input name="code" id="code" class="form-control" rows="14" ><br>

        <div class="form-group">
            <label for="description">Description : </label>
            <textarea name="description" id="exampleFormControlTextarea1" cols="30" rows="3"></textarea><br>
        </div>

        <label for="types">Types de Cuisine : </label>
        <input name="types" id="types" class="form-control" rows="14"><br>

        <label for="etat">Etat : (Ouvert / Fermé / Travaux)</label>
        <input name="etat" id="etat" class="form-control" rows="14"><br>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection