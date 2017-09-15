@extends('layout')

@section('title')
<title>Cambiar Contraseña</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="page-center">
    <div class="page-center-in">
        <div class="container-fluid">
           {!!Form::model($student, array('url'=>'/questionPass/edit1', 'method'=>'post','class'=>'sign-box'))!!}
                <div class="sign-avatar">
                    <img src="{{asset('Template/img/LogoSMUPIIZ.svg')}}" alt="">
                </div>

                @include('alerts.formError')

                <header class="sign-title">Cambiar Contraseña</header>
                <div class="form-group">
                    <input id="hide-show-password" type="password" class="form-control" value="" name="clave" placeholder="Nueva Contraseña" required>
                </div>
                <div class="form-group">
                     <input id="hide-show-password2" type="password" class="form-control" value="" name="clave2" placeholder="Repetir Contraseña" required>
                </div>

                <input type="hidden" value="{{$student->usuario_id}}" id="studentId" name="studentId">
                        <div class="text-center">
                <button type="submit" class="btn btn-rounded">Guardar</button>


            {!!Form::close()!!}
        </div>
    </div>
</div><!--.page-center-->
@stop

@section('subHead')
@stop

@section('content')



@stop

@section('scripts')

    <script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/completeProfileToggle.js')}}"></script>

    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker-init.js')}}"></script>
    <script src="{{asset('/Template/js/lib/daterangepicker/daterangepicker.js')}}"></script>

@stop
