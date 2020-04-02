<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorias;
use App\Models\Caracteristica;
use App\Models\CaracteristicaProducto;
use App\Models\Producto;

class ProductoCaracteristicaController extends Controller
{
    public function index(){
        $categorias =Categorias::all();
        $caracteristicas = Caracteristica::All();
        return view("ProductoCaracteristica.index", compact("categorias","caracteristicas"));

    }
}
