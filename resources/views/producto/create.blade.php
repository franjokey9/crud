@extends('adminlte::page')

@section('title', 'Nuevo Producto')
<meta charset="utf-8">
@section('content_header')
    <h1>Nuevo registro</h1>
@stop

@section('content')
    <p>Ingresa los datos</p>
    <form action="/productos" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nombre</label>
          <input name="nombre" type="nombre" class="form-control" id="inputEmail4" placeholder="Jose Francisco" required>
          
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Descripcion</label>
          <input name="descripcion" type="text" class="form-control" id="inputPassword4" placeholder="Escriba la descripcion del producto" required>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Categoria</label>
          <select name="categoria" id="categoria" class="form-control" required>
            <option selected disabled value="">Seleccione una categoria</option>
            @foreach ($categorias as $categoria)
              <option value="{{$categoria}}">{{$categoria}}</option>

            @endforeach
            
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Sucursal</label>
          <select name="sucursal" id="sucursal" class="form-control" required>
            <option selected disabled value="">Seleccione una sucursal</option>
            @foreach ($sucursales as $sucursal)
            <option value="{{$sucursal}}">{{$sucursal}}</option>
            @endforeach
            
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustomUsername">Precio</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">$</span>
            </div>
            <input name="precio" type="number" class="form-control" id="validationCustomUsername" placeholder="5600" aria-describedby="inputGroupPrepend" required>
            
          </div>
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