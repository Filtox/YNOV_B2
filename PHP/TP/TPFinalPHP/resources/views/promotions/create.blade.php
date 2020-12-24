@extends("application")
@section('page-title')
Création promotion
@endsection
@section('page-content')
<div class="container mb-5 mt-3">
    <form method="POST" action="{{ route('promotions.store') }}">
        @csrf
        @method('POST')
        <label class="create" for="nom">Nom : </label>
        <input name="nom" id="nom" class="form-control" required="required"><br>
        <label class="create" for="specialite">Spécialité : </label>
        <input name="specialite" id="specialite" class="form-control" required="required"><br>
        <div>
            <h4>Modules</h4>
            @foreach($modules as $module)
            <label style="display : block">
                <input type="checkbox" value="{{ $module->id }}" name="modules[]"/>
                <span>{{ $module->nom }}</span>
            </label>
            @endforeach
        </div>
        <div>
            <h4>Elèves</h4>
            @foreach($students as $student)
            <label style="display : block">
                <input type="checkbox" value="{{ $student->id }}" name="students[]"/>
                <span>{{ $student->nom }} {{ $student->prenom }}</span>
            </label>
            @endforeach
        </div>
        <div class="wrapper">
            <button type="submit" class="btn detail btn-primary">Ajouter</button>
        </div>
    </form>
</div>
@endsection