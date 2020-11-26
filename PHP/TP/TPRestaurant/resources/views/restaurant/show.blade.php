@extends('layout.template')

{{--@section('page-title')--}}
{{-- {{ $restaurant->nom }}--}}
{{--@endsection--}}

@section('page-content')
<div class="row justify-content-md-center">
    <div class="col-8 mt-4">
        <div class="card text-center shadow mb-5 bg-white rounded">
            <div class="card-header font-italic">
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column text-left">
                        <h5>Nom du restaurant</h5>
                        {{ $restaurant->nom }}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Adresse :</h6>
                    {{ $restaurant->adresse }}
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Ville :</h6>
                    {{ $restaurant->ville }}
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Code postal :</h6>
                    {{ $restaurant->codepostal }}
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Site web :</h6>
                    {{ $restaurant->siteweb }}
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Description :</h6>
                    {{ $restaurant->description }}
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Type de cuisine :</h6>
                    {{ $restaurant->typedecuisine }}
                </div>
            </div>
            <div class="card-body">
                <div class="card-text text-left">
                    <h6>Etat :</h6>
                    {{ $restaurant->etat }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection