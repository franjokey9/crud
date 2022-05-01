@extends('adminlte::page')

@section('title', 'Bandeja')
<meta charset="utf-8">
@section('content_header')
    <h1>Bandeja</h1>
@stop

@section('content')

   

    <p>Tabla de productos</p>
    <table id="example" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Categoria</th>
                <th>Sucursal</th>
                <th>Estado</th>
                <th>Comentarios</th>
                <th>Fecha de compra</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->sucursal}}</td>
                <td>{{$producto->estado}}</td>
                <td>{{$producto->comentario}}</td>
                <td>{{$producto->created_at}}</td>
                <td>
                    <!-- <button href="/productos/{{$producto->id}}/edit" type="button" class="btn btn-info btn-sm">Editar</button> -->
                    <form action="{{route ('productos.destroy',$producto->id)}}" method="POST">
                    <a class="btn btn-info btn-sm" href="/productos/{{$producto->id}}/edit" role="button">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                   
                    </form>
                </td>   
            </tr>
            @endforeach
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre del producto</th>
                <th>Categoria</th>
                <th>Sucursal</th>
                <th>Estado</th>
                <th>Comentarios</th>
                <th>Fecha de compra</th>
                <th>Acciones</th>
            </tr> 
        </tfoot>
    </table>

    

    <footer class="bg-light text-center text-lg-start">
 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   
    <a class="text-white" href="#">Jose Francisco Sanchez Lopez</a>
  </div>
  
</footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css"/>

 
@stop

@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script> console.log('Hi!'); </script>

    <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable({
                        "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json",
                        }
                    });

                });
    </script>    

  
@stop