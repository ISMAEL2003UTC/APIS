<?php

namespace App\Http\Controllers;
use App\Models\TipoAtraccion;
use Illuminate\Http\Request;

class TipoAtraccionController extends Controller
{

    public function index()
    {
        $tipos = TipoAtraccion::all();
        return view('tipoAtraccion.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipoAtraccion.create');
    }

    public function store(Request $request)
    {
        $datos = [
            'nombre_tipo_atraccion' => $request->nombre_tipo_atraccion
        ];

        TipoAtraccion::create($datos);
        return redirect()->route('tipoAtraccion.index')->with('success', 'Tipo de atracción creado correctamente.');
    }

    public function edit($id)
    {
        $tipoAtraccion = TipoAtraccion::findOrFail($id);
    return view('tipoAtraccion.edit', compact('tipoAtraccion'));
    }

    public function update(Request $request, $id)
    {
        $tipo = TipoAtraccion::findOrFail($id);

        $datos = [
            'nombre_tipo_atraccion' => $request->nombre_tipo_atraccion
        ];

        $tipo->update($datos);
        return redirect()->route('tipoAtraccion.index')->with('success', 'Tipo de atracción actualizado correctamente.');
    }

    public function destroy($id)
    {
        $tipo = TipoAtraccion::findOrFail($id);

        // Verificar si está relacionado con algún lugar turístico
        $tieneRelacion = \DB::table('LugarTuristico')
                            ->where('id_tipo_atraccion', $id)
                            ->exists();

        if ($tieneRelacion) {
            return redirect()->route('tipoAtraccion.index')
                ->with('error', 'No se puede eliminar el tipo de atracción porque está siendo usado en uno o más lugares turísticos.');
        }

        $tipo->delete();

        return redirect()->route('tipoAtraccion.index')
            ->with('success', 'Tipo de atracción eliminado correctamente.');
    }
}