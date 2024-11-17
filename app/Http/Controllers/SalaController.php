<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\Mesa;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('salas.index', [
	    'salas' => Sala::all()
	]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
	return view('salas.create', [
	    'sala' => new Sala
	]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sala = new Sala;
	$sala->nome = $request->nome;
	$sala->largura = $request->largura;
	$sala->profundidade = $request->profundidade;
	$sala->save();
	return redirect('/salas/index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
	// ele carrega todas as mesas associadas com o id da sala em especifico
	$sala = Sala::with('Mesa')->findOrFail($id);
	dd($sala->mesas);
	 return view('salas.show',[
	    'sala' => $sala,
	    'mesa' => $sala->mesas
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
    {
        return view('salas.edit', [
	    'sala' => $sala
	]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $sala)
    {
	$sala->nome = $request->titulo;
	$sala->largura = $request->largura;
	$sala->profundidade = $request->profundidade;
	$sala->save();
	return redirect('/salas/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();
	return redirect('/salas/index');
    }
}