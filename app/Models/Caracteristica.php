<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas'; 
    protected $primaryKey = 'ID_CARACTERIS';
    public $timestamps = false;
    protected $fillable = [
        'CARACTERISTICA', 'PROPIEDAD'
    ];
}
