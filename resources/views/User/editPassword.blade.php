@extends('layout')

@section('title')
<title>Editar perfil</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Edición de la contraseña
@stop

@section('content')
<div class="box-typical box-typical-padding documentation col-md-12">
{!!Form::model($student, array('url'=>'/profile/edit1', 'method'=>'post'))!!}
			
				<div class="row">
                    <div class="col-md-4 col-sm-6">
                    <label class="form-label" for="exampleInputDisabled">Cambiar Contraseña</label>   
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <label class="form-label" for="hide-show-password">Nueva Contraseña</label>
                        <input id="hide-show-password" type="text" class="form-control" value="" name="clave">
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <label class="form-label" for="hide-show-password">Repetir contraseña</label>
                        <input id="hide-show-password2" type="text" class="form-control" value="" name="clave2">
                        </div>
                    </div>
						</div>
                    <input type="hidden" value="{{$student->user->id}}" id="studentId" name="studentId">
						<div class="text-center">
    				<button type="submit" class="btn btn-rounded btn-inline btn-warning">Guardar</button>
						</div>
{!!Form::close()!!}


@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/completeProfileToggle.js')}}"></script>
    
    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker-init.js')}}"></script>
    <script src="{{asset('/Template/js/lib/daterangepicker/daterangepicker.js')}}"></script>
@stop 
