<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //protected $table ='clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable =['nombre','apellido','fecha_nac'];
    use HasFactory;
}
