@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Somos: {{ $nombres }}</h1>
                <p class="fs-4">Y somos del grupo {{ $grupo }}</p> 
            </div>
        </div> 
        <div class="row mt-5">
            <div class="col md-6">
                <a href="/clientes/">
                    <button class="btn btn-primary">
                        Listar Clientes
                    </button>
                </a>
            </div>
            <div class="col md-6">
                <a href="/pedidos/">
                    <button class="btn btn-primary">
                    Listar Pedidos
                    </button>
                </a>
            </div>
        </div>        
    </div>
@endsection
