@extends("application")
@section('page-title')
Modification module
@endsection
@section('page-content')
<div class="container mb-5 mt-3">
    <form action="{{ route('modules.update', ['module' => $module]) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="create" for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" required value="{{ $module->nom }}">
        </div>
        <div>
            <label class="create" for="description">Description</label><br>
            <textarea rows="4" id="description" name="description" class="form-control" required>{{$module->description}}</textarea>
        </div>
        <div>
            <h4>Promotions</h4>
            @foreach($promotions as $promotion)
            <label style="display :block">
                <input @foreach($module->promotions as $module_promotion)
                @if($module_promotion->id == $promotion->id) checked @endif
                @endforeach
                type="checkbox" value="{{ $promotion->id }}" name="promotions[]"/>
                <span>{{ $promotion->nom }} - {{ $promotion->specialite }}</span>
            </label>
            @endforeach
        </div>
        <div>
            <h4>Elèves</h4>
            @foreach($students as $student)
            <label style="display :block">
                <input @foreach($module->students as $module_student)
                @if($module_student->id == $student->id) checked @endif
                @endforeach
                type="checkbox" value="{{ $student->id }}" name="students[]"/>
                <span>{{ $student->nom }} {{ $student->prenom }}</span>
            </label>
            @endforeach
        </div>
        <div class="wrapper">
            <button type="submit" class="btn detail btn-primary">Valider</button>
        </div>        
    </form>
</div>
@endsection