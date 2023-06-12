@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Pedido') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('pedidos.update', $pedido->id_pedido) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="cliente_id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>

                                <div class="col-md-6">
                                    <select id="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" name="id_cliente" required>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id_cliente }}" {{ $cliente->id_cliente == $pedido->id_cliente ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                                        @endforeach
                                    </select>

                                    @error('id_cliente')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="observaciones" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <textarea id="observaciones" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" required>{{ old('observaciones', $pedido->observaciones) }}</textarea>

                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_pedido" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Pedido') }}</label>

                                <div class="col-md-6">
                                    <input type="date" id="fecha_pedido" class="form-control @error('fecha_pedido') is-invalid @enderror" name="fecha_pedido" required value="{{ old('fecha_pedido', $pedido->fecha_pedido) }}">

                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fecha_entrega" class="col-md-4 col-form-label text-md-right">{{ __('Fecha entrega') }}</label>

                                <div class="col-md-6">
                                    <input type="date" id="fecha_entrega" class="form-control @error('fecha_entrega') is-invalid @enderror" name="fecha_entrega" required value="{{ old('fecha_entrega', $pedido->fecha_entrega) }}">

                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Actualizar') }}
                                    </button>
                                    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">
                                        {{ __('Cancelar') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection