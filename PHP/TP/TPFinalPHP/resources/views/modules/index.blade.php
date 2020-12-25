@extends("application")
@section('page-title')
Modification module
@endsection
@section('page-content')
@if($modules->isEmpty())
<div class="container text-center">
    <div class="card-header">Veuillez créer un module pour obtenir l'affichage des modules</div>
    <div class="row"><a class="ajout" href="{{ route('modules.create') }}">Créer un module</a></div>
</div>
@else
<div class="container">
    <div class="row"><a class="ajout" href="{{ route('modules.create') }}">Créer un module</a></div>
    <table class="table" id="cssTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Modules</th>
                <th scope="col">Descriptions</th>
                <th scope="col" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
            <tr>
                <td>{{ $module->nom }}</td>
                <td>{{ $module->description }}</td>
                <td><a href=" {{ route('modules.show', $module) }} " class="btn detail btn-primary">Détails</a></td>
                <td><a href=" {{ route('modules.edit', $module) }} " class="btn modif btn-primary">Modifier</a></td>
                <td>
                    <form action="{{ route('modules.destroy', $module) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="supp btn btn-primary" value="Supprimer">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection