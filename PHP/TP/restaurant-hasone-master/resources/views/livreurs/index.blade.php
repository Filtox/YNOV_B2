@extends('layouts.template3')

@section('titre')
Livreur
@endsection

@section('contenue')
<form>
    @csrf
    @foreach($livreurs as $livreur)
    <div class="mb-3 form-check">

        <input class="form-check-input" type="checkbox" id="livreur-{{ $livreur->id }}" value="{{ $livreur->id }}" name="livreur[]" @foreach($livreur->restaurants as $resto)
        @if($resto->id == $restaurant->id) checked @endif
        @endforeach>
        <label class="form-check-label" for="livreur-{{ $livreur->id }}">
            {{ $livreur->nom }}
        </label>
    </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection