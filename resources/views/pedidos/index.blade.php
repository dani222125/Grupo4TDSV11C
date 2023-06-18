@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Pedidos</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Id_Cliente</th>
                                    <th>Observaciones</th>
                                    <th>Fecha</th>
                                    <th>Fecha Entrega</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    <tr>
                                        <td>{{ $pedido->id }}</td>
                                        <td>{{ $pedido->id_cliente }}</td>
                                        <td>{{ $pedido->observaciones }}</td>
                                        <td>{{ $pedido->fecha_pedido }}</td>
                                        <td>{{ $pedido->fecha_entrega }}</td>
                                        <td>
                                            <a href="{{ route('pedidos.edit', $pedido->id) }}"
                                                class="btn  btn-primary">Editar</a>
                                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn  btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Agregar Pedido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
