@extends('adminlte::page')

@section('title', 'Editar')
<meta charset="utf-8">
@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <p>Edita el Producto</p>
    
     
    <form action="/productos/{{$producto->id}}" method="POST">
      @csrf
      @method('PUT');
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">Nombre</label>
          <input name="id" type="ID" class="form-control" id="id"  value="{{$producto->id}}" required readonly>
          
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4">Nombre</label>
          <input name="nombre" type="nombre" class="form-control" id="nombre"  value="{{$producto->nombre}}" required readonly>
          
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Descripcion</label>
          <input name="descripcion" type="text" class="form-control" id="descripcion"  value="{{$producto->descripcion}}"  required readonly>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-4">
        <label for="inputPassword4">Categoria</label>
          <input name="categoria" type="text" class="form-control" id="categoria"  value="{{$producto->categoria}}"  required readonly>
        </div>
        <div class="form-group col-md-4">
        <label for="inputPassword4">Sucursal</label>
          <input name="sucursal" type="text" class="form-control" id="sucursal"  value="{{$producto->sucursal}}"  required readonly>

        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustomUsername">Precio</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">$</span>
            </div>
            <input name="precio" type="number" class="form-control" id="precio"  aria-describedby="inputGroupPrepend" value="{{$producto->precio" required readonly>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Estado</label>
          <select name="estado" id="estado" class="form-control" required>
            <option selected disabled value="">Seleccione el estado del producto</option>
            <option>Abierto</option>
            <option>Cerrado</option>
          </select>
        </div>
        <div class="form-group col-md-9">
          <label for="inputPassword4">Comentario</label>
          <input name="comentario" type="text" class="form-control" id="comentario" placeholder="Escriba un comentario para este producto"  required>
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Guardar</button>
</form>
<footer class="bg-light text-center text-lg-start">
 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   
    <a class="text-white" href="#">Jose Francisco Sanchez Lopez</a>
  </div>
  
</footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop