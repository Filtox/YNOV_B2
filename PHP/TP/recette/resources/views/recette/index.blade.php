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
<!--
    /*
@if($search)
<p>Search result: {{ $search }}</p>
<a href="{{route('recette.index')}}" class="mb-5">Return to list</a>
@endif
*/
-->
<div class="row">
    <h1>Toutes les recettes</h1><br>
    @foreach($recettes as $recette)
    <div class="col-4 mb-5">
        <div class="card ">
            <div class="card-header">
                <a href="{{route('recette.show', $recette)}}">{{$recette->titre}}</a><br>
            </div>
            <div>
                <a href="{{ route('recette.edit', $recette) }}">Modifier</a> | 
                <form action="{{ route('recette.destroy', $recette) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Supprimer">
                </form>
            </div>
            <div class="card-body">
                <a href="{{route('recette.details', $recette->id)}}">Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection