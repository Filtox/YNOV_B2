@extends('layout.template')

@section('page-title')
Modifier fichier
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
    <div class="col-12">
        <h2 class="text-center">Modification</h2>
    </div>
</div>

<form action="{{ route('restaurant.update', $restaurant) }}" class="form" method="POST">
    @csrf
    @method('PUT')
    <label for="">Modification du nom du restaurant :</label><br><br>
    <input type="text" name="nom" value="{{ $restaurant->nom}}"><br><br>
    <label for="">Modification de l'adresse :</label><br><br>
    <input type="text" name="adresse" value="{{ $restaurant->adresse}}"><br><br>
    <label for="">Modification de la ville :</label><br><br>
    <input type="text" name="ville" value="{{ $restaurant->ville}}"><br><br>
    <label for="">Modification du code postal :</label><br><br>
    <input type="text" name="code postal" value="{{ $restaurant->codepostal}}"><br><br>
    <label for="">Modification du site web :</label><br><br>
    <input type="text" name="site web" value="{{ $restaurant->siteweb}}"><br><br>
    <label for="">Modification de la description du restaurant :</label><br><br>
    <textarea name="description" id="" cols="30" rows="5">{{ $restaurant->description}}</textarea><br><br>
    <label for="">Modification du type de cuisine :</label><br><br>
    <textarea name="type de cuisine" id="" cols="30" rows="5">{{ $restaurant->typedecuisine}}</textarea><br><br>
    <label for="">Modification de l'état du restaurant (Ouvert, Fermé ou en travaux) :</label><br><br>
    <input type="text" name="etat" value="{{ $restaurant->etat}}"><br><br>
    <input type="submit" value="Envoyer"><br>
</form>
@endsection