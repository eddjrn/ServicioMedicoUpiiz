@extends('layout')

<?php
  $classSize = "col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1";
  $classSizeForms = "col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2";

  $personales = '
    <div class="icon">
        <i class="font-icon font-icon-user"></i>
    </div>
    <div class="caption hidden-md-up">-1-</div>
    <div class="caption hidden-sm-down">Personales</div>
  ';

  $medicos = '
    <div class="icon">
        <i class="font-icon font-icon-heart"></i>
    </div>
    <div class="caption hidden-md-up">-2-</div>
    <div class="caption hidden-sm-down">Médicos</div>
  ';

  $geograficos = '
    <div class="icon">
        <i class="font-icon font-icon-pin-2"></i>
    </div>
    <div class="caption hidden-md-up">-3-</div>
    <div class="caption hidden-sm-down">Geográficos</div>
  ';

  $escolares = '
    <div class="icon">
        <i class="font-icon font-icon-pencil"></i>
    </div>
    <div class="caption hidden-md-up">-4-</div>
    <div class="caption hidden-sm-down">Escolares</div>
  ';
 ?>

@section('title')
<title>Llenado de campos obligatorios</title>
@stop

@section('css')
@stop

@section('popUp')

<div class="container-fluid">
  <div class="row">
    <div class="{{$classSize}}">
      @include('alerts.formError')
    </div>
  </div>

{!!Form::open(array('url'=>'/profile/newStudent', 'method'=>'post'))!!}
    <div class="row details1 text-center" style="display:block">
        <div class="{{$classSize}}">
            <section class="box-typical">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                        <li class="active">
                            {!!$personales!!}
                        </li>
                        <li>
                            {!!$medicos!!}
                        </li>
                        <li>
                            {!!$geograficos!!}
                        </li>
                        <li>
                            {!!$escolares!!}
                        </li>
                    </ul>
                </div>

                <h5 class="m-t-lg with-border">Llenado de información personal</h5>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
        							{!!Form::text('telefono', null, ['class'=>'form-control', 'id'=>'telefono'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
        							{!!Form::text('curp', null, ['class'=>'form-control', 'id'=>'curp'])!!}
                      <small class="text-muted"><a href="{{config('globalInfo.curp')}}" target="_blank">Consultar CURP</a></small>
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Sexo</label>
        							{!!Form::select('sexo', config('global.sexos'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Fecha de nacimiento</label>
                      <div class='input-group date'>
                          {!!Form::text('nacimiento', null, ['class'=>'form-control', 'id'=>'date_box', 'placeholder'=>'00/00/0000'])!!}
                          <span class="input-group-addon">
                              <i class="font-icon font-icon-calend"></i>
                          </span>
                      </div>
                  </div>
                </div>

                <h5 class="m-t-lg with-border">Datos del tutor</h5>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
        							{!!Form::text('tutor', null, ['class'=>'form-control', 'id'=>'tutor', 'placeholder'=>'Nombre del tutor a cargo'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Parentesco con el tutor</label>
                      {!!Form::select('parentesco', config('global.familiar'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('telefonoTutor', null, ['class'=>'form-control', 'id'=>'telefonoTutor'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('celularTutor', null, ['class'=>'form-control', 'id'=>'celularTutor'])!!}
        						</fieldset>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <button type="button" class="btn btn-rounded btn-inline" onclick="toggle1();">
                            Siguiente →
                        </button>
                    </div>
                </div>

            </section><!--.steps-icon-block-->
        </div>
    </div><!--.row-->

    <div class="row details2 text-center" style="display:none">
        <div class="{{$classSize}}">
            <section class="box-typical">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                      <li class="active">
                          {!!$personales!!}
                      </li>
                      <li class="active">
                          {!!$medicos!!}
                      </li>
                      <li>
                          {!!$geograficos!!}
                      </li>
                      <li>
                          {!!$escolares!!}
                      </li>
                    </ul>
                </div>

                <h5 class="m-t-lg with-border">Llenado de información médica</h5>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
        							{!!Form::text('numSeguro', null, ['class'=>'form-control', 'id'=>'numSeguro', 'placeholder'=>'Número de seguro médico'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Proveedor de seguro médico</label>
                      {!!Form::select('proveedorSeguro', config('global.proveedores'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Institución que lo asegura</label>
                      {!!Form::select('institucionClinica', $institution, 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control imss'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}} immsOnly">
                    <fieldset class="form-group">
                      <label class="form-label">Clinica a la que pertenece</label>
                      {!!Form::select('numClinica', $list, 0, ['class'=>'select2 form-control remove-opc'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Tipo de sangre</label>
                      {!!Form::select('sangre', config('global.tiposSangre'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
        						</fieldset>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn btn-rounded btn-grey btn-inline" onclick="toggle2();">← Atrás</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn btn-rounded btn-inline" onclick="toggle1();">
                            Siguiente →
                        </button>
                    </div>
                </div>

            </section><!--.steps-icon-block-->
        </div>
    </div><!--.row-->

    <div class="row details3 text-center" style="display:none">
        <div class="{{$classSize}}">
            <section class="box-typical">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                      <li class="active">
                          {!!$personales!!}
                      </li>
                      <li class="active">
                          {!!$medicos!!}
                      </li>
                      <li class="active">
                          {!!$geograficos!!}
                      </li>
                      <li>
                          {!!$escolares!!}
                      </li>
                    </ul>
                </div>

                <h5 class="m-t-lg with-border">Llenado de datos geográficos</h5>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Municipio donde vive actualmente</label>
                      {!!Form::select('municipio', $place, 0, ['class'=>'select2 form-control'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Estado de origen</label>
                      {!!Form::select('estado', $estate, 0, ['class'=>'select2 form-control'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('localidad', null, ['class'=>'form-control', 'id'=>'localidad', 'placeholder'=>'Localidad'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('cp', null, ['class'=>'form-control', 'id'=>'cp'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('calle', null, ['class'=>'form-control', 'id'=>'calle', 'placeholder'=>'Calle'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('colonia', null, ['class'=>'form-control', 'id'=>'colonia', 'placeholder'=>'Colonia'])!!}
        						</fieldset>
                  </div>
                </div>
                <hr/>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('numExt', null, ['class'=>'form-control', 'id'=>'numExt', 'placeholder'=>'Número interior'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      {!!Form::text('numInt', null, ['class'=>'form-control', 'id'=>'numInt', 'placeholder'=>'Número exterior'])!!}
        						</fieldset>
                  </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn btn-rounded btn-grey btn-inline" onclick="toggle2();">← Atrás</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn btn-rounded btn-inline" onclick="toggle1();">
                            Siguiente →
                        </button>
                    </div>
                </div>

            </section><!--.steps-icon-block-->
        </div>
    </div><!--.row-->

    <div class="row details4 text-center" style="display:none">
        <div class="{{$classSize}}">
            <section class="box-typical">
                <div class="steps-icon-progress" style="padding:30px">
                    <ul>
                      <li class="active">
                          {!!$personales!!}
                      </li>
                      <li class="active">
                          {!!$medicos!!}
                      </li>
                      <li class="active">
                          {!!$geograficos!!}
                      </li>
                      <li class="active">
                          {!!$escolares!!}
                      </li>
                    </ul>
                </div>

                <h5 class="m-t-lg with-border">Llenado de información académica</h5>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Programa académico</label>
                      {!!Form::select('carrera', $carrer, 0, ['class'=>'select2 form-control'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Turno</label>
                      {!!Form::select('turno', config('global.turnos'), 0, ['class'=>'bootstrap-select bootstrap-select-arrow form-control'])!!}
        						</fieldset>
                  </div>
                </div>

                <h5 class="m-t-lg with-border">Seguridad</h5>
                <div class="row">
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Escribe tu Pregunta de Seguridad</label>
                      {!!Form::text('pregunta', null, ['class'=>'form-control', 'id'=>'pregunta', 'placeholder'=>'Ej: Villano de Marvel Favorito'])!!}
        						</fieldset>
                  </div>
                  <div class="{{$classSizeForms}}">
                    <fieldset class="form-group">
                      <label class="form-label">Escribe tu Respuesta</label>
                      {!!Form::text('respuesta', null, ['class'=>'form-control', 'id'=>'respuesta', 'placeholder'=>'Ej: Carnage'])!!}
        						</fieldset>
                  </div>
                </div>
                <small class="text-muted">La pregunta y respuesta de seguridad permitirá en un futuro cambiar tu contraseña en caso de que la pierdas.</small>
                </br>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="button" class="btn btn-rounded btn-grey btn-inline" onclick="toggle2();">← Atrás</button>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-rounded btn-inline btn-warning">
                            Finalizar
                        </button>
                    </div>
                </div>

            </section><!--.steps-icon-block-->
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
    <script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/completeProfileToggle.js')}}"></script>

    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/clockpicker/bootstrap-clockpicker-init.js')}}"></script>
    <script src="{{asset('/Template/js/lib/daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('/Template/js/lib/input-mask/jquery.mask.min.js')}}"></script>

    <script>
    $(document).ready(function() {
        $('#telefono').mask('(000) 000-0000', {placeholder: "Teléfono personal"});
        $('#curp').mask('AAAA000000AAAAAA00', {placeholder: "CURP"});
        $('#telefonoTutor').mask('(000) 000-0000', {placeholder: "Teléfono fijo del tutor"});
        $('#celularTutor').mask('(000) 000-0000', {placeholder: "Teléfono celular del tutor"});

        $('#cp').mask('00000', {placeholder: "Código postal"});

        $('.remove-opc').find('[value=1]').remove();
        $('.imss').change(function(){
          var opc = $('.imss option:selected').text();
          if(opc == "IMSS"){
            $('.immsOnly').show(150);
          } else{
            $('.immsOnly').hide(150);
          }
        });
    });
    </script>

@stop
