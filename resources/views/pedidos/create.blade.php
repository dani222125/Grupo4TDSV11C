@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Nuevo Pedido</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pedidos.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="id_cliente">Cliente:</label>
                                <select id="id_cliente" name="id_cliente" class="form-control">
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id_cliente }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="observaciones">Observaciones:</label>
                                <textarea id="observaciones" name="observaciones" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="fecha_pedido">Fecha de pedida:</label>
                                <input id="fecha_pedido" name="fecha_pedido" type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fecha_entrega">Fecha de entrega:</label>
                                <input id="fecha_entrega" name="fecha_entrega" type="date" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
