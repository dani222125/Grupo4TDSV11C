<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pedido';

    public function cliente ()
    {
        return $this-belongsTo(Cliente::class);
        
    }
}