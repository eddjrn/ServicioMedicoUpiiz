@extends('layout')

@section('title')
<title>Registro Al Servicio Medico</title>
@stop

@section('css')
@stop

@section('popUp')

<div class="modal fade"
        id="myModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">¿Cómo pongo el link de Facebook?</h4>
            </div>
            <div class="modal-body text-center">
                <img src="{{asset('/Template/img/Facebookprocess.gif')}}" class="img-size round">
            </div>
        </div>
    </div>
</div><!--.modal-->

<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
            {!!Form::open(array('url'=>'/signup', 'class'=>'sign-box', 'method'=>'post'))!!}
                <div class="sign-avatar no-photo">
                    <img src="{{asset('Template/img/LogoSMplus.svg')}}" alt="">
                </div>

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
                    <div class="input-group">
                        {!!Form::text('facebook', null, ['class'=>'form-control', 'placeholder'=>'Link de Facebook', 'id'=>'facebook'])!!}
                        <div class="input-group-addon">
                            <a data-toggle="modal" data-target="#myModal"><span class="font-icon font-icon-eye"></span></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!!Form::text('identificacion', null, ['class'=>'form-control', 'id'=>'identificacion'])!!}
                </div>
                <div class="form-group">
                    {!!Form::text('identificacion2', null, ['class'=>'form-control', 'id'=>'identificacion2'])!!}
                </div>
                <small class="text-muted">El sistema automáticamente pasa el texto de boleta o identificación a mayúsculas.</small>
                <br/>
                <div class="form-group">
                    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña', 'id'=>'hide-show-password'])!!}
                </div>
                <div class="form-group">
                    {!!Form::password('password2', ['class'=>'form-control', 'placeholder'=>'Repetir contraseña', 'id'=>'password2'])!!}
                </div>

                <button type="submit" class="btn btn-rounded btn-success sign-up">Registrar</button>
                <p class="sign-note">¿Tienes una cuenta? <a href="{{asset('/login')}}">Iniciar sesión</a></p>

                <a href="{{asset('/')}}"><button type="button" class="close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('scripts')
<script src="{{asset('/Template/js/lib/input-mask/jquery.mask.min.js')}}"></script>
<script src="{{asset('/Template/js/custom/shared.js')}}"></script>

<script src="{{asset('/Template/js/lib/hide-show-password/bootstrap-show-password.min.js')}}"></script>
<script src="{{asset('/Template/js/lib/hide-show-password/bootstrap-show-password-init.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#identificacion').mask('AA0000000000', {placeholder: 'Boleta o indentificación'});
        $('#identificacion2').mask('AA0000000000', {placeholder: 'Repetir boleta o indentificación'});

        checkPosition();
    });
</script>
@stop
