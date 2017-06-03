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
                        <input type="text" class="form-control" placeholder="Teléfono" name="telefono" id="telefono"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="CURP" name="curp" id="curp"/>
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
                            <input id="date_box" type="text" value="" class="form-control" name="nacimiento">
                            <span class="input-group-addon">
                                <i class="font-icon font-icon-calend"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
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
                        <input type="text" class="form-control" placeholder="Número de seguro" name="noSeguro" id="noSeguro"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Nombre del tutor a cargo" name="tutor" id="tutor"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Proveedor de seguro</label>
                        {!!Form::select('proveedorSeguro', array('0'=>'Seleccionar', '1'=>'IPN', '2'=>'Padres', '3'=>'Otro'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <label class="form-label" for="exampleInputDisabled">Clinica a la que pertenece</label>
                        {!!Form::select('noClinica', array('0'=>'Seleccionar', '1'=>'Clinica 1', '2'=>'Clinica 2', '3'=>'Clinica 3'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
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
                        <input type="text" class="form-control" placeholder="Localidad" name="localidad" id="localidad"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Código postal" name="cp" id="cp"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Calle" name="calle" id="calle"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" placeholder="Colonia" name="colonia" id="colonia"/>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group"></div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control" placeholder="Número interior" name="numExt" id="numExt"/>
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="text" class="form-control" placeholder="Número exterior" name="numInt" id="numInt"/>
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
