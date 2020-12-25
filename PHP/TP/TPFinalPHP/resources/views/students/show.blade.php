@extends("application")
@section('page-title')
    Elève : {{ $student->nom }} {{ $student->prenom }}
@endsection
@section('page-content')
    <div class="container text-center">
        <div class="card-header">Elève : {{ $student->nom }} {{ $student->prenom }}</div>
        <div class="card-header">Promotion de l'élève : {{ $student->promotions['nom'] }}
            {{ $student->promotions['specialite'] }}
        </div>
        <div class="card-body">
            @if ($modules->isEmpty())
                <div class="container text-center">
                    <div class="card-header">Cet élève n'est inscrit dans aucun module car aucun module n'est existant</div>
                </div><br><br>
            @else
                <table class="table" id="cssTable">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Modules</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col" colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($student->modules ?? [] as $module)
                            <tr>
                                <td>{{ $module->nom }}</td>
                                <td>{{ $module->description }}</td>
                                <td><a href=" {{ route('modules.show', ['module' => $module]) }} "
                                        class="btn detail btn-primary">Détails</a></td>
                                <td><a href=" {{ route('modules.edit', ['module' => $module]) }} "
                                        class="btn modif btn-primary">Modifier</a></td>
                                <td>
                                    <form action="{{ route('modules.destroy', ['module' => $module]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="supp btn btn-primary" value="Supprimer">
                                    </form>
                                </td>
                            @empty
                                <td>Aucun module</td>
            @endforelse
                            </tr>
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
