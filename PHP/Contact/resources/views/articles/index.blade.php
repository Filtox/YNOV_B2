@extends('application')

@section('page-title')
Articles
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
    <div class="col-12">
        <h2 class="text-center">Articles</h2>
    </div>
</div>

@if($search)
<p>Search result: {{ $search }}</p>
<a href="{{route('articles.index')}}" class="mb-5">Return to list</a>
@endif

<div class="row">
    @foreach($articles as $article)

    @if($article->published )
    <div class="col-4 mb-5">
        <div class="card ">
            <div class="card-header">
                <a href="{{route('articles.show', $article)}}">{{$article->title}}</a><br>
            </div>
            <div>
                <a href="{{ route('articles.edit', $article) }}">Modifier</a>
            </div>
            <div class="card-body">
                <a href="{{route('articles.details', $article->id)}}">Details</a>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    <h1>TOUT LES ARTICLES</h1><br>
    @foreach($articles as $article)
    <div class="col-4 mb-5">
        <div class="card ">
            <div class="card-header">
                <a href="{{route('articles.show', $article)}}">{{$article->title}}</a><br>
                @if($article->published)
                <h4>Publié</h4>
                @endif
            </div>
            <div>
                <a href="{{ route('articles.edit', $article) }}">Modifier</a> | 
                <form action="{{ route('articles.destroy', $article) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Supprimer">
                </form>
            </div>
            <div class="card-body">
                <a href="{{route('articles.details', $article->id)}}">Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection