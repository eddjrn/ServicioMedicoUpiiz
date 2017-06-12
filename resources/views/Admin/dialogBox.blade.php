@extends('Admin.layout2')

@section('title')
<title>Inicio servicio medico</title>
@stop

@section('css')
@stop

@section('popUp')

<div class="modal fade bd-example-modal-sm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="windowTitle">Agregar nueva carrera</h4>
            </div>
            {!!Form::open(array('method'=>'patch'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Nombre</label>
                    {!!Form::text('nombre', null, array('class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Ej: Ingeniería en Sistemas Computacionales'))!!}
                    <input type="hidden" name="idVal" id="idVal" value="">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-warning" formaction="/" id="formButton">Guardar</button>
                </div>
            </div>
            {!!Form::close()!!}
            
            <div class="modal-footer">
                <div class="text-center">
                    <a onclick="toggle();" id="more">Mostrar más</a>
                </div>
            </div>
            
            {!!Form::open(array('method'=>'delete', 'style'=>'display:none', 'class'=>'details'))!!}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="hide-show-password">¿Seguro que quiere eliminar el registro?</label>
                    </div>
                </div>
            
                <input type="hidden" name="idVal2" id="idVal2" value="">
                <div class="modal-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-rounded btn-primary btn-danger" formaction="/" id="formButton2">Eliminar</button>
                    </div>
                    <br/>
                    <div class="text-center">
                        <button type="button" class="btn btn-rounded btn-primary" onclick="toggle();">Cancelar</button>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

<div class="page-content">
<div class="container-fluid">

<div class="row">
    <div class="col-lg-4 col-md-6"></div>
    <div class="col-lg-4 col-md-6">
        <section class="widget widget-time">
            <header class="widget-header-dark with-btn">
                Editar @if($variable == 1)
                            carrera
                        @elseif($variable == 2)
                            estado
                        @endif
                <a href="/admin/config"><button type="button" class="widget-header-btn">
                    <i class="font-icon font-icon-del"></i>
                </button></a>
            </header>
            <div class="widget-time-content">
            
            @include('alerts.formError')
            
                {!!Form::open(array('method'=>'post'))!!}
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputDisabled2">Nombre de
                                @if($variable == 1)
                                    la carrera
                                @elseif($variable == 2)
                                    el estado
                                @endif
                            </label>
                            <input name="nombre" type="text" class="form-control" 
placeholder="
@if($variable == 1)
Ej: Ingeniería en Sistemas Computacionales
@elseif($variable == 2)
Ej: Zacatecas
@endif" value="">
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-warning" formaction="/admin/config/insert/{{$variable}}">Agregar</button>
                </div>
                {!!Form::close()!!}
                
                <h5 class="m-t-lg with-border">
                    @if($variable == 1)
                        Carreras registradas
                    @elseif($variable == 2)
                        Estados registrados
                    @endif
                en el sistema</h5>
                
                <div class="pre-scrollable">
                    <table class="table table-hover">
                        <tbody>
                            
                            @if($variable == 1)
                                @foreach(\App\carrer::all() as $carrer)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                        {{$carrer->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                        {{$carrer->students->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs('Editar carrera', '{{$carrer->nombre}}', 1, {{$carrer->id}});">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @elseif($variable == 2)
                                @foreach(\App\state::all() as $state)
                                <tr>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                        {{$state->nombre}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                        {{$state->students->count()}}
                                    </td>
                                    <td class="table-check">
                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                        <button type="button"
                                                    class="btn btn-inline btn-sm btn-primary"
                                                    data-toggle="modal"
                                                    data-target=".bd-example-modal-sm" onclick="updateInputs('Editar estado', '{{$state->nombre}}', 2, {{$state->id}});">
                                                    <span class="font-icon font-icon-pencil"></span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            
                        </tbody>
                    </table>
                </div>
                
            </div>
        </section><!--.widget-time-->
    </div>
    <div class="col-lg-4 col-md-6"></div>
</div>

</div>
</div>

@stop

@section('subHead')
@stop

@section('content')
Hola
@stop

@section('scripts')
    <script src="/Template/js/custom/configEdit.js"></script>
@stop
