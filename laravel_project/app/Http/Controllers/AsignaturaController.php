<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all();
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id);
    }

    public function store(Request $request)
    {
        $asignatura = Asignatura::create($request->all());
        return response()->json($asignatura, 201);
    }

    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update($request->all());
        return response()->json($asignatura, 200);
    }

    public function destroy($id)
    {
        Asignatura::destroy($id);
        return response()->json(null, 204);
    }
}