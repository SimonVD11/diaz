<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $table = 'categoria'; 
    protected $primaryKey = 'ID_CATEGORIA';
    public $timestamps = false;
    protected $fillable = [
        'CATEGORIA', 'ESTADO'
    ];
}
 