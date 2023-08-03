@extends('layout.layout')
@section('title', 'edit')
@section('content')

<h1>edit</h1>

<form action="{{route('update', $person->id)}}" name="edit">
@csrf

<div>
    <label>Nome:</label>
    <input type="text" name="name" id="" value="{{$person->name}}">
</div>
<div>
    <label>Idade:</label>
    <input type="number" name="idade" id="" value="{{$person->idade}}">
</div>
<div>
    <label>Sexo:</label>
    <select name="sexo" id="" value="{{$person->sexo}}">
        <option value="masculino"
         @if ($person->sexo == 'masculino')
            selected
        @endif>Masculino</option>
        <option value="Feminino"
        @if ($person->sexo == 'Feminino')
            selected
        @endif
        >Feminino</option>
        <option value="Outros"
        @if ($person->sexo == 'outros')
            selected
        @endif
        >Outros</option>
    </select>
</div>
<button type="submit">Edit</button>
</form>

@endsection
