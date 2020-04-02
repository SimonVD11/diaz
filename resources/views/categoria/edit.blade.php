@extends('layouts.app')

@section('content')

<div class="container">

<form method="{{ url('categoria/CategoriaController') }}" action="post" enctype="multipart/form-data">
{{csrf_field() }}
{{ method_field('PATCH') }}

<div class="form-group">
<label for="Categoria" class="control-label">{{'Categoria'}}</label>
<input type="text" class="form-control" name="Categoria" id="Categoria" value="{{$categorias->Categoria}}">
</div>

<div class="form-group">
<label for="Estado" class="control-label">{{'Estado'}}</label>
<input type="text" class="form-control" name="Estado" id="Estado" value="{{$categorias->Estado}}">
</div>

<div class="form-group">
<label for="Fecha_Inicio" class="control-label">{{'Fecha Inicio'}}</label>
<input type="date" class="form-control" name="Fecha_Inicio" id="Fecha_Inicio" value="{{$categorias->Fecha_Inicio}}">
</div>

<div class="form-group">
<label for="Fecha_Fin" class="control-label">{{'Fecha Fin'}}</label>
<input type="date"class="form-control" name="Fecha_Fin" id="Fecha_Fin" value="{{$categorias->Fecha_Fin}}">
</div>

<input type="submit" value="Editar" class="btn btn-success">
<a class="btn btn-primary" href="{{ url('categoria') }}">Regresar</a>
</form>

</div>
@endsection
