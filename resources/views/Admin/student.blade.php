@extends('Admin.layout2')

<?php
	$classSize = "col-lg-4 col-md-4 col-sm-6";
	$classSizeModal = "col-lg-6 col-md-6";
?>

@section('title')
<title>Información del alumno</title>
@stop

@section('css')
@stop

@section('popUp')

<div class="modal fade"
        id="messageBox"
        tabindex="-1"
        role="dialog"
        aria-labelledby="messageBoxWindow"
        aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="messageBoxWindow">Nuevo mensaje para: </br> {{$student->user}}</h4>
            </div>
            {!!Form::open(array('url'=>'/admin/newMessage', 'method'=>'post'))!!}
            <div class="modal-body">
                <input type="hidden" value="{{$student->id}}" name="usuarioMensaje">
                <input class="form-control" id="tituloMensaje" placeholder="Título" type="text" name="tituloMensaje">
                <br/>
                <textarea rows="4" class="form-control" placeholder="Contenido" name="contenidoMensaje"></textarea>
            </div>
            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-rounded btn-info">Envíar</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

<div class="modal fade bd-example-modal-md"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edición del perfil</h4>
            </div>
            {!!Form::open(array('method'=>'post', 'id'=>'userForm'))!!}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
                            <h5 class="m-t-lg with-border">Estatus en el sistema</h5>
                            <!--{{$estatus=\App\status::lists('nombre', 'id')}} -->
                            {!!Form::select('estatus', $estatus, $student->estatus_id, ['class'=>'bootstrap-select bootstrap-select-arrow form-control', 'id'=>'estatus'])!!}
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <h5 class="m-t-lg with-border">Seguro de vida</h5>
                            {!!Form::select('seguro', config('global.SeguroVida'), $student->user->medicalData->seguroVida, ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example', 'id'=>'seguro'])!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
                            <h5 class="m-t-lg with-border">Documentación</h5>
                            {!!Form::select('documentacion', config('global.documentacion'), $student->documentacion, ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example', 'id'=>'documentacion'])!!}
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <h5 class="m-t-lg with-border">Observaciones</h5>
                            {!!Form::text('observaciones', $student->observaciones, array('class'=>'form-control', 'id'=>'observaciones', 'placeholder'=>'Observaciones sobre la documentacion'))!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
<!--                 <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button> -->
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary" formaction="{{asset('/')}}" id="formi">Guardar cambios</button>
                </div>
            </div>
            {!!Form::close()!!}
            
             <div class="modal-footer">
                <div class="text-center">
                    <a onclick="toggle();" id="more">Mostrar más</a>
                </div>
            </div>
            
            {!!Form::open(array('method'=>'delete', 'style'=>'display:none', 'class'=>'details'))!!}
                <input type="hidden" name="idVal2" id="idVal2" value="{{$student->id}}">
                <div class="modal-footer">
                    <div class="container text-center">
                        <div class="form-group">
                            <h5 class="m-t-lg with-border">¿Seguro que quiere eliminar el registro?</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <button type="submit" class="btn btn-rounded btn-primary btn-danger" formaction="{{asset('/')}}" id="formButton2">Eliminar</button>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <button type="button" class="btn btn-rounded btn-primary" onclick="toggle();">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->
@stop

@section('subHead')
Información del alumno
@stop

@section('content')

@include('shared.userData')

<div class="box-typical box-typical-padding">
	<h5 class="m-t-lg with-border">Seguridad</h5>
		
	<div class="row">
		<div class="{{$classSize}}">
		    <fieldset class="form-group">
		        <label class="form-label" for="exampleInputDisabled2">Pregunta de Seguridad</label>
		        <input type="text" readonly class="form-control" value="{{$student->pregunta}}">
		    </fieldset>
		</div>
		<div class="{{$classSize}}">
		    <fieldset class="form-group">
		        <label class="form-label" for="exampleInputDisabled2">Respuesta de Seguridad</label>
		        <input type="text" readonly class="form-control" value="{{$student->respuesta}}">
		    </fieldset>
		</div>
	</div>
	</br>

	<div class="row text-center">
		<div class="col-lg-4 col-md-4">
		    <button type="button" class="btn btn-rounded btn-inline btn-warning" data-toggle="modal" data-target=".bd-example-modal-md" onclick="updateInputsProfile({{$student->id}}, '{{$student->user}}');">Editar</button>
		</div>
		<div class="col-lg-4 col-md-4">
		    <button type="button" class="btn btn-rounded btn-inline btn-primary" data-toggle="modal" data-target="#messageBox" onclick="updateInputsProfile({{$student->id}}, '{{$student->user}}');">Envíar mensaje</button>
		</div>
        <div class="col-lg-4 col-md-4">
             <a href="{{asset('/admin/student')}}/{{$student->id}}" class="btn btn-rounded btn-inline btn-success" target="_blank" >Obtener Formulario</a>
        </div>
	</div>
</div>
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/listsEdits.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.remove-example').find('[value=0]').remove();
        });
    </script>
@stop
