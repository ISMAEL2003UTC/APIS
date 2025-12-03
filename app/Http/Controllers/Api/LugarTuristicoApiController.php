<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LugarTuristico;

use Illuminate\Http\Request;

class LugarTuristicoApiController extends Controller
{
    public function index()
    {
        return LugarTuristico::with(['provincia', 'tipoAtraccion'])->get();
    }

    public function store(Request $request)
    {
        return LugarTuristico::create($request->all());
    }

    public function show($id)
    {
        return LugarTuristico::with(['provincia', 'tipoAtraccion'])
                ->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $lugar = LugarTuristico::findOrFail($id);
        $lugar->update($request->all());
        return $lugar;
    }

    public function destroy($id)
    {
        LugarTuristico::destroy($id);
        return response()->json(['message' => 'Lugar turístico eliminado']);
    }
}