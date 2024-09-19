<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Mesa;

class MesaController extends Controller
{
    public function create($salaId)
    {
        $sala = Sala::findOrFail($salaId);
        return view('mesas.create',[
	'sala' => $sala
	]);
    }

    public function store(Request $request, $salaId)
    {
        $sala = Sala::findOrFail($salaId);
        $sala->mesas()->create($request->only('nome', 'quantidade_cadeiras','largura','altura'));

        return redirect()->route('salas.edit', $salaId)->with('success', 'Mesa adicionada com sucesso.');
    }

    public function edit($salaId, $mesaId)
    {
        $sala = Sala::findOrFail($salaId);
        $mesa = Mesa::findOrFail($mesaId);

        return view('mesas.edit',[
	'sala' => $sala,
	'mesa' => $mesa
	]);
    }

    public function update(Request $request, $salaId, $mesaId)
    {
        $mesa = Mesa::findOrFail($mesaId);
        $mesa->update($request->only('nome', 'quantidade_cadeiras','largura','altura'));

        return redirect()->route('salas.edit', $salaId)->with('success', 'Mesa atualizada com sucesso.');
    }

    public function destroy($salaId, $mesaId)
    {
        $mesa = Mesa::findOrFail($mesaId);
        $mesa->delete();

        return redirect()->route('salas.edit', $salaId)->with('success', 'Mesa removida com sucesso.');
    }
}
