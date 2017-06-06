@extends('layout')

@section('title')
<title>Llenado de campos obligatorios</title>
@stop

@section('css')
@stop

@section('popUp')

<div class="container-fluid">

{!!Form::open(array('url'=>'/profile/newStudent', 'method'=>'post'))!!}
    <div class="row details1" style="display:block">
        
        <div class="col-md-3">
        </div>
        <div class="col-md-6" >
            @include('alerts.formError')
            <section class="box-typical steps-icon-block">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-user"></i>
                            </div>
                            <div class="caption hidden-sm-up">-1-</div>
                            <div class="caption hidden-sm-down">Personales</div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="font-icon font-icon-card"></i>
                            </div>
                            <div class="caption hidden-sm-up">-2-</div>
                            <div class="caption hidden-sm-down">Médicos</div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="font-icon font-icon-pin-2"></i>
                            </div>
                            <div class="caption hidden-sm-up">-3-</div>
                            <div class="caption hidden-sm-down">Geográficos</div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="font-icon font-icon-pencil"></i>
                            </div>
                            <div class="caption hidden-sm-up">-4-</div>
                            <div class="caption hidden-sm-down">Escolares</div>
                        </li>
                    </ul>
                </div>

                <header class="steps-numeric-title">Llenado de información personal</header>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('telefono', null, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'Teléfono'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('curp', null, ['class'=>'form-control', 'id'=>'curp', 'placeholder'=>'CURP'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="form-group">
                    <a href="https://consultas.curp.gob.mx/CurpSP/inicio2_2.jsp" target="_blank">Consultar CURP</a>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Sexo</label>
                        {!!Form::select('sexo', array('0'=>'Seleccionar', '1'=>'Masculino', '2'=>'Femenino'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 form-group">
                        <label class="form-label">Fecha de nacimiento</label>
                        <div class='input-group date'>
                            {!!Form::text('nacimiento', null, ['class'=>'form-control', 'id'=>'date_box', 'placeholder'=>'00/00/0000'])!!}
                            <span class="input-group-addon">
                                <i class="font-icon font-icon-calend"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <h5 class="m-t-lg with-border">Datos del tutor</h5>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('tutor', null, ['class'=>'form-control', 'id'=>'tutor', 'placeholder'=>'Nombre del tutor a cargo'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('telefonoTutor', null, ['class'=>'form-control', 'id'=>'telefonoTutor', 'placeholder'=>'Teléfono del tutor'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('celularTutor', null, ['class'=>'form-control', 'id'=>'celularTutor', 'placeholder'=>'Teléfono celular del tutor'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Parentesco con el tutor</label>
                        {!!Form::select('parentesco', array('0'=>'Seleccionar', '1'=>'Padre', '2'=>'Hermano'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-rounded" onclick="toggle1();">
                            Siguiente →
                        </button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
            </section><!--.steps-icon-block-->
        </div>
        <div class="col-md-3">
        </div>
    </div><!--.row-->
    
    <div class="row details2" style="display:none">
        <div class="col-md-3">
        </div>
        <div class="col-md-6" >
            <section class="box-typical steps-icon-block">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-user"></i>
                            </div>
                            <div class="caption hidden-sm-up">-1-</div>
                            <div class="caption hidden-sm-down">Personales</div>
                        </li>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-card"></i>
                            </div>
                            <div class="caption hidden-sm-up">-2-</div>
                            <div class="caption hidden-sm-down">Médicos</div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="font-icon font-icon-pin-2"></i>
                            </div>
                            <div class="caption hidden-sm-up">-3-</div>
                            <div class="caption hidden-sm-down">Geográficos</div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="font-icon font-icon-pencil"></i>
                            </div>
                            <div class="caption hidden-sm-up">-4-</div>
                            <div class="caption hidden-sm-down">Escolares</div>
                        </li>
                    </ul>
                </div>

                <header class="steps-numeric-title">Llenado de información medica</header>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('numSeguro', null, ['class'=>'form-control', 'id'=>'numSeguro', 'placeholder'=>'Número de seguro'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Proveedor de seguro</label>
                        {!!Form::select('proveedorSeguro', array('0'=>'Seleccionar', '1'=>'UPIIZ-IPN', '2'=>'Padres', '3'=>'Trabajo'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Institución que lo asegura</label>
                        <!--{{$institution=\App\medicalInstitute::lists('nombre', 'id')}} -->
                        {!!Form::select('institucionClinica', $institution->prepend('Seleccionar', 0), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Clinica a la que pertenece</label>
                        <!-- {{$clinic=\App\clinic::all()}} -->
                        <?php $list = array('0' => 'Seleccionar'); ?>
                        @foreach($clinic as $c)
                        <!--{{array_push($list, $c->__toString())}} -->
                        @endforeach
                        {!!Form::select('numClinica', $list, 0, ['class'=>'select2 form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Tipo de sangre</label>
                        {!!Form::select('sangre', array('0'=>'Seleccionar', '1'=>'A+', '2'=>'A-', '3'=>'B+', '4'=>'B-', '5'=>'O+', '6'=>'O-', '7'=>'AB+', '8'=>'AB-'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-rounded btn-grey" onclick="toggle2();">← Atrás</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-rounded" onclick="toggle1();">
                            Siguiente →
                        </button>
                    </div>
                </div>
                
            </section><!--.steps-icon-block-->
        </div>
        <div class="col-md-3">
        </div>
    </div><!--.row-->
    
    <div class="row details3" style="display:none">
        <div class="col-md-3">
        </div>
        <div class="col-md-6" >
            <section class="box-typical steps-icon-block">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-user"></i>
                            </div>
                            <div class="caption hidden-sm-up">-1-</div>
                            <div class="caption hidden-sm-down">Personales</div>
                        </li>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-card"></i>
                            </div>
                            <div class="caption hidden-sm-up">-2-</div>
                            <div class="caption hidden-sm-down">Médicos</div>
                        </li>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-pin-2"></i>
                            </div>
                            <div class="caption hidden-sm-up">-3-</div>
                            <div class="caption hidden-sm-down">Geográficos</div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="font-icon font-icon-pencil"></i>
                            </div>
                            <div class="caption hidden-sm-up">-4-</div>
                            <div class="caption hidden-sm-down">Escolares</div>
                        </li>
                    </ul>
                </div>

                <header class="steps-numeric-title">Llenado de datos geográficos</header>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Municipio donde vive actualmente</label>
                        <!--{{$place=\App\place::lists('nombre', 'id')}} -->
                        {!!Form::select('municipio', $place->prepend('Seleccionar', 0), 0, ['class'=>'select2 form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Estado de origen</label>
                        <!--{{$estate=\App\state::lists('nombre', 'id')}} -->
                        {!!Form::select('estado', $estate->prepend('Seleccionar', 0), 0, ['class'=>'select2 form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('localidad', null, ['class'=>'form-control', 'id'=>'localidad', 'placeholder'=>'Localidad'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('cp', null, ['class'=>'form-control', 'id'=>'cp', 'placeholder'=>'Código postal'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('calle', null, ['class'=>'form-control', 'id'=>'calle', 'placeholder'=>'Calle'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        {!!Form::text('colonia', null, ['class'=>'form-control', 'id'=>'colonia', 'placeholder'=>'Colonia'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group"></div>
                    <div class="col-md-3 form-group">
                        {!!Form::text('numExt', null, ['class'=>'form-control', 'id'=>'numExt', 'placeholder'=>'Número interior'])!!}
                    </div>
                    <div class="col-md-3 form-group">
                        {!!Form::text('numInt', null, ['class'=>'form-control', 'id'=>'numInt', 'placeholder'=>'Número exteriorr'])!!}
                    </div>
                    <div class="col-md-3 form-group"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-rounded btn-grey" onclick="toggle2();">← Atrás</button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-rounded" onclick="toggle1();">
                            Siguiente →
                        </button>
                    </div>
                </div>
                
            </section><!--.steps-icon-block-->
        </div>
        <div class="col-md-3">
        </div>
    </div><!--.row-->
    
    <div class="row details4" style="display:none">
        <div class="col-md-3">
        </div>
        <div class="col-md-6" >
            <section class="box-typical steps-icon-block">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-user"></i>
                            </div>
                            <div class="caption hidden-sm-up">-1-</div>
                            <div class="caption hidden-sm-down">Personales</div>
                        </li>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-card"></i>
                            </div>
                            <div class="caption hidden-sm-up">-2-</div>
                            <div class="caption hidden-sm-down">Médicos</div>
                        </li>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-pin-2"></i>
                            </div>
                            <div class="caption hidden-sm-up">-3-</div>
                            <div class="caption hidden-sm-down">Geográficos</div>
                        </li>
                        <li class="active">
                            <div class="icon">
                                <i class="font-icon font-icon-pencil"></i>
                            </div>
                            <div class="caption hidden-sm-up">-4-</div>
                            <div class="caption hidden-sm-down">Escolares</div>
                        </li>
                    </ul>
                </div>

                <header class="steps-numeric-title">Llenado de información académica</header>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Programa académico</label>
                        <!--{{$carrer=\App\carrer::lists('nombre', 'id')}} -->
                        {!!Form::select('carrera', $carrer->prepend('Seleccionar', 0), 0, ['class'=>'select2 form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Turno</label>
                        {!!Form::select('turno', array('0'=>'Seleccionar', '1'=>'Matutino', '2'=>'Vespertino'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-rounded btn-grey" onclick="toggle2();">← Atrás</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-rounded btn-inline btn-warning">
                            Finalizar
                        </button>
                    </div>
                </div>
                
            </section><!--.steps-icon-block-->
        </div>
        <div class="col-md-3">
        </div>
    </div><!--.row-->
{!!Form::close()!!}
    
</div><!--.container-fluid-->

@stop

@section('subHead')
@stop

@section('content')
@stop

@section('scripts')
    <script src="/Template/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Template/js/lib/select2/select2.full.min.js"></script>
    <script src="/Template/js/custom/completeProfileToggle.js"></script>
    
    <script src="/Template/js/lib/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script src="/Template/js/lib/clockpicker/bootstrap-clockpicker-init.js"></script>
    <script src="/Template/js/lib/daterangepicker/daterangepicker.js"></script>
@stop
