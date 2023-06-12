<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Clientes();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->fecha_nac = $request->fecha_nac;
        
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
    }

    public function show($id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id_cliente)
    {
        $cliente = Clientes::find($id_cliente);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Clientes::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }

    public function destroy($id)
    {
        $cliente = Clientes::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente');
    }
}
