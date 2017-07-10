@extends('Admin.layout2')

@section('title')
<title>Información del alumno</title>
@stop

@section('css')
@stop

@section('popUp')
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
                            {!!Form::select('seguro', $student->user->medicalData->insurances(), $student->user->medicalData->seguroVida, ['class'=>'bootstrap-select bootstrap-select-arrow form-control', 'id'=>'seguro'])!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
                            <h5 class="m-t-lg with-border">Documentación</h5>
                            {!!Form::select('documentacion', $student->documentationTypes(), $student->documentacion, ['class'=>'bootstrap-select bootstrap-select-arrow form-control', 'id'=>'documentacion'])!!}
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
    <div><a href="{{$student->user->facebook}}" target="_blank">Facebook</a></div>
    
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
                <input type="text" readonly class="form-control" value="{{$student->user->type()}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Sexo</label>
                <input type="text" readonly class="form-control" value="{{$student->sex()}}">
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
                        {{$student->documentation()}}
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
                    <input class="form-control {{config('global.hasStyleTextBox')[$student->user->medicalData->seguroVida]}}" readonly placeholder="Left" type="text" value="{{$student->user->medicalData->insurance()}}">
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
                <input type="text" readonly class="form-control" value="{{$student->tutorRelationship()}}">
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
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->provider()}}">
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
                <input type="text" readonly class="form-control" value="{{$student->user->medicalData->bloodType()}}">
            </fieldset>
        </div>
    </div>
    
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
                <input type="text" readonly class="form-control" value="{{$student->turn()}}">
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
    
    <div class="text-center">
        <button type="button" class="btn btn-rounded btn-inline btn-warning" data-toggle="modal" data-target=".bd-example-modal-md" onclick="updateInputsProfile({{$student->id}}, '{{$student->user}}');">Editar</button>
    </div>
    
</div> <!--End box typical-->
@stop

@section('scripts')
    <script src="/Template/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Template/js/custom/listsEdits.js"></script>
@stop
