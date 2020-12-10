@extends('layouts.template')

@section('titre')
Liste employés
@endsection

@section('contenue')

@foreach ($employers as $employer)

<tr>
    <td><a href=" {{ route('employer.show', $employer) }} " class="btn btn-primary">Details</a>{{ $employer->nom }}</td>
    <td><a href=" {{ route('restaurant.show', $employer->restaurant) }} " class="btn btn-primary">Details</a>{{ $employer->restaurant->nom }}</td>
    <td><a href=" {{ route('employer.edit', $employer) }} " class="btn btn-primary">Modifier</a></td>
    <td>
        <form action="{{ route('employer.destroy', $employer) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Supprimer"></form>
    </td>
</tr>

@endforeach

@endsection