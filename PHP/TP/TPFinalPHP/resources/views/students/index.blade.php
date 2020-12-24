@extends("application")
@section('page-title')
Elèves
@endsection
@section('page-content')
<div class="container">
    <div class="row"><a class="ajout" href="{{ route('students.create') }}">Créer un élève</a></div>
    <table class="table" id="cssTable">
        <thead class="table-dark">
            <tr>
                <th scope="col">Noms</th>
                <th scope="col">Prénoms</th>
                <th scope="col">Emails</th>
                <th scope="col">Promotion</th>
                <th scope="col" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->nom }}</td>
                <td>{{ $student->prenom }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->promotions['nom'] }}</td>
                <td><a href=" {{ route('students.show', ['student' => $student]) }} " class="btn detail btn-primary">Details</a></td>
                <td><a href=" {{ route('students.edit', ['student' => $student]) }} " class="btn modif btn-primary">Modifier</a></td>
                <td>
                    <form action="{{ route('students.destroy', ['student' => $student]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn supp btn-primary" value="Supprimer"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection