@extends('application')

@section('page-title')
    Créer
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
        <div class="col-12">
            <h2 class="text-center">Articles</h2>
        </div>
    </div>

    <form action="{{ route('articles.store') }}" method="POST">
    @csrf
        <label for="">Entrez le titre</label><br><br>
        <input type="text" name="title" value=""><br><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>
        <input type="checkbox" name="published" value="1"><br><br>
        <input type="submit" value="Envoyer"><br>
    </form>
@endsection