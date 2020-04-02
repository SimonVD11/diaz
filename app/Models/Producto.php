<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto'; 
    protected $primaryKey = 'ID_PRODUCTO';
    public $timestamps = false;
    protected $fillable = [
        'NOMBRE', 'STOCKMINIMO','STOCKREAL','ID_CATEGORIA','ESTADO'
    ];
}
