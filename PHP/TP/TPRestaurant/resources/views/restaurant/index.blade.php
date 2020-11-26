@extends('layout.template')

@section('page-title')
Restaurants
@endsection

@section('page-content')

<div class="row mt-3 mb-3">
    <div class="col-12">
        <h2 class="text-center">Restaurants</h2>
    </div>
</div>

@if($search)
<h7>Résultat de la recherche : {{ $search }}</h7>
<a href="{{route('restaurant.index')}}" class="mb-5">
    <h6>Retourner à la liste des restaurants</h6>
</a>
@endif

<div class="row">
    @foreach($restaurants as $restaurant)
    <div class="col-4 mb-5">
        <div class="card ">
            <div class="card-header">
                <a href="{{route('restaurant.show', $restaurant)}}" class="aNom">{{$restaurant->nom}}</a><br>
            </div>
            <div>
                <a href="{{ route('restaurant.edit', $restaurant) }}">Modifier</a>
            </div><br>
            <div>
                <form action="{{ route('restaurant.destroy', $restaurant) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Supprimer" class="formDelete">
                </form>
            </div>
            <div class="card-body">
                <a href="{{route('restaurant.details', $restaurant->id)}}">Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection