@extends('application')

@section('page-title')
    Créer
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
        <div class="col-12">
            <h2 class="text-center">Recettes</h2>
        </div>
    </div>

    <form action="{{ route('cuisine.store') }}" method="POST">
    @csrf
        <label for="">Entrez le titre</label><br><br>
        <input type="text" name="nom" value=""><br><br>
        <textarea name="ingredients" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Envoyer"><br>
    </form>
@endsection