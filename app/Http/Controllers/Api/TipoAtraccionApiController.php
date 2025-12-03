<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\TipoAtraccion;

use Illuminate\Http\Request;

class TipoAtraccionApiController extends Controller
{
    public function index()
    {
        return TipoAtraccion::all();
    }

    public function store(Request $request)
    {
        return TipoAtraccion::create($request->all());
    }

    public function show($id)
    {
        return TipoAtraccion::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $tipo = TipoAtraccion::findOrFail($id);
        $tipo->update($request->all());
        return $tipo;
    }

    public function destroy($id)
    {
        TipoAtraccion::destroy($id);
        return response()->json(['message' => 'Tipo de atracción eliminado']);
    }
}