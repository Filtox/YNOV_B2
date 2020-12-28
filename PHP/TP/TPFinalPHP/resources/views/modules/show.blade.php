@extends("application")
@section('page-title')
Module : {{ $module->nom }}
@endsection
@section('page-content')
<div class="text-center container">
    <div class="card-header">Module : {{ $module->nom }}</div>
    <div class="button1" id="button-2">
        <div id="slide"></div>
        <a href=" {{ route('modules.edit', $module) }} ">Modifier le module</a>
    </div>
    <div class="card-body">
        <h3 class="card-text"> Promotions : </h3>
        @forelse ($module->promotions ?? [] as $promotion)
        <table class="table" id="cssTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Promotions</th>
                    <th scope="col">Spécialités</th>
                    <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $promotion->nom }}</td>
                    <td>{{ $promotion->specialite }}</td>
                    <td><a href=" {{ route('promotions.show', ['promotion' => $promotion]) }} " class="btn detail btn-primary">Détails</a></td>
                    <td><a href=" {{ route('promotions.edit', ['promotion' => $promotion]) }} " class="btn modif btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('promotions.destroy', ['promotion' => $promotion]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="supp btn btn-primary" value="Supprimer">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        @empty
        <div class="container text-center">
            <div class="card-header">Ce module n'est inscrit dans aucune promotion</div>
        </div><br><br>
        @endforelse
        <br>
        @forelse ($module->students ?? [] as $student)
        <h3 class="card-text"> Elèves : </h3>
        <table class="table" id="cssTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Prénom</th>
                    <th scope="col">Noms</th>
                    <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->nom }}</td>
                    <td>{{ $student->prenom }}</td>
                    <td><a href=" {{ route('students.show', ['student' => $student]) }} " class="btn detail btn-primary">Détails</a></td>
                    <td><a href=" {{ route('students.edit', ['student' => $student]) }} " class="btn modif btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('students.destroy', ['student' => $student]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="supp btn btn-primary" value="Supprimer">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        @empty
        <div class="container text-center">
            <div class="card-header">Ce module ne compte aucun élève</div>
        </div><br><br>
        @endforelse
    </div>
</div>
@endsection