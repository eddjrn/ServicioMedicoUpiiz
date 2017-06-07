@extends('layout')

@section('title')
<title>Perfil de usuario</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Perfil de usuario
@stop

@section('content')

<section class="widget widget-user">
    <div class="widget-user-bg" style="background-image: url('Template/img/widget-user-bg.jpg')"></div>
    <div class="widget-user-photo">
        <img src="Template/img/avatar-2-256.png" alt="">
    </div>
    <div class="widget-user-name">
        {{$student->user}}
        <i class="font-icon font-icon-award"></i>
    </div>
    <div>{{$student->carrer->nombre}}</div>
    
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
                <input type="text" readonly class="form-control 
                    @if($student->documentacion == 1)
                        form-control-blue-fill
                    @elseif($student->documentacion == 2)
                        form-control-red-fill
                    @endif" value="{{$student->documentation()}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Estatus</label>
                <input type="text" readonly class="form-control 
                    @if($student->estatus_id == 1)
                        form-control-blue-fill
                    @elseif($student->estatus_id == 2)
                        form-control-red-fill
                    @elseif($student->estatus_id == 3)
                        form-control-danger
                    @elseif($student->estatus_id == 4)
                        form-control-orange-fill
                    @elseif($student->estatus_id == 5)
                        form-control-green-fill
                    @endif" value="{{$student->status->nombre}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">CURP</label>
                <input type="text" readonly class="form-control form-control-green-fill" value="{{$student->curp}}">
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
                <label class="form-label" for="exampleInputDisabled2">Carrera</label>
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
    
</div> <!--End box typical-->

@stop

@section('scripts')
@stop 
