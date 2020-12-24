@extends("application")
@section('page-title')
Modification elève
@endsection
@section('page-content')
@if ($promotions ?? false)
<div class="container mb-5 mt-3">
    <form action="{{ route('students.update', ['student' => $student]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="create"  for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" required value="{{ $student->nom }}">
        </div>
        <div>
            <label class="create"  for="prenom">prenom</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required value="{{ $student->prenom }}">
        </div>
        <div>
            <label class="create"  for="email">email</label>
            <input type="email" id="email" name="email" class="form-control" required value="{{ $student->email }}">
        </div>
        <div>
        <h4>Promotion</h4>
            <div class="box">
                <select required id="promotion_id" name="promotion_id">
                    @foreach ($promotions as $promotion)
                    <option @if ($promotion->id == $student->promotions['id'])
                        selected
                        @endif
                        value="{{ $promotion->id }}">{{ $promotion->nom }} - {{ $promotion->specialite }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <h4>Modules</h4>
            @foreach($modules as $module)
            <label style="display:block">
                <input @foreach($student->modules as $student_module)
                @if($student_module->id == $module->id) checked @endif
                @endforeach
                type="checkbox" value="{{ $module->id }}" name="modules[]"/>
                <span>{{ $module->nom }}</span>
            </label>
            @endforeach
        </div>
        <div class="wrapper">
            <button type="submit" class="btn detail btn-primary">Valider</button>
        </div>
    </form>
</div>
@endif
@endsection