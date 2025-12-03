<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Provincia;

use Illuminate\Http\Request;

class ProvinciaApiController extends Controller
{
    public function index()
    {
        return Provincia::all(); // GET
    }

    public function store(Request $request)
    {
        return Provincia::create($request->all()); // POST
    }

    public function show($id)
    {
        return Provincia::findOrFail($id); // GET by ID
    }

    public function update(Request $request, $id)
    {
        $provincia = Provincia::findOrFail($id);
        $provincia->update($request->all()); // PATCH
        return $provincia;
    }

    public function destroy($id)
    {
        Provincia::destroy($id); // DELETE
        return response()->json(['message' => 'Provincia eliminada']);
    }
}
