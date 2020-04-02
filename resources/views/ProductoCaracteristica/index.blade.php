@extends("app")

@section("contenido")
    <div class="row">
        <div class="col">
            <h1 class="text-center">Productos</h2>
        </div>
    </div>
    <form action="#" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="card">
            <div class="card-head">
            <h4 class="text-center">1. Info Producto</h4>
            </div>
            <div class="row card-body">
               <div class="form-group col-6">
               <label for="">Nombre</label>
               <input type="text" class="form-control" name="nombre">
               </div>
               <div class="form-group col-6">
                    <label for="">Categoria</label>
                    <select name="ID_CATEGORIA" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach($categorias as $value)
                            <option value="{{ $value->ID }}">{{ $value->nombre}} </option>
                        @endforeach
                    </select>
               </div>
               <div class="form-group col-6">
               <label for="">Stock Min</label>
               <input readonly type="number" class="form-control" name="StockMinimo" value="0">
               </div>
               <div class="form-group col-6">
               <label for="">Stock Real</label>
               <input readonly type="text" class="form-control" name="StockReal" value="0">
               </div>
            </div>
            </div>
        </div>
        <div class="col-6">
            
            <div class="card">
            <div class="card-head">
            <h4 class="text-center">2. Info Caracteristica</h4>
            </div>
            <div class="row card-body">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <select name="Caracteristica" class="form-control">
                        <option value="">Seleccione</option>
                        @foreach($caracteristicas as $value)
                            <option value="{{ $value->ID_CARACTERIS }}">{{ $value->nombre}} </option>
                        @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                     <label for="">Propiedad</label>
                     <input type="text" id="propiedad" class="form-control" name="propiedad">
                 </div>
                </div>
                <div class="col-12">
                <button onclick="agregar_caracteristica()" type="button" class="btn btn-success float-right">Agregar</button>
                 </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Propiedad</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody id="tblCaracteristica">
                
                </tbody>
            </table>
            </div>
        </div>

    </div>
    </form> 
@endsection

@section("script")
    <script>
    function agregar_caracteristica(){
        let ID_CARACTERIS = $("#insumos option:selected").val();
        let Caracteristica_text = $("#insumos option:selected").text();
        let PROPIEDAD = $("propiedad").val()

        if(PROPIEDAD > 0){
            $("tblCaracteristica").append(
            <tr>
                <td>
                <input type="hidden" name="ID_CARACTERIS[]" value="${ID_CARACTERIS}">
                    ${Caracteristica_text}               
                </td>
                <td>${PROPIEDAD}</td>
                <td>
                    <button class="btn btn-danger">X</button>
                </td>
            </tr>
            );
        }else{
            alert("Se debe ingresar un valor")
        }
    }
    </script>
@endsection