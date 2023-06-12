<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        $clientes = Clientes::all();
        return view('pedidos.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->fecha_entrega = $request->fecha_entrega;
        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->id_cliente= $request->id_cliente;
        $pedido->observaciones = $request->observaciones;
        $pedido->save();
        return redirect()->route('pedidos.index')->with('success', 'El pedido ha sido agregado exitosamente.');
    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $clientes = Clientes::all();
        return view('pedidos.edit', compact('pedido', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->fecha_entrega = $request->fecha_entrega;
        $pedido->id_cliente = $request->id_cliente;
        $pedido->observaciones = $request->observaciones;
        $pedido->save();
        return redirect()->route('pedidos.index')->with('success', 'El pedido ha sido actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'El pedido ha sido eliminado exitosamente.');
    }
}
