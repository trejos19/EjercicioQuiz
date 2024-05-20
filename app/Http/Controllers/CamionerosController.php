<?php

namespace App\Http\Controllers;

use App\Models\Camioneros;
use Illuminate\Http\Request;

class CamionerosController extends Controller
{
    public function create()
    {
        return view('camionero.create');
    }

    public function index()
    {
        $camioneros = Camioneros::orderBy('id', 'desc')->get();
        return view('camionero.listar', compact('camioneros'));
    }

    public function store(Request $request)
    {
        $camionero = new Camioneros();
        $camionero->dni = $request->dni;
        $camionero->Nombre = $request->Nombre;
        $camionero->Poblacion = $request->Poblacion;
        $camionero->telefono = $request->telefono;
        $camionero->Direccion = $request->Direccion;
        $camionero->salario = $request->salario;
        $camionero->save();

        return redirect()->route('camionero.index');
    }

    public function show(Camioneros $camionero)
    {
        return view('camionero.show', compact('camionero'));
    }

    public function destroy(Camioneros $camionero)
    {
        $camionero->delete();
        return redirect()->route('camionero.index');
    }

    public function edit(Camioneros $camionero)
    {
        return view('camionero.edit', compact('camionero'));
    }

    public function update(Request $request, Camioneros $camionero)
    {
        $camionero->dni = $request->dni;
        $camionero->Nombre = $request->Nombre;
        $camionero->Poblacion = $request->Poblacion;
        $camionero->telefono = $request->telefono;
        $camionero->Direccion = $request->Direccion;
        $camionero->salario = $request->salario;
        $camionero->save();

        return redirect()->route('camionero.index');
    }
}
