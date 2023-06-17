<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use faker\Factory as faker;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';
    protected $fillable=['fecha_pedido',
                        'fecha_entrega',
                        'observaciones',
                        'id_cliente'];
    use HasFactory;

    public function clientes ()
    {
        return $this->belongsTo(Cliente::class);

    }
}
