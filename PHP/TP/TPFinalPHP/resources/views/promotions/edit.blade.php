@extends("application")
@section('page-title')
    Modification promotion
@endsection
@section('page-content')
    <div class="container mb-5 mt-3">
        <form method="POST" action="{{ route('promotions.update', $promotion) }}">
            @csrf
            @method('PUT')
            <label class="create" for="nom">Nom : </label>
            <input name="nom" id="nom" class="form-control" value="{{ $promotion->nom }}"><br>

            <label class="create" for="specialite">Spécilaité : </label>
            <input name="specialite" id="specialite" class="form-control" value="{{ $promotion->specialite }}"><br>
            <div>
                @if ($modules->isEmpty())
                    <br><br>
                    <div class="container text-center">
                        <div class="card-header">Pas de module créé</div>
                    </div><br><br>
                @else
                    <h4>Modules</h4>
                    @foreach ($modules as $module)
                        <label style="display :block">
                            <input @foreach ($promotion->modules as $promotion_module)
                            @if ($promotion_module->id == $module->id) checked
                            @endif
                    @endforeach
                    type="checkbox" value="{{ $module->id }}" name="modules[]"/>
                    <span>{{ $module->nom }}</span>
                    </label>
                @endforeach
            </div>
            @endif
            <div class="wrapper">
                <button type="submit" class="btn detail btn-primary">Valider</button>
            </div>
        </form>
    </div>
@endsection
