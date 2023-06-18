@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">
        <div class="row align-items-center">
            <div class="col-6 mx-auto">
                <div class="card align-items-center" style="width: 18rem;">
                    <div class="card-header">
                        {{ $grupo }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $nombres[0] }}</li>
                        <li class="list-group-item">{{ $nombres[1] }}</li>
                        <li class="list-group-item">{{ $nombres[2] }}</li>
                        <li class="list-group-item">{{ $nombres[3] }}</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <a href="/clientes/">
                        <button class="btn btn-primary">
                            Listar Clientes
                        </button>
                    </a>
                </div>
                <div class="col">
                    <a href="/pedidos/">
                        <button class="btn btn-primary">
                            Listar Pedidos
                        </button>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
