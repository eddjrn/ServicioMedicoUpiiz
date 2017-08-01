@extends('Admin.layout2')

@section('title')
<title>Perfíl servicio medico</title>
@stop

@section('css')
@stop

@section('popUp')

@unless(isset($edit))
<div class="modal fade bd-example-modal-sm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">¿Desea editar el perfíl de administrador?</h4>
            </div>
            {!!Form::open(array('url'=>'/admin/profile', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input id="hide-show-password" type="password" class="form-control" value="" name="clave">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-danger">Editar datos</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->
@endunless

<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
                @if(isset($edit))
                {!!Form::model($user, array('url'=>'/admin/profile', 'method'=>'patch', 'class'=>'sign-box'))!!}
                    <div class="sign-avatar">
                        <img src="{{asset('/Template/img/avatar-sign.png')}}" alt="">
                    </div>
                    
                    @include('alerts.formError')
                    
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Nombre(s)</label>
                        {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ej: Nombre1 Nombre2'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Apellido paterno</label>
                        {!!Form::text('apellidoPaterno', null, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Apellido materno</label>
                        {!!Form::text('apellidoMaterno', null, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Correo electrónico</label>
                        {!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ej: ejemplo@correo.com'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Facebook</label>
                        {!!Form::text('facebook', null, ['class'=>'form-control', 'placeholder'=>'Ej: ejemplo@correo.com'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Identificación</label>
                        {!!Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxxxxxxx'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Repetir identificación</label>
                        {!!Form::text('identificacion2', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxxxxxxx'])!!}
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="hide-show-password">Contraseña</label>
                        <input id="hide-show-password" type="password" class="form-control" value="" name="clave">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="hide-show-password">Repetir contraseña</label>
                        <input id="hide-show-password2" type="password" class="form-control" value="" name="clave2">
                    </div>
                    
                    <button type="submit" class="btn btn-rounded btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm">Actualizar perfíl</button>
                    
                    <a href="{{asset('/admin/profile')}}"><button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button></a>
                {!!Form::close()!!}
                @else
                 <form class="sign-box">
                    <div class="sign-avatar">
                        <img src="{{asset('/Template/img/LogoSMadmin.svg')}}" alt="">
                    </div>
                    <header class="sign-title">{{$user}}</header>
                    
                    @include('alerts.formError')
                    @include('alerts.sessionAlert')
                    
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Tipo de usuario</label>
                        <input type="text" class="form-control" readonly placeholder="" value="{{$user->tipo}}"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Correo electrónico</label>
                        <input type="text" class="form-control" readonly placeholder="" value="{{$user->email}}"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputDisabled2">Identificación</label>
                        <input type="text" class="form-control" readonly placeholder="" value="{{$user->identificacion}}"/>
                    </div>
                    
                    <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target=".bd-example-modal-sm">Editar perfíl</button>
                    <p class="sign-note"><a href="{{$user->facebook}}" target="_blank">Facebook</a></p>
                    
                    <a href="{{asset('/admin')}}"><button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button></a>
                </form>
                @endif
                
            
        </div>
    </div>
</div><!--.page-center-->

@stop

@section('subHead')
@stop

@section('content')
Hola
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/hide-show-password/bootstrap-show-password.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/hide-show-password/bootstrap-show-password-init.js')}}"></script>
@stop
