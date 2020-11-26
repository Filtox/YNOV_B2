@extends('layout.template')

@section('page-title')
Créer
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
    <div class="col-12">
        <h2 class="text-center">Restaurant</h2>
    </div>
</div>

<form action="{{ route('restaurant.store') }}" class="form" method="POST">
    @csrf
    <label for="">Entrez le nom du restaurant :</label><br><br>
    <input type="text" name="nom" value=""><br><br>
    <label for="">Entrez l'adresse :</label><br><br>
    <input type="text" name="adresse" value=""><br><br>
    <label for="">Entrez la ville :</label><br><br>
    <input type="text" name="ville" value=""><br><br>
    <label for="">Entrez le code postal :</label><br><br>
    <input type="text" name="codepostal" value=""><br><br>
    <label for="">Entrez le site web :</label><br><br>
    <input type="text" name="siteweb" value=""><br><br>
    <label for="">Entrez la description du restaurant :</label><br><br>
    <textarea name="description" id="" cols="30" rows="5"></textarea><br><br>
    <label for="">Entrez le type de cuisine :</label><br><br>
    <textarea name="typedecuisine" id="" cols="30" rows="5"></textarea><br><br>
    <label for="">Entrez l'état du restaurant (Ouvert, Fermé ou en travaux) :</label><br><br>
    <input type="text" name="etat" value=""><br><br>
    <input type="submit" value="Envoyer"><br>
</form>
@endsection