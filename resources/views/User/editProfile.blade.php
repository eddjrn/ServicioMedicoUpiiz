@extends('layout')

@section('title')
<title>Editar perfil</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Edición de los datos personales
@stop

@section('content')

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
                        <a href="#">
                            <img src="/Template/img/photo-64-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="tbl-cell">
                        <p class="user-card-row-name"><a href="#">{{$student->user}}</a></p>
                        <p class="user-card-row-location">{{$student->user->email}}</p>
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Nombre(s)</label>
                            {!!Form::text('nombre', $student->user->nombre, ['class'=>'form-control', 'placeholder'=>'Ej: Nombre Segundo Nombre', 'id'=>'nombre'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Apellido paterno</label>
                            {!!Form::text('apellidoPa', $student->user->apellidoPa, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido', 'id'=>'apellidoPa'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Apellido materno</label>
                            {!!Form::text('apellidoMa', $student->user->apellidoMa, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido', 'id'=>'apellidoMa'])!!}
                        </fieldset>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Correo electrónico</label>
                            {!!Form::text('email', $student->user->email, ['class'=>'form-control', 'placeholder'=>'Ej: mail@correo.com', 'id'=>'email'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Teléfono</label>
                            {!!Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxx-xxx-xx-xx', 'id'=>'telefono'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Sexo</label>
                            {!!Form::select('sexo', array('0'=>'Seleccionar', '1'=>'Masculino', '2'=>'Femenino'), $student->sexo, ['class'=>'bootstrap-select bootstrap-select-arrow'])!!}
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
                Datos escolares
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-collapse-in">
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Boleta</label>
                            {!!Form::text('boleta', $student->user->boleta, ['class'=>'form-control', 'placeholder'=>'Ej: 20XXXXXXXX', 'id'=>'boleta'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Carrera</label>
                            <!--{{$carrer=\App\carrer::lists('nombre', 'id')}} -->
                            
                            {!!Form::select('carrera', $carrer, $student->carrera_id, ['class'=>'select2'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Carrera</label>
                            <input type="text" class="form-control" id="exampleInputDisabled" placeholder="Nombre">
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
                Datos médicos
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-collapse-in">
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número de seguro</label>
                            {!!Form::text('noSeguro', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxx-xxx-xx-xx', 'id'=>'noSeguro'])!!}
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
                Datos geográficos
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-collapse-in">
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Calle</label>
                            {!!Form::text('calle', null, ['class'=>'form-control', 'placeholder'=>'Ej: Calle', 'id'=>'calle'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número exterior</label>
                            {!!Form::text('numExt', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxx', 'id'=>'numExt'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Número interior</label>
                            {!!Form::text('numInt', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxx', 'id'=>'numInt'])!!}
                        </fieldset>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Colonia</label>
                            {!!Form::text('colonia', null, ['class'=>'form-control', 'placeholder'=>'Ej: Colonia', 'id'=>'colonia'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Codigo postal</label>
                            {!!Form::text('cp', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxxxxx', 'id'=>'cp'])!!}
                        </fieldset>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Estado</label>
                            
                            <!--{{$estate=\App\state::lists('nombre', 'id')}} -->
                            
                            {!!Form::select('estado', $estate, $student->estado_id, ['class'=>'select2'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Municipio</label>
                            <!--{{$place=\App\place::lists('nombre', 'id')}} -->
                            
                            {!!Form::select('municipio', $place, $student->municipio_id, ['class'=>'select2'])!!}
                        </fieldset>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <fieldset class="form-group">
                            <label class="form-label" for="exampleInputDisabled">Localidad</label>
                            {!!Form::text('localidad', null, ['class'=>'form-control', 'placeholder'=>'Ej: Localidad', 'id'=>'localidad'])!!}
                        </fieldset>
                    </div>
                </div>
                
            </div>
        </div>
    </article>
    <!--<article class="panel">
        <div class="panel-heading" role="tab" id="headingFive">
            <a class="collapsed"
                data-toggle="collapse"
                data-parent="#accordion"
                href="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive">
                Collapsible Group Item #3
                <i class="font-icon font-icon-arrow-down"></i>
            </a>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-collapse-in">
                <div class="user-card-row">
                    <div class="tbl-row">
                        <div class="tbl-cell tbl-cell-photo">
                            <a href="#">
                                <img src="/Template/img/avatar-2-64.png" alt="">
                            </a>
                        </div>
                        <div class="tbl-cell">
                            <p class="user-card-row-name"><a href="#">Maurico Estrella</a></p>
                            <p class="user-card-row-location">Associate Creative Director @EF</p>
                        </div>
                    </div>
                </div>
                <header class="title">How a password changed my life</header>
                <p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
            </div>
        </div>
    </article>-->
</section><!--.widget-accordion-->

<input type="hidden" value="{{$student->user->id}}" id="studentId" name="studentId">
<div class="text-center">
    <button type="submit" class="btn btn-rounded btn-inline btn-warning">Guardar</button>
</div>
{!!Form::close()!!}
@stop

@section('scripts')
    <script src="/Template/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Template/js/lib/select2/select2.full.min.js"></script>
@stop 
