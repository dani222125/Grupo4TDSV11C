@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Clientes</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo electrónico</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->id_cliente }}</td>
                                        <td>{{ $cliente->nombre }}</td>
                                        <td>{{ $cliente->apellido }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>
                                            <a href="{{ route('clientes.edit', $cliente->id_cliente) }}"
                                                class="btn btn-primary">Editar</a>
                                            <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                            <a href="{{ route('clientes.pdf', $cliente->id_cliente) }}"
                                                class="btn btn-primary">Imprimir</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('clientes.create') }}" class="btn btn-primary">Agregar Cliente</a>
                        {{-- <a href="{{ route('clientes.pdf') }}" class="btn btn-primary">Obtener </a> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
