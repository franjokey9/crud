@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <p>Bienvenido al sistema de crud IZZI </p>
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