@extends("application")
@section('page-title')
    Création module
@endsection
@section('page-content')
    <div class="container mb-5 mt-3">
        <form method="POST" action="{{ route('modules.store') }}">
            @csrf
            @method('POST')
            <label class="create" for="nom">Nom : </label><br>
            <input name="nom" id="nom" class="form-control" required="required"><br>
            <label class="create" for="description">Description : </label><br>
            <textarea style="width: 100%" name="description" id="description" rows="5" required="required"></textarea>
            <br>
            @if ($promotions->isEmpty())
            <br><br>
                <div class="container text-center">
                    <div class="card-header">Pas de promotion créée</div>
                </div><br><br>
            @else
            <div>
                <h4>Promotions</h4>
                @foreach ($promotions as $promotion)
                    <label style="display : block">
                        <input type="checkbox" value="{{ $promotion->id }}" name="promotions[]" />
                        <span>{{ $promotion->nom }} - {{ $promotion->specialite }}</span>
                    </label>
                @endforeach
            </div>
            @endif
            <br>
            @if ($students->isEmpty())
                <div class="container text-center">
                    <div class="card-header">Pas d'élève créé</div>
                </div><br><br>
            @else
                <div>
                    <h4>Elèves</h4>
                    @foreach ($students as $student)
                        <label style="display : block">
                            <input type="checkbox" value="{{ $student->id }}" name="students[]" />
                            <span>{{ $student->nom }} {{ $student->prenom }}</span>
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
