@extends('layout')

@section('title')
<title>Inicio servicio medico</title>
@stop

@section('css')
@stop

@section('subHead')
Registro de Nuevo Alumno
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            {!!Form::open(array('url'=>'/register', 'class'=>'sign-box', 'method'=>'post'))!!}
                <div class="sign-avatar no-photo">&plus;</div>
                <header class="sign-title">UPIIZ</header>
                <div class="form-group">
                    {!!Form::text('mail', null, ['class'=>'form-control', 'placeholder'=>'E-Mail', 'id'=>'mail'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('boleta', null, ['class'=>'form-control', 'placeholder'=>'Boleta', 'id'=>'boleta'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('boleta2', null, ['class'=>'form-control', 'placeholder'=>'Repetir boleta', 'id'=>'boleta2'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('clave', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'clave'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('clave2', ['class'=>'form-control', 'placeholder'=>'Repetir contraseña', 'id'=>'clave2'])!!}
                </div>
                <button type="submit" class="btn btn-rounded btn-success sign-up">Registrar</button>
                <p class="sign-note">¿Tienes una cuenta? <a href="sign-in.html">Iniciar sesion</a></p>
                
                <a href="/"><button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            {!!Form::close()!!}
            
            <!--<form class="sign-box">
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
            </form>-->
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('scripts')
    
@stop
