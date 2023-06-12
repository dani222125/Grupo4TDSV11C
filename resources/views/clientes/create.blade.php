@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Cliente</h1>
        <hr>
        <form method="POST" action="{{ route('clientes.store') }}">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>

            <div class="form-group">
                <label for="fecha_nac">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
