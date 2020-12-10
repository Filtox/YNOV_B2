@extends('layouts.template')

@section('title')
    Modifier employé {{ $employer->nom }}
@endsection

@section('formulaire')
    <form action="{{ route('employer.update', $employer) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="nom" value="{{ $employer->nom }}"><br>
        <input type="text" name="prenom" value="{{ $employer->prenom }}"><br>
        <select name="restaurant">
            @foreach($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}"
                    @if($restaurant->id == $employer->restaurant->id)
                        selected
                    @endif
                    >{{ $restaurant->nom }}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Modifier"><br>
    </form>
@endsection