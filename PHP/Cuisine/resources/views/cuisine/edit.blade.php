@extends('application')

@section('page-title')
    Modifier fichier
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
        <div class="col-12">
            <h2 class="text-center">Modification</h2>
        </div>
    </div>

    <form action="{{ route('cuisine.update', $recette) }}" method="POST">
    @csrf
    @method('PUT')
        <label for="">Modification titre</label><br><br>
        <input type="text" name="nom" value="{{ $recette->nom}}"><br><br>
        <textarea name="ingredients" id="" cols="30" rows="10">{{ $recette->ingredients}}</textarea><br><br>
        <br><br>
        <input type="submit" value="Envoyer"><br>
    </form>
@endsection