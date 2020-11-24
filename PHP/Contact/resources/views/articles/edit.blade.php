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

    <form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')
        <label for="">Modification titre</label><br><br>
        <input type="text" name="title" value="{{ $article->title}}"><br><br>
        <textarea name="description" id="" cols="30" rows="10">{{ $article->description}}</textarea><br><br>
        <input type="checkbox" name="published" value="1" 
        @if($article->published)
            checked
        @endif
        ><br><br>
        <input type="submit" value="Envoyer"><br>
    </form>
@endsection