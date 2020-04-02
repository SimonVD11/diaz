@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{    Session::get('Mensaje') }}
</div>
@endif

<a href="{{ url('categoria/create') }}" class="btn btn-success">Agregar categoria</a>
<br>
<br>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th>FechaInicio</th>
            <th>FechaFin</th>
            <th>Acciones</th>
           
        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$categoria->Categoria}}</td>
            <td>{{$categoria->Estado}}</td>
            <td>{{$categoria->Fecha_Inicio}}</td>
            <td>{{$categoria->Fecha_Fin}}</td>
            <td>
            <a class="btn btn-warning" href="{{ url('/categoria/' .$categoria->id. '/edit') }}">
            Editar
            </a>
            
           <a class="btn btn-danger" href="/delete/{{ $categoria->id}}" >Eliminar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $categorias->links() }}
</div>
@endsection
