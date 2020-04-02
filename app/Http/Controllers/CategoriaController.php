<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['categorias']=categorias::paginate(4);
            return view('categoria.index',$datos);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Categoria'=>'required|string|max:100 ',
            'Estado'=>'required|string|max:100 ',
            'Fecha_Inicio'=>'required|date ',
            'Fecha_Fin'=>'required|date ',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate ($request,$campos,$Mensaje);

        //
        //$datosCategoria=request()->all();
        $datosCategoria=request()->except('_token');

        categorias::insert($datosCategoria);

        return redirect('categoria')->with('Mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
        $categorias = categorias::findOrFail($Id);
        return view('categoria.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        $campos=[
            'Categoria'=>'required|string|max:100 ',
            'Estado'=>'required|string|max:100 ',
            'Fecha_Inicio'=>'required|date ',
            'Fecha_Fin'=>'required|date ',
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate ($request,$campos,$Mensaje);
        //
        $datosCategoria=request()->except(['_token','_method']);
        categorias::where('Id','=',$Id)->update($datosCategoria);

       // $categorias = categorias::findOrFail($Id);
        //return view('categoria.edit',compact('categoria'));
        return redirect('categoria')->with('Mensaje','Empleado modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //
        categorias::destroy($Id);

        return redirect('categoria')->with('Mensaje','Empleado eliminado con exito');
    }
}
