@extends('layout')

@section('title')
<title>Inicio servicio medico</title>
@stop

@section('css')
@stop

@section('subHead')
Registro de Nuevo Alumno
@stop

@section('content')
<div class="page-center">
    <div class="container-fluid">
        <form class="sign-box">
            <div class="sign-avatar no-photo">&plus;</div>
            <header class="sign-title">UPIIZ</header>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="E-Mail"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Boleta"/>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Repetir boleta"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña"/>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Repetir Contraseña"/>
            </div>
            <button type="submit" class="btn btn-rounded btn-success sign-up">Registrar</button>
            <p class="sign-note">¿Tienes una cuenta? <a href="sign-in.html">Iniciar sesion</a></p>
            <!--<button type="button" class="close">
                <span aria-hidden="true">&times;</span>
            </button>-->
        </form>
    </div>
</div><!--.page-center-->
@stop

@section('scripts')
    
@stop
