@extends('layout.layout')
@section('title', 'create')
@section('content')

<h1>create</h1>

<form action="{{route('store')}}" name="create">
@csrf

<div>
    <label>Nome:</label>
    <input type="text" name="name" id="">
</div>
<div>
    <label>Idade:</label>
    <input type="number" name="idade" id="">
</div>
<div>
    <label>Sexo:</label>
    <select name="sexo" id="">
        <option value="masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outros">Outros</option>
    </select>
</div>
<button type="submit">Create</button>
</form>

@endsection
