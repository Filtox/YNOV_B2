@extends('layout.template')

{{--@section('page-title')--}}
{{--    {{ $recette->titre }}--}}
{{--@endsection--}}

@section('page-content')
    <div class="row justify-content-md-center">
        <div class="col-8 mt-4">
            <div class="card text-center shadow mb-5 bg-white rounded">
                <div class="card-header font-italic">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex flex-column text-left">
                            {{ $recette->titre }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-text text-left">
                        {{ $recette->ingredients }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

