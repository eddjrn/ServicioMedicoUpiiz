@extends('layout')

@section('title')
<title>Editar perfil</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> <!--cabecera para que se puedan enviar peticiones POST desde javascript-->
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/Template/css/lib/bootstrap-sweetalert/sweetalert.css')}}"/>
<link  href="{{asset('/Template/css/lib/cropper/cropper.css')}}" rel="stylesheet">
<style>
  img {
    max-width: 100%;
  }
</style>
@stop

@section('popUp')
<div class="modal fade"
        id="myModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">¿Cómo pongo el link de Facebook?</h4>
            </div>
            <div class="modal-body text-center">
                <img src="{{asset('/Template/img/Facebookprocess.gif')}}" class="img-size round">
            </div>
        </div>
    </div>
</div><!--.modal-->

<div class="modal fade"
        id="photoModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="photoModalLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Cambiar foto de perfil</h4>
            </div>
            <div class="modal-body text-center">
                <div class="widget-user-photo">
					<img src="{{Auth::user()->foto}}" alt="" class="img-size round">
				</div>
            </div>
            <div class="modal-footer text-center">
            	<div class="row">
            		<div class="col-lg-6 col-md-6 col-sm-6">
						<button type="submit" class="btn btn-rounded btn-inline btn-warning" onclick="changeModal();">Cambiar foto</button>
					</div>
                    {!!Form::open(array('method'=>'post'))!!}
                	<input type="hidden" value="{{$student->user->id}}" name="user">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<button type="submit" class="btn btn-rounded btn-inline btn-danger" formaction="{{asset('/profile/photoDel')}}">Eliminar foto</button>
					</div>
                    {!!Form::close()!!}
				</div>
			</div>
        </div>
    </div>
</div><!--.modal-->

<div class="modal fade"
      id="photoModalEdit"
      tabindex="-1"
      role="dialog"
      aria-labelledby="photoModalEditLabel"
      aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                  <i class="font-icon-close-2"></i>
              </button>
              <h4 class="modal-title" id="myModalLabel">Nueva foto de perfil</h4>
          </div>
          <div class="modal-body text-center">
              <div class="widget-user-photo">
              <img id="image" src="{{asset('/Template/img/pic.jpg')}}" alt="Picture" class="img-size">
             </div>
          </div>
          <div class="modal-footer text-center">
             <input type="hidden" value="{{$student->user->id}}" name="user">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6">
                   <button id="reset" class="btn btn-rounded btn-inline btn-primary"><span class="fa fa-refresh"></span></button>
                   <button id="rotateRight" class="btn btn-rounded btn-inline btn-primary"><span class="fa fa-rotate-right"></span></button>
                   <button id="rotateLeft" class="btn btn-rounded btn-inline btn-primary"><span class="fa fa-rotate-left"></span></button>

                   <label class="btn btn-rounded btn-inline btn-primary btn-upload" for="inputImage" title="Upload image file">
                     <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif">
                     <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                       <span class="fa fa-upload"></span>
                     </span>
                   </label>
                 </div>
               <div class="col-lg-6 col-md-6 col-sm-6">
                   <button id="crop" class="btn btn-rounded btn-inline btn-success">Guardar <span class="fa fa-crop"></span></button>
               </div>
             </div>
             <small class="text-muted">Utilice los controles para ajustar la imagen, haga doble click sobre la imagen para arrastarla.</small>
          </div>
      </div>
  </div>
</div><!--.modal-->
@stop

@section('subHead')
Edición de los datos personales
@stop

@section('content')
<?php
	$classSize = "col-lg-4 col-md-4 col-sm-6";
?>

{!!Form::model($student, array('url'=>'/profile/edit', 'method'=>'post'))!!}
<section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
    <article class="panel">
        <div class="panel-heading" role="tab" id="headingOne">
            <a data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne">
                Datos personales
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-collapse-in">

            <div class="user-card-row">
                <div class="tbl-row">
                    <div class="tbl-cell tbl-cell-photo">
                        <a data-toggle="modal" data-target="#photoModal">
                            <img src="{{Auth::user()->foto}}" alt="">
                        </a>
                    </div>
                    <div class="tbl-cell">
                        <p class="user-card-row-name"><a data-toggle="modal" data-target="#photoModal">{{$student->user}}</a></p>
                        <p class="user-card-row-location">{{$student->user->email}}</p>
                        <small class="text-muted">Para cambiar foto de perfil haga click sobre la imagen.</small>
                    </div>
                </div>
            </div>

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Nombre(s)</label>
                            {!!Form::text('nombre', $student->user->nombre, ['class'=>'form-control', 'placeholder'=>'Ej: Nombre Segundo Nombre', 'id'=>'nombre'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Apellido paterno</label>
                            {!!Form::text('apellidoPaterno', $student->user->apellidoPaterno, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido paterno', 'id'=>'apellidoPaterno'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Apellido materno</label>
                            {!!Form::text('apellidoMaterno', $student->user->apellidoMaterno, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido materno', 'id'=>'apellidoMaterno'])!!}
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Correo electrónico</label>
                            {!!Form::text('email', $student->user->email, ['class'=>'form-control', 'placeholder'=>'Ej: mail@correo.com', 'id'=>'email'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Teléfono</label>
                            {!!Form::text('telefono', $student->telefono, ['class'=>'form-control', 'id'=>'telefono'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Sexo</label>
                            {!!Form::select('sexo', config('global.sexos'), $student->sexo(), ['class'=>'bootstrap-select bootstrap-select-arrow remove-example'])!!}
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">CURP</label>
                            {!!Form::text('curp', null, ['class'=>'form-control', 'id'=>'curp'])!!}
                        </fieldset>
                        <div class="form-group">
                            <a href="{{config('globalInfo.curp')}}" target="_blank">Consultar CURP</a>
                        </div>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Fecha de nacimeinto</label>
                            <div class='input-group date'>
                                <input id="date_box" type="text" value="{{$student->fechaNacimiento}}" class="form-control" name="nacimiento">
                                <span class="input-group-addon">
                                    <i class="font-icon font-icon-calend"></i>
                                </span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Facebook</label>
                            <div class="input-group">
                                {!!Form::text('facebook', $student->user->facebook, ['class'=>'form-control', 'placeholder'=>'Link de Facebook', 'id'=>'facebook'])!!}
                                <div class="input-group-addon">
                                    <a data-toggle="modal" data-target="#myModal"><span class="font-icon font-icon-eye"></span></a>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

            </div>
        </div>
    </article>
    <article class="panel">
        <div class="panel-heading" role="tab" id="headingTwo">
            <a class="collapsed"
                data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo">
                Datos del tutor
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-collapse-in">

            <div class="row">
                <div class="{{$classSize}}">
                    <fieldset class="form-group">
                        <label class="form-label" for="exampleInputDisabled">Nombre del tutor a cargo</label>
                        {!!Form::text('tutor', null, ['class'=>'form-control', 'placeholder'=>'Ej: Tutor', 'id'=>'tutor'])!!}
                    </fieldset>
                </div>
                <div class="{{$classSize}}">
                    <fieldset class="form-group">
                        <label class="form-label" for="exampleInputDisabled">Teléfono del tutor</label>
                        {!!Form::text('telefonoTutor', null, ['class'=>'form-control', 'id'=>'telefonoTutor'])!!}
                    </fieldset>
                </div>
                <div class="{{$classSize}}">
                    <fieldset class="form-group">
                        <label class="form-label" for="exampleInputDisabled">Teléfono celular del tutor</label>
                        {!!Form::text('celularTutor', null, ['class'=>'form-control', 'id'=>'celularTutor'])!!}
                    </fieldset>
                </div>
            </div>

            <div class="row">
                <div class="{{$classSize}}">
                    <fieldset class="form-group">
                        <label class="form-label" for="exampleInputDisabled">Parentesco con el tutor</label>
                        {!!Form::select('parentesco', config('global.familiar'), $student->parentescoTutor(), ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example'])!!}
                    </fieldset>
                </div>
            </div>

            </div>
        </div>
    </article>
    <article class="panel">
        <div class="panel-heading" role="tab" id="headingThree">
            <a class="collapsed"
                data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree">
                Datos escolares
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-collapse-in">

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Boleta</label>
                            {!!Form::text('identificacion', $student->user->identificacion, ['class'=>'form-control', 'placeholder'=>'Ej: 20XXXXXXXX', 'id'=>'identificacion'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Carrera</label>
                            {!!Form::select('carrera', $carrer, $student->carrera_id, ['class'=>'select2'])!!}
                        </div>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Turno</label>
                            {!!Form::select('turno', config('global.turnos'), $student->turno(), ['class'=>'bootstrap-select bootstrap-select-arrow remove-example'])!!}
                        </fieldset>
                    </div>
                </div>

            </div>
        </div>
    </article>
    <article class="panel">
        <div class="panel-heading" role="tab" id="headingFour">
            <a class="collapsed"
                data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour">
                Datos médicos
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-collapse-in">

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número de seguro</label>
                            {!!Form::text('numSeguro', $student->user->medicalData->numSeguro, ['class'=>'form-control', 'placeholder'=>'Ej: xxx-xxx-xx-xx', 'id'=>'numSeguro'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Proveedor de seguro</label>
                            {!!Form::select('proveedorSeguro', config('global.proveedores'),  $student->user->medicalData->proveedorSeguro(), ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Institución que lo asegura</label>
                            {!!Form::select('institucionClinica', $institution, $student->user->medicalData->institucionSeguro_id, ['class'=>'bootstrap-select bootstrap-select-arrow form-control imss'])!!}
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Tipo de sangre</label>
                            {!!Form::select('sangre', config('global.tiposSangre'), $student->user->medicalData->tipoSangre(), ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}} immsOnly" @if($student->user->medicalData->clinica_id == null) style="display:none;" @endif>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número de clínica</label>
                            {!!Form::select('numClinica', $list, $student->user->medicalData->clinica_id, ['class'=>'select2 form-control remove-example remove-opc'])!!}
                        </div>
                    </div>
                </div>

                <h5 class="m-t-lg with-border">Historial médico</h5>
                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Alergias</label>
                            {!!Form::text('alergias', $student->user->medicalRecord->alergias, ['class'=>'form-control', 'placeholder'=>'Ej: Asma,Polen,..', 'id'=>'alergias'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Cirugías</label>
                            {!!Form::text('cirugias', $student->user->medicalRecord->cirugias, ['class'=>'form-control', 'placeholder'=>'Ej: Garganta,Corazón,..', 'id'=>'cirugias'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Fracturas</label>
                            {!!Form::text('fracturas', $student->user->medicalRecord->fracturas, ['class'=>'form-control', 'placeholder'=>'Ej: Hombro,Brazo,..', 'id'=>'fracturas'])!!}
                        </fieldset>
                    </div>
                </div>

                <h5 class="m-t-lg with-border">Otra información</h5>
                <div class="row">
                    <div class="{{$classSize}}">
                        <div class="checkbox-toggle">
                            <input type="checkbox" id="fumar" name="fumar" value="true" onclick="fumarToggle();" @if($student->user->medicalRecord->fumar()==1) checked @endif/>
                            <label for="fumar">¿Fuma?</label>
                        </div>
                        <div id="fumarForms" @if($student->user->medicalRecord->fumar()==0) style="display:none;" @endif>
                            <div class="form-group">
                                <label class="form-label">¿Cuántas veces por mes?</label>
                                <input class="numForm" id="numFumar" type="text" value="{{$student->user->medicalRecord->numFumar()}}" name="numFumar">
                            </div>
                            <div class="form-group">
                                <label class="form-label">¿Desde los cuantos años?</label>
                                <input class="numForm" id="edadFumar" type="text" value="{{$student->user->medicalRecord->edadFumar()}}" name="edadFumar">
                            </div>
                        </div>
                    </div>
                    <div class="{{$classSize}}">
                        <div class="checkbox-toggle">
                            <input type="checkbox" id="alcohol" name="alcohol" value="true" onclick="alcoholToggle();" @if($student->user->medicalRecord->alcohol()==1) checked @endif/>
                            <label for="alcohol">¿Toma alcohol?</label>
                        </div>
                        <div id="alcoholForms" @if($student->user->medicalRecord->alcohol()==0) style="display:none;" @endif>
                            <div class="form-group">
                                <label class="form-label">¿Cuántas veces por mes?</label>
                                <input class="numForm" id="numAlcohol" type="text" value="{{$student->user->medicalRecord->numAlcohol()}}" name="numAlcohol">
                            </div>
                        </div>
                    </div>
                    <div class="{{$classSize}}">
                        <div class="checkbox-toggle">
                            <input type="checkbox" id="transfusiones" name="transfusiones" value="true" onclick="transfusionesToggle();" @if($student->user->medicalRecord->transfusiones()==1) checked @endif/>
                            <label for="transfusiones">¿Se ha realizado transfusiones?</label>
                        </div>
                        <div id="transfusionesForms" @if($student->user->medicalRecord->transfusiones()==0) style="display:none;" @endif>
                            <div class="form-group">
                                <label class="form-label">¿Desde los cuantos años?</label>
                                <input class="numForm" id="edadTransfusiones" type="text" value="{{$student->user->medicalRecord->edadTransfusiones()}}" name="edadTransfusiones">
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="m-t-lg with-border">Antecedentes de enfermedades en la familia</h5>
                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Presión alta</label>
                            {!!Form::select('presion[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->presionAlta, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Diabetes</label>
                            {!!Form::select('diabetes[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->diabetes, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Asma</label>
                            {!!Form::select('asma[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->asma, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Artritis</label>
                            {!!Form::select('artritis[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->artritis, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Cáncer</label>
                            {!!Form::select('cancer[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->cancer, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Epilepsias</label>
                            {!!Form::select('epilepsias[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->epilepsias, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Enfermedades del corazón</label>
                            {!!Form::select('enfCorazon[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfCorazon, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Sobrepeso</label>
                            {!!Form::select('sobrePeso[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->sobrePeso, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Enfermedades de la tiroides</label>
                            {!!Form::select('enfTiroides[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->enfTiroides, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Bipolaridad</label>
                            {!!Form::select('bipolaridad[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->bipolaridad, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Esquizofrenia</label>
                            {!!Form::select('esquizofrenia[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->esquizofrenia, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Depresión</label>
                            {!!Form::select('depresion[]', config('global.nombresAntecedentes'), $student->user->medicalRecord->depresion, ['class'=>'select2 remove-example', 'multiple'])!!}
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="panel">
        <div class="panel-heading" role="tab" id="headingFive">
            <a class="collapsed"
                data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive">
                Datos geográficos
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-collapse-in">

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Calle</label>
                            {!!Form::text('calle', null, ['class'=>'form-control', 'placeholder'=>'Ej: Calle', 'id'=>'calle'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número exterior</label>
                            {!!Form::text('numExterior', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxx', 'id'=>'numExt'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número interior</label>
                            {!!Form::text('numInterior', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxx', 'id'=>'numInt'])!!}
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Colonia</label>
                            {!!Form::text('colonia', null, ['class'=>'form-control', 'placeholder'=>'Ej: Colonia', 'id'=>'colonia'])!!}
                        </fieldset>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Codigo postal</label>
                            {!!Form::text('codigoPostal', null, ['class'=>'form-control', 'id'=>'cp'])!!}
                        </fieldset>
                    </div>
                </div>

                <div class="row">
                    <div class="{{$classSize}}">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Estado de procedencia</label>
                            {!!Form::select('estado', $estate, $student->estado_id, ['class'=>'select2'])!!}
                        </div>
                    </div>
                    <div class="{{$classSize}}">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Municipio donde reside</label>
                            {!!Form::select('municipio', $place, $student->municipio_id, ['class'=>'select2'])!!}
                        </div>
                    </div>
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Localidad</label>
                            {!!Form::text('localidad', null, ['class'=>'form-control', 'placeholder'=>'Ej: Localidad', 'id'=>'localidad'])!!}
                        </fieldset>
                    </div>
                </div>

            </div>
        </div>
    </article>
    <article class="panel">
        <div class="panel-heading" role="tab" id="headingSix">
            <a class="collapsed"
                data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseSix"
                aria-expanded="false"
                aria-controls="collapseSix">
                Seguridad
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="panel-collapse-in">
                <div class="row">
                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Pregunta</label>
                            {!!Form::text('pregunta', null, ['class'=>'form-control', 'placeholder'=>'Ej: Villano de Marvel Favorito', 'id'=>'pregunta'])!!}
                        </fieldset>
                    </div>

                    <div class="{{$classSize}}">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Respuesta</label>
                            {!!Form::text('respuesta', null, ['class'=>'form-control', 'placeholder'=>'Ej: Carnage', 'id'=>'respuesta'])!!}
                        </fieldset>
                    </div>
                </div>
                <small class="text-muted">Cambiar Pregunta y Respuesta de Seguridad</small>
            </div>
        </div>
    </article>
</section><!--.widget-accordion-->

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

    <script src="{{asset('/Template/js/lib/input-mask/jquery.mask.min.js')}}"></script>

    <script src="{{asset('/Template/js/lib/bootstrap-sweetalert/sweetalert.min.js')}}"></script>

    <script>
        var UrlToPostForm = "{{asset('/profile/photoUp')}}";
        var UrlToRedirectPage = "{{asset('/profile')}}";
    </script>

    <script src="{{asset('/Template/js/lib/cropper/cropper.js')}}"></script>
    <script src="{{asset('/Template/js/custom/shared.js')}}"></script>

    <script>
        $(document).ready(function(){
    	     checkPosition();

           $('#telefono').mask('(000) 000-0000', {placeholder: "Ej: (000) 000-0000"});
           $('#curp').mask('AAAA000000AAAAAA00', {placeholder: "Ej: AAAA000000AAAAAA00"});
           $('#telefonoTutor').mask('(000) 000-0000', {placeholder: "Ej: (000) 000-0000"});
           $('#celularTutor').mask('(000) 000-0000', {placeholder: "Ej:(000) 000-0000"});

           $('#cp').mask('00000', {placeholder: "Ej: 00000"});

            $(".numForm").TouchSpin({
                initval:2,
                min:1,
            });
            $('.remove-example').find('[value=0]').remove();
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

        function fumarToggle(){
            $('#fumarForms').slideToggle('show');
        }
        function alcoholToggle(){
            $('#alcoholForms').slideToggle('show');
        }
        function transfusionesToggle(){
            $('#transfusionesForms').slideToggle('show');
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function changeModal(){
            //alert('x');
            $('#photoModal').modal('hide');
            $('#photoModalEdit').modal('show');
        }
    </script>

@stop
