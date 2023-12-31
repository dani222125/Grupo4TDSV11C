<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $clientes = new Cliente();
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->fecha_nac = $request->fecha_nac;

        $clientes->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
    }

    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.show', compact('cliente'));
    }

    public function edit($id_cliente)
    {
        $cliente = Cliente::find($id_cliente);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $clientes = Cliente::find($id);
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->fecha_nac = $request->fecha_nac;
        $clientes->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente');
    }

    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        dd($clientes);


        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente');
    }

    public function pdf($id_cliente){
        $cliente = Cliente::find($id_cliente);
        $pedidos = $cliente->cantPedidos;
        // if ($pedidos -> $count === 0){
        //     return redirect() -> route('clientes.index')->with('', 'No se encontró ningun pedido');
        // }
        // else{
        //     return redirect() -> route('clientes.print')->with('success', 'Se encontraron pedidos');
        // }
        //dd($pedidos);
        return view('clientes.print',compact('pedidos','cliente'));
    }
}
