@extends ('layouts.template')

@section('titre')
    Mon article
@endsection

@section('contenu')
    C'est l'article n° {{ $numero }} <!-- la synthaxe pur php serait <?php $numero ?> -->
@endsection

