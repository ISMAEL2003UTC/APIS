<?php

namespace App\Http\Controllers;

use App\Models\Provincia;


use Illuminate\Http\Request;

class ProvinciaController extends Controller
{

    public function index()
    {
        $provincias = Provincia::all();
        return view('provincias.index', compact('provincias'));
    }

    public function create()
    {
        return view('provincias.create');
    }

    public function store(Request $request)
    {
        $datos = [
            'nombre_provincia' => $request->nombre_provincia
        ];

        Provincia::create($datos);
        return redirect()->route('provincias.index')->with('success', 'Provincia creada correctamente.');
    }

    public function edit($id)
    {
        $provincia = Provincia::findOrFail($id);
        return view('provincias.edit', compact('provincia'));
    }

    public function update(Request $request, $id)
    {
        $provincia = Provincia::findOrFail($id);

        $datos = [
            'nombre_provincia' => $request->nombre_provincia
        ];

        $provincia->update($datos);
        return redirect()->route('provincias.index')->with('success', 'Provincia actualizada correctamente.');
    }

    public function destroy($id)
    {
        $provincia = Provincia::findOrFail($id);

        // Revisamos si existen lugares asociados a esta provincia
        $tieneRelacion = \DB::table('LugarTuristico')
                            ->where('id_provincia', $id)
                            ->exists();

        if ($tieneRelacion) {
            return redirect()->route('provincias.index')
                ->with('error', 'No se puede eliminar la provincia porque está siendo usada en uno o más lugares turísticos.');
        }

        // Si no tiene relación, la eliminamos
        $provincia->delete();

        return redirect()->route('provincias.index')
            ->with('success', 'Provincia eliminada correctamente.');
    }

}
