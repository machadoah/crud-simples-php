<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('alunos.index')->with('alunos', Aluno::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect('/alunos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        return View('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        return View('alunos.edit')->with('aluno', $aluno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->update($request->all());
        return redirect('/alunos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        return redirect('/alunos');
    }
}
