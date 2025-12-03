<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LugarTuristico;
use App\Models\Provincia;
use App\Models\TipoAtraccion;
class LugarTuristicoController extends Controller
{
    public function index()
    {
        $lugares = LugarTuristico::with(['provincia', 'tipoAtraccion'])->get();
        return view('lugarTuristico.index', compact('lugares'));
    }

    public function create()
    {
        $provincias = Provincia::all();
        $tipos = TipoAtraccion::all();
        return view('lugarTuristico.create', compact('provincias', 'tipos'));
    }

    public function store(Request $request)
    {
        $datos = [
            'nombre_lugar' => $request->nombre_lugar,
            'id_provincia' => $request->id_provincia,
            'id_tipo_atraccion' => $request->id_tipo_atraccion,
            'coordenadas' => $request->coordenadas,
            'descripcion' => $request->descripcion,
            'anio_creacion' => $request->anio_creacion,
            'accesibilidad' => $request->accesibilidad
        ];

        LugarTuristico::create($datos);

        return redirect()->route('lugares.index');
    }

    public function edit($id)
    {
        $lugarTuristico = LugarTuristico::findOrFail($id);
        $provincias = Provincia::all();
        $tipos = TipoAtraccion::all();
        return view('lugarTuristico.edit', compact('lugarTuristico', 'provincias', 'tipos'));
    }

    public function update(Request $request, $id)
    {
        $lugarTuristico = LugarTuristico::findOrFail($id);

        $datos = [
            'nombre_lugar' => $request->nombre_lugar,
            'id_provincia' => $request->id_provincia,
            'id_tipo_atraccion' => $request->id_tipo_atraccion,
            'coordenadas' => $request->coordenadas,
            'descripcion' => $request->descripcion,
            'anio_creacion' => $request->anio_creacion,
            'accesibilidad' => $request->accesibilidad
        ];

        $lugarTuristico->update($datos);

        return redirect()->route('lugares.index')->with('success', 'Lugar actualizado correctamente.');
    }

    public function destroy($id)
    {
        $lugarTuristico = LugarTuristico::findOrFail($id);
        $lugarTuristico->delete();

        return redirect()->route('lugares.index')->with('success', 'Lugar eliminado correctamente.');
    }
}