{{-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Reporte de comprobantes de pago</title>
    <style>
        .aTable {
            width: 100%;
            border: hidden !important;
        }

        th.productos,
        td.productos {
            background: #fff;
            width: 24%;
            text-align: center;
            border: hidden;
            padding: 0.3em;
            caption-side: bottom;
        }

        .table {
            width: 100%;
            border: 1px solid #999999;
            border-collapse: separate 1px;
        }

        th,
        td {
            background: #fff;
            width: 24%;
            text-align: center;
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 0.3em;
            caption-side: bottom;
        }

        caption {
            padding: 0.3em;
            color: #fff;
            background: #000;
        }

        th {
            background: rgb(185, 185, 185);
        }

        .direccion {
            width: 54%;
            text-align: center;
            border: 1px solid #000;
        }

    </style>
</head>

<body>
    <h1>pedidos de Cliente {{$id_cliente}}</h1>
    <table class="table">
        <thead>
            <tr>
                <th width="2%" rowspan="2">Id Cliente</th>
                <th rowspan="2">Nombre</th>
                <th rowspan="2">apellido</th>
                <th rowspan="2">observaciones</th>
            </tr>
            <tr>
                <th>id Pedido</th>
                <th>Precio unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paymentVouchers as $voucher)
                <tr>
                    <td rowspan="{{ $voucher['cantProductosOrden'] }}">{{ $voucher['numeroDeOrden'] }}</td>
                    <td rowspan="{{ $voucher['cantProductosOrden'] }}">{{ $voucher['subtotalDeOrden'] }}</td>
                    <td rowspan="{{ $voucher['cantProductosOrden'] }}">{{ $voucher['ivaDeOrden'] }}</td>
                    <td rowspan="{{ $voucher['cantProductosOrden'] }}">{{ $voucher['totalDeOrden'] }}</td>
                    <td rowspan="{{ $voucher['cantProductosOrden'] }}">{{ $voucher['fechaDePago'] }}</td>
                    <td rowspan="{{ $voucher['cantProductosOrden'] }}">{{ $voucher['metodoDePago'] }}</td>
                    @foreach ($voucher['productos'] as $producto => $p)
                        <td>{{ $p['nombre_producto'] }}</td>
                        <td>{{ $p['precio'] }}</td>
                        <td>{{ $p['cantidad'] }}</td>
                        <td>{{ $p['totalDeLinea'] }}</td>
                        @break
                    @endforeach
                </tr>
                @foreach (array_slice($voucher['productos'], 1) as $producto)
                <tr>
                    <td>{{ $producto['nombre_producto'] }}</td>
                    <td>{{ $producto['precio'] }}</td>
                    <td>{{ $producto['cantidad'] }}</td>
                    <td>{{ $producto['totalDeLinea'] }}</td>
                </tr>
                    @endforeach
            @endforeach
        </tbody>
    </table>
</body>

</html>
 --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Pedidos de {{ $cliente->nombre }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>fecha</th>
                                    <th>entrega</th>
                                    <th>obsevaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                @foreach ($pedidos as $pedido)
                                    <tr>
                                        <td>{{ $pedido->id }}</td>
                                        <td>{{ $pedido->fecha_pedido }}</td>
                                        <td>{{ $pedido->fecha_entrega }}</td>
                                        <td>{{ $pedido->observaciones }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
