@extends("application")
@section('page-title')
Promotion : {{ $promotion->nom }} {{ $promotion->specialite }}
@endsection
@section('page-content')
<div class="container text-center">
    <div class="card-header">Promotion : {{ $promotion->nom }} {{ $promotion->specialite }}</div>
    <div class="button1" id="button-2">
        <div id="slide"></div>
        <a href=" {{ route('promotions.edit', $promotion) }} ">Modifier la promotion</a>
    </div>
    <div class="card-body">
        @forelse ($promotion->modules ?? [] as $module)
        <h3 class="card-text"> Modules : </h3>
        <table class="table" id="cssTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Modules</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $module->nom }}</td>
                    <td>{{ $module->description }}</td>
                    <td><a href=" {{ route('modules.show', ['module' => $module]) }} " class="btn detail btn-primary">Details</a></td>
                    <td><a href=" {{ route('modules.edit', ['module' => $module]) }} " class="btn modif btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('modules.destroy', ['module' => $module]) }}" method="POST">
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
            <div class="card-header">Cette promotion ne compte aucun module</div>
        </div><br><br>
        @endforelse
        <br>
        @forelse ($promotion->students ?? [] as $student)
        <h3 class="card-text"> Eleves : </h3><br>
        <table class="table" id="cssTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->nom }}</td>
                    <td>{{ $student->prenom }}</td>
                    <td>{{ $student->email }}</td>
                    <td><a href=" {{ route('students.show', $student->id) }} " class="btn detail btn-primary">Details</a></td>
                    <td><a href=" {{ route('students.edit', ['student' => $student]) }} " class="btn modif btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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
            <div class="card-header">Cette promotion ne compte aucun élève</div>
        </div><br><br>
        @endforelse
    </div>
</div>
@endsection