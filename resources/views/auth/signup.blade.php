@extends('layout')

@section('title')
<title>Registro Al Servicio Medico</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            {!!Form::open(array('url'=>'/signup', 'class'=>'sign-box', 'method'=>'post'))!!}
                <div class="sign-avatar no-photo">&plus;</div>
                
                @include('alerts.formError')
                
                <header class="sign-title">Nuevo usuario</header>
                
                <div class="form-group">
                    {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre(s)', 'id'=>'nombre'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('apellidoPaterno', null, ['class'=>'form-control', 'placeholder'=>'Apellido paterno', 'id'=>'apellidoPaterno'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('apellidoMaterno', null, ['class'=>'form-control', 'placeholder'=>'Apellido materno', 'id'=>'apellidoMaterno'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'E-Mail', 'id'=>'email'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>'Boleta o indentificación', 'id'=>'identificacion'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('identificacion2', null, ['class'=>'form-control', 'placeholder'=>'Repetir boleta', 'id'=>'identificacion2'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'password'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('password2', ['class'=>'form-control', 'placeholder'=>'Repetir contraseña', 'id'=>'password2'])!!}
                </div>
                
                <button type="submit" class="btn btn-rounded btn-success sign-up">Registrar</button>
                <p class="sign-note">¿Tienes una cuenta? <a href="/login">Iniciar sesión</a></p>
                
                <a href="/"><button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('scripts')
    
@stop
