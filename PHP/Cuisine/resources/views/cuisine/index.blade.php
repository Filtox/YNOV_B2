@extends('layout.template')

@section('page-title')
Recettes
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
    <div class="col-12">
        <h2 class="text-center">Recettes</h2>
    </div>
</div>

<div class="row">
    <h1>TOUTes LES recettes</h1><br>
    @foreach($recettes as $recette)
    <div class="col-4 mb-5">
        <div class="card ">
            <div class="card-header">
                <a href="{{route('cuisine.show', $recette)}}">{{$recette->nom}}</a><br>
            </div>
            <div>
                <a href="{{ route('cuisine.edit', $recette) }}">Modifier</a>
                <form action="{{ route('cuisine.destroy', $recette) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Supprimer">
                </form>
            </div>
            <div class="card-body">
                <a href="{{route('cuisine.show', $recette->id)}}">Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection