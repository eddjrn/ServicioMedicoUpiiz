@extends('layout')

@section('title')
<title>Ingreso Servicio Medico</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            {!!Form::open(array('url'=>'/login', 'class'=>'sign-box', 'method'=>'post'))!!}
                <div class="sign-avatar">
                    <img src="Template/img/avatar-sign.png" alt="">
                </div>
                
                @include('alerts.formError')
                
                <header class="sign-title">Iniciar sesión</header>
                <div class="form-group">
                    {!!Form::text('boleta', null, ['class'=>'form-control', 'placeholder'=>'Boleta', 'id'=>'boleta'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('clave', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'clave'])!!}
                </div>
                
                <div class="form-group">
                    <div class="checkbox float-left">
                        <input type="checkbox" id="signed-in"/>
                        <label for="signed-in">Recordarme</label>
                    </div>
                    <div class="float-right reset">
                        <a href="reset-password.html">¡Olvide mi Contraseña!</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-rounded">Entrar</button>
                <p class="sign-note">¿Nuevo en el sitio? <a href="/signup">Registrarme</a></p>
                
                <a href="/"><button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            {!!Form::close()!!}
            </form>-->
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('scripts')
    
@stop
