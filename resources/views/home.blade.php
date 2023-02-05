@extends('adminlte::page')

@section('title', 'index')

@section('content_header')
    <center><h1>¡Bienvenido a nuestro sitio web!</h1></center>
    <br>
@stop


@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Nuestros proyectos</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima accusamus veniam quod tempore totam repudiandae consequatur aspernatur? Cumque dolores adipisci ipsam, nobis ullam porro, reiciendis placeat voluptate, architecto ex sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ullam mollitia sed. Quia maxime adipisci cum iure. Recusandae, nesciunt ipsam, possimus deserunt adipisci numquam officiis magni, illum autem quibusdam laborum?</p>
        </div>
    
    
    </div>   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
