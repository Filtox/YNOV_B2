@extends('layouts.template2')

@section('titre')
Modification
@endsection

@section('contenue')
<form method="POST" action="{{ route('employer.update', $employer) }}">
    @csrf
    @method('PUT')
    <label for="name">Nom : </label>
    <input type="text" name="nom" id="name" value="{{ $employer->nom }}"><br>

    <label for="name">Prenom : </label>
    <input type="text" name="pprenom" id="name" value="{{ $employer->prenom }}"><br>

    <select name="restaurant" id="">
        @foreach($restaurants as restaurant)
        <option @if($restaurant->id == $employer->restaurant->id)
            selected
            @endif
            value="{{ $restaurant-id }}">{{ $restaurant->nom }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">submit</button>
</form>
@endsection