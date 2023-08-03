<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::all();

        return view('home', ['people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Person $person)
    {
        $person -> name = $request->name;
        $person -> idade = $request->idade;
        $person -> sexo = $request->sexo;

        $person-> save();

        $create['success'] = true;
        $create['message'] = "Pessoa criada com sucesso!";
        $create['route'] = route('home');
        echo json_encode($create);

        return;
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return view('edit', ['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        $person -> name = $request->name;
        $person ->idade = $request->idade;
        $person ->sexo = $request->sexo;

        $person -> update();
        $update['success'] = true;
        $update['message'] = "Pessoa atualizada com sucesso!";
        $update['route'] = route('home');

        echo json_encode($update);

        return;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person -> delete();

        $delete['success'] = true;
        $delete['message'] = "Pessoa deletada com sucesso!";
        $delete['route'] = route('home');

        echo json_encode($delete);
        return;
    }
}
