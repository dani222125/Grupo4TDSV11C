@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Editar Cliente</h1>
        </div>
    </div>
    <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id_cliente) : route('clientes.store') }}" method="POST">
        @csrf
        @if (isset($cliente))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ isset($cliente) ? $cliente->nombre : '' }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ isset($cliente) ? $cliente->apellido : '' }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_nac">Fecha de Nacimiento</label>
            <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" value="{{ isset($cliente) ? $cliente->fecha_nac : '' }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($cliente) ? 'Actualizar' : 'Crear' }}</button>
    </form>
</div>
@endsection