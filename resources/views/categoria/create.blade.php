
@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error}} </li>

        @endforeach
    </ul>
</div>
@endif

<form action="{{url('categoria')}}" class="form-horizontal" method="post" enctype="multipart/form-date">

{{ csrf_field() }}

<div class="form-group">
<label for="Categoria" class="control-label">{{'Categoria'}}</label>
<input type="text" class="form-control {{ $errors->has('Categoria')?'is-invalid':''}} " name="Categoria" id="Categoria" value="">
{!! $errors->first('Categoria','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Estado" class="control-label">{{'Estado'}}</label>
<input type="text" class="form-control {{ $errors->has('Estado')?'is-invalid':''}}" name="Estado" id="Estado" value="">
{!! $errors->first('Estado','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Fecha_Inicio" class="control-label">{{'Fecha Inicio'}}</label>
<input type="date" class="form-control {{ $errors->has('Fecha_Inicio')?'is-invalid':''}}" name="Fecha_Inicio" id="Fecha_Inicio" value="">
{!! $errors->first('Fecha_Inicio','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Fecha_Fin" class="control-label">{{'Fecha Fin'}}</label>
<input type="date" class="form-control {{ $errors->has('Fecha_Fin')?'is-invalid':''}}" name="Fecha_Fin" id="Fecha_Fin" value="">
{!! $errors->first('Fecha_Fin','<div class="invalid-feedback">:message</div>') !!}
</div>


<input type="submit" value="Agregar" class="btn btn-success">
<a class="btn btn-primary" href="{{ url('categoria') }}">Regresar</a>
</form>

</div>
@endsection
