@extends("application")
@section('page-title')
Module : {{ $module->nom }}
@endsection
@section('page-content')
<div class="text-center container">
    <div class="card-header">Module : {{ $module->nom }}</div>
    <div class="card-body">
        <h3 class="card-text"> Promotions : </h3>
        <table class="table" id="cssTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Promotions</th>
                    <th scope="col">Spécialités</th>
                    <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($module->promotions ?? [] as $promotion)
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
                    @empty
                    <td>Aucune promotion</td>
                    @endforelse
                </tr>
            </tbody>
        </table>
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
                @forelse ($module->students ?? [] as $student)
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
                    @empty
                    <td>Aucun élève</td>
                    @endforelse
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection