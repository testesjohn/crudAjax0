@extends('layout.layout')
@section('title', 'home')
@section('content')

<h1>home</h1>

@if ($people -> count() > 0)

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($people as $person)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$person->name}}</td>
            <td>{{$person->idade}}</td>
            <td>{{$person->sexo}}</td>
            <td>
                <a href="{{route('edit', $person->id)}}">Edit</a>

                <form action="{{route('destroy', $person->id)}}" name="delete">
                @csrf

                <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@else
<h3>
    não ha pessoas cadastradas, <a href="{{route('create')}}">Cadastre já!</a>
</h3>
@endif

@endsection
