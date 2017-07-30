@extends('Admin.layout2')

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
                    <button type="submit" class="btn btn-rounded btn-primary" formaction="/" id="formi">Guardar cambios</button>
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
                                <button type="submit" class="btn btn-rounded btn-primary btn-danger" formaction="/" id="formButton2">Eliminar</button>
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

<section class="widget widget-user">
    <div class="widget-user-bg" style="background-image: url('/Template/img/user-bg.jpg')"></div>
    <div class="widget-user-photo">
        <img src="/Template/img/upiiz_avatar.png" alt="">
    </div>
    <div class="widget-user-name">
        {{$student->user}}
        <i class="font-icon font-icon-award"></i>
    </div>
    <div>{{$student->carrer->nombre}}</div>
    @unless($student->user->facebook == null) <div><a href="{{$student->user->facebook}}" target="_blank">Facebook</a></div> @endunless
    
    <div class="widget-user-stat hidden-md-down">
        <div class="item">
            <div class="number">{{$student->user->medicalData->numSeguro}}</div>
            <div class="caption">Número de seguro</div>
        </div>
        <div class="item">
            <div class="number">{{$student->user->email}}</div>
            <div class="caption">Correo</div>
        </div>
        <div class="item">
            <div class="number">{{$student->user->identificacion}}</div>
            <div class="caption">Boleta</div>
        </div>
        
    </div>
</section>

<div class="box-typical box-typical-padding">

    <h5 class="m-t-lg with-border">Datos personales</h5>

    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Tipo de usuario</label>
                <input type="text" readonly class="form-control" value="{{$student->user->tipo}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Sexo</label>
                <input type="text" readonly class="form-control" value="{{$student->sexo}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Teléfono</label>
                <input type="text" readonly class="form-control" value="{{$student->telefono}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Estado de documentación</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="font-icon {{config('global.hasIconStyle')[$student->documentacion]}} {{config('global.hasColorStyle')[$student->documentacion]}}"></i>
                        {{$student->documentacion()}}
                    </div>
                    <input class="form-control {{config('global.hasStyleTextBox')[$student->documentacion]}}" readonly type="text" value="{{$student->observaciones}}">
                </div>
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Estatus</label>
                <input type="text" readonly class="form-control {{config('global.statusStyleTextBox')[$student->estatus_id]}}" value="{{$student->status->nombre}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Seguro de vida</label>
                <div class="form-control-wrapper form-control-icon-left">
                    <input class="form-control {{config('global.hasStyleTextBox')[$student->user->medicalData->seguroVida]}}" readonly placeholder="Left" type="text" value="{{$student->user->medicalData->seguroVida()}}">
                    <i class="font-icon {{config('global.hasIconStyle')[$student->user->medicalData->seguroVida]}} {{config('global.hasColorStyle')[$student->user->medicalData->seguroVida]}}"></i>
                </div>
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Fecha de nacimiento</label>
                <input type="text" readonly class="form-control" value="{{$student->formatedNacimiento()}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Edad</label>
                <input type="text" readonly class="form-control" value="{{$student->age()}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">CURP</label>
                <input type="text" readonly class="form-control" value="{{$student->curp}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row hidden-lg-up">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Correo electronico</label>
                <input type="text" readonly class="form-control" value="{{$student->user->email}}">
            </fieldset>
        </div>
    </div>
    
    <h5 class="m-t-lg with-border">Datos del tutor</h5>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Nombre del tutor</label>
                <input type="text" readonly class="form-control" value="{{$student->tutor}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Teléfono del tutor</label>
                <input type="text" readonly class="form-control" value="{{$student->telefonoTutor}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Teléfono celular del tutor</label>
                <input type="text" readonly class="form-control" value="{{$student->celularTutor}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Parentesco con el tutor</label>
                <input type="text" readonly class="form-control" value="{{$student->parentescoTutor}}">
            </fieldset>
        </div>
    </div>
    
    <h5 class="m-t-lg with-border">Datos de médicos</h5>
    
    <div class="row hidden-lg-up">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Número de seguro</label>
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->numSeguro}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Proveedor de seguro</label>
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->proveedorSeguro}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Clínica a la que pertenece</label>
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->clinic}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Institución médica a la que pertenece</label>
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->institution->nombre}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Tipo de sangre</label>
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->tipoSangre}}">
            </fieldset>
        </div>
    </div>
    
    <div class="text-center">
        <button type="button" class="btn btn-rounded btn-inline btn-info" data-toggle="modal" data-target=".medicalWindow">Más información</button>
    </div>
    
    <div class="modal fade medicalWindow"
            tabindex="-1"
            role="dialog"
            aria-labelledby="medicalWindow"
            aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                        <i class="font-icon-close-2"></i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Datos de médicos de {{$student->user}}</h4>
                </div>
                <div class="modal-body">
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Proveedor de seguro</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalData->proveedorSeguro}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Clínica a la que pertenece</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalData->clinic}}">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Institución médica a la que pertenece</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalData->institution->nombre}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Número de seguro médico</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalData->numSeguro}}">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Seguro de vida</label>
                                    <div class="form-control-wrapper form-control-icon-left">
                                        <input class="form-control {{config('global.hasStyleTextBox')[$student->user->medicalData->seguroVida]}}" readonly placeholder="Left" type="text" value="{{$student->user->medicalData->seguroVida()}}">
                                        <i class="font-icon {{config('global.hasIconStyle')[$student->user->medicalData->seguroVida]}} {{config('global.hasColorStyle')[$student->user->medicalData->seguroVida]}}"></i>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Tipo de sangre</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalData->tipoSangre}}">
                                </fieldset>
                            </div>
                        </div>
                        <h5 class="m-t-lg with-border">Historial médico</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Alergias</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalRecord->alergias}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Cirugías</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalRecord->cirugias}}">
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Fracturas</label>
                                    <input type="text" readonly class="form-control" value="{{$student->user->medicalRecord->fracturas}}">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Edad</label>
                                    <input type="text" readonly class="form-control" value="{{$student->age()}}">
                                </fieldset>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-4">
                                <article class="profile-info-item">
                                    <header class="profile-info-item-header">
                                        <i class="font-icon font-icon-heart"></i>
                                        Otra información
                                    </header>
                                    <ul class="exp-timeline">
                                        <li class="exp-timeline-item">
                                            <div class="dot"></div>
                                            <div class="tbl">
                                                <div class="tbl-row">
                                                    <div class="tbl-cell">
                                                        <div class="exp-timeline-range">{{$student->user->medicalRecord->fumar}}</div>
                                                        <div class="exp-timeline-status">{{$student->user->medicalRecord->numFumar}}</div>
                                                        <div class="exp-timeline-status">{{$student->user->medicalRecord->edadFumar}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="exp-timeline-item">
                                            <div class="dot"></div>
                                            <div class="tbl">
                                                <div class="tbl-row">
                                                    <div class="tbl-cell">
                                                        <div class="exp-timeline-range">{{$student->user->medicalRecord->alcohol}}</div>
                                                        <div class="exp-timeline-status">{{$student->user->medicalRecord->numAlcohol}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="exp-timeline-item">
                                            <div class="dot"></div>
                                            <div class="tbl">
                                                <div class="tbl-row">
                                                    <div class="tbl-cell">
                                                        <div class="exp-timeline-range">{{$student->user->medicalRecord->transfusiones}}</div>
                                                        <div class="exp-timeline-status">{{$student->user->medicalRecord->edadTransfusiones}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </article><!--.profile-info-item-->
                            </div>
                        </div>
                        
                        <h5 class="m-t-lg with-border">Antecedentes de enfermedades en la familia</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Presión alta</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->presionAlta, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Diabetes</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->diabetes, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Asma</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->asma, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Artritis</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->artritis, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Cáncer</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->cancer, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Epilepsias</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->epilepsias, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Enfermedades del corazón</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfCorazon, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Sobrepeso</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->sobrePeso, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Enfermedades de la tiroides</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfTiroides, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Bipolaridad</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->bipolaridad, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Esquizofrenia</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->esquizofrenia, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-4">
                                <fieldset class="form-group">
                                    <label class="form-label" for="exampleInputDisabled2">Depresión</label>
                                    {!!Form::select('presion', config('global.nombresAntecedentes'), $student->user->medicalRecord->depresion, ['class'=>'select2', 'multiple', 'disabled'])!!}
                                </fieldset>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--.modal-->
    
    <h5 class="m-t-lg with-border">Datos de escolares</h5>
    
    <div class="row hidden-lg-up">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Boleta</label>
                <input type="text" readonly class="form-control" value="{{$student->user->identificacion}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Carrera /
                    <span class="label" style="background-color: {{$student->carrer->color}}; border-color: #D0D0D0;">____________</span>
                </label>
                <input type="text" readonly class="form-control" value="{{$student->carrer->nombre}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Turno</label>
                <input type="text" readonly class="form-control" value="{{$student->turno}}">
            </fieldset>
        </div>
    </div>
    
    <h5 class="m-t-lg with-border">Datos de geográficos</h5>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Estado de nacimiento</label>
                <input type="text" readonly class="form-control" value="{{$student->state->nombre}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Municipio de recidencia</label>
                <input type="text" readonly class="form-control" value="{{$student->place->nombre}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Localidad</label>
                <input type="text" readonly class="form-control" value="{{$student->localidad}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Calle</label>
                <input type="text" readonly class="form-control" value="{{$student->calle}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Número exterior</label>
                <input type="text" readonly class="form-control" value="{{$student->numExterior}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Número interior</label>
                <input type="text" readonly class="form-control" value="{{$student->numInterior}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Colonia</label>
                <input type="text" readonly class="form-control" value="{{$student->colonia}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Código postal</label>
                <input type="text" readonly class="form-control" value="{{$student->codigoPostal}}">
            </fieldset>
        </div>
    </div>

    <h5 class="m-t-lg with-border">Seguridad</h5>
    
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Pregunta de Seguridad</label>
                <input type="text" readonly class="form-control" value="{{$student->pregunta}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Respuesta de Seguridad</label>
                <input type="text" readonly class="form-control" value="{{$student->respuesta}}">
            </fieldset>
        </div>
    </div>
    </br>
    
    <div class="row text-center">
        <div class="col-lg-6 col-md-6">
            <button type="button" class="btn btn-rounded btn-inline btn-warning" data-toggle="modal" data-target=".bd-example-modal-md" onclick="updateInputsProfile({{$student->id}}, '{{$student->user}}');">Editar</button>
        </div>
        <div class="col-lg-6 col-md-6">
            <button type="button" class="btn btn-rounded btn-inline btn-primary" data-toggle="modal" data-target="#messageBox" onclick="updateInputsProfile({{$student->id}}, '{{$student->user}}');">Envíar mensaje</button>
        </div>
    </div>
    
</div> <!--End box typical-->
@stop

@section('scripts')
    <script src="/Template/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Template/js/lib/select2/select2.full.min.js"></script>
    <script src="/Template/js/custom/listsEdits.js"></script>
    <script>
        $(document).ready(function(){
            $('.remove-example').find('[value=0]').remove();
        });
    </script>
@stop
