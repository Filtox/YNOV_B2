@extends("application")
@section('page-title')
Liste des promotions
@endsection
@section('page-content')
@if($promotions->isEmpty())
<div class="container text-center">
    <div class="card-header">Veuillez créer une promotion pour obtenir l'affichage des promotions</div>
    <div class="row"><a class="ajout" href="{{ route('promotions.create') }}">Créer une promotion</a></div>
</div>
@else
<div class="container">
    <div class="row"><a class="ajout" href="{{ route('promotions.create') }}">Créer une promotion</a></div>
    <table class="table" id="cssTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Promotions</th>
                <th scope="col">Spécialités</th>
                <th scope="col" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promotions as $promotion)
            <tr>
                <td>{{ $promotion->nom }}</td>
                <td>{{ $promotion->specialite }}</td>
                <td><a href=" {{ route('promotions.show', $promotion->id) }} " class="btn detail btn-primary">Details</a></td>
                <td><a href=" {{ route('promotions.edit', $promotion) }} " class="btn modif btn-primary">Modifier</a></td>
                <td>
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn supp btn-primary" value="Supprimer">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection