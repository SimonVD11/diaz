<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaracteristicaProducto extends Model
{
    protected $table = 'detalle_carac_prod'; 
    protected $primaryKey = 'ID_DETALLECARPRO';
    public $timestamps = false;
    protected $fillable = [
        'ID_PRODUCTO', 'ID_CARACTERISTICA' , 'ESTADO',
    ];
}
