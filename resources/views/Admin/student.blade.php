@extends('Admin.layout2')

@section('title')
<title>Información del alumno</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Información del alumno
@stop

@section('content')
<section class="widget widget-user">
    <div class="widget-user-bg" style="background-image: url('/Template/img/widget-user-bg.jpg')"></div>
    <div class="widget-user-photo">
        <img src="/Template/img/avatar-2-256.png" alt="">
    </div>
    <div class="widget-user-name">
        {{$student->user}}
        <i class="font-icon font-icon-award"></i>
    </div>
    <div>{{$student->carrer->nombre}}</div>
    
    <div class="widget-user-stat hidden-md-down">
        <div class="item">
            <div class="number">{{$student->noSeguro}}</div>
            <div class="caption">Número de seguro</div>
        </div>
        <div class="item">
            <div class="number">{{$student->user->email}}</div>
            <div class="caption">Correo</div>
        </div>
        <div class="item">
            <div class="number">{{$student->user->boleta}}</div>
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
                <label class="form-label" for="exampleInputDisabled2">Código postal</label>
                <input type="text" readonly class="form-control" value="{{$student->cp}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Estatus</label>
                <input type="text" readonly class="form-control @if($student->estatus_id == 1)
                                                            {{$statusStyle[0]}}
                                                        @elseif($student->estatus_id == 2)
                                                            {{$statusStyle[1]}}
                                                        @elseif($student->estatus_id == 3)
                                                            {{$statusStyle[2]}}
                                                        @elseif($student->estatus_id == 4)
                                                            {{$statusStyle[3]}}
                                                        @elseif($student->estatus_id == 5)
                                                            {{$statusStyle[4]}}
                                                        @endif" value="{{$student->status->nombre}}">
            </fieldset>
        </div>
    </div>
    
    <div class="row hidden-lg-up">
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Número de seguro</label>
                <input type="text" readonly class="form-control" value="{{$student->noSeguro}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Correo electronico</label>
                <input type="text" readonly class="form-control" value="{{$student->user->email}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Boleta</label>
                <input type="text" readonly class="form-control" value="{{$student->user->boleta}}">
            </fieldset>
        </div>
    </div>
    
    <h5 class="m-t-lg with-border">Datos de estadía</h5>
    
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
                <input type="text" readonly class="form-control" value="{{$student->numExt}}">
            </fieldset>
        </div>
        <div class="col-md-4 col-sm-6">
            <fieldset class="form-group">
                <label class="form-label" for="exampleInputDisabled2">Número interior</label>
                <input type="text" readonly class="form-control" value="{{$student->numInt}}">
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
    </div>
    
</div> <!--End box typical-->
@stop

@section('scripts')
@stop