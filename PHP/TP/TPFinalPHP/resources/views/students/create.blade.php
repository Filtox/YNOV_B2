@extends("application")
@section('page-title')
    Création d'un élève
@endsection
@section('page-content')
    <div class="container mb-5 mt-3">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            @method('POST')
            <label class="create" for="nom">Nom : </label>
            <input name="nom" id="nom" class="form-control" required="required"><br>
            <label class="create" for="prenom">Prénom : </label>
            <input name="prenom" id="prenom" class="form-control" required="required"><br>
            <label class="create" for="email">Email : </label>
            <input type="email" name="email" id="email" class="form-control" required="required"><br>
            <br>
            <h4 style="margin-bottom: 30px;">Promotion</h4>
            <div class="box">
                <select required id="promotion_id" name="promotion_id">
                    @foreach ($promotions as $promotion)
                        <option value="{{ $promotion->id }}">{{ $promotion->nom }} - {{ $promotion->specialite }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            @if ($modules->isEmpty())
            <div class="container text-center">
                <div class="card-header">Pas de module créé</div>
            </div><br><br>
            @else
            <div>    
                    <h4>Modules</h4>
                    @foreach ($modules as $module)
                        <label style="display:block">
                            <input type="checkbox" value="{{ $module->id }}" name="modules[]" />
                            <span>{{ $module->nom }}</span>
                        </label>
                    @endforeach
            </div>
            @endif
            <div class="wrapper">
                <button type="submit" class="btn detail btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
@endsection
