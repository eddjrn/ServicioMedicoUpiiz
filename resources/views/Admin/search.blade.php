@extends('Admin.layout2')

@section('title')
<title>Busqueda de registro</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Busqueda de registro
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-2">
            <div class="form-group input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button" id="info">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Buscar
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" onclick="identification(1);">Datos de usuarios</a>
                        <a class="dropdown-item" onclick="identification(6);">Datos de alumnos (CURPs o fechas)</a>
                        <a class="dropdown-item" onclick="identification(5);">Números medicos</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="identification(2);">Boleta especifica</a>
                        <a class="dropdown-item" onclick="identification(3);">Número de seguro especifico</a>
                        <a class="dropdown-item" onclick="identification(4);">E-mail especifico</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!!Form::open(array('url'=>'/admin/search', 'method'=>'post', 'id'=>'forms'))!!}
    <input type="hidden" id="opc" name="opc">
    <input type="hidden" id="busqueda" name="busqueda">
{!!Form::close()!!}

@if(isset($user))
    <div class="container">
        <div class="row">
            <section class="widget widget-activity">
                <header class="widget-header">
                    Resultados
                    <span class="label label-pill label-primary">{{count($user)}}</span>
                </header>
                <div>
                @foreach($user as $u)
                    @unless($u->completado() == 0)
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a href="{{asset('/admin/lists')}}/{{$u->student->id}}">
                                        <img src="{{$u->foto}}" alt="">
                                    </a>
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        <a href="{{asset('/admin/lists')}}/{{$u->student->id}}" class="semibold">{{$u}}</a>
                                    </p>
                                    @unless($u->facebook == null)
                                    <p>
                                        <a href="{{$u->facebook}}" class="semibold" target="_blank">Facebook</a>
                                    </p>
                                    @endunless
                                    <p>
                                        Correo: {{$u->email}}
                                    </p>
                                    <p>
                                        Boleta: {{$u->identificacion}}
                                    </p>
                                    <p>
                                        Carrera: {{$u->student->carrer->nombre}}
                                    </p>
                                    <p class="@if($u->student->estatus_id == 1)
                                        color-blue
                                    @elseif($u->student->estatus_id == 2)
                                        color-red
                                    @elseif($u->student->estatus_id == 3)
                                        color-purple
                                    @elseif($u->student->estatus_id == 4)
                                        color-orange
                                    @elseif($u->student->estatus_id == 5)
                                        color-green
                                    @endif">
                                        Estatus: {{$u->student->status->nombre}}
                                    </p>
                                    <p>
                                        Número de seguro: {{$u->medicalData->numSeguro}}
                                    </p>
                                    <p class="@if($u->student->documentacion == 1)
                                        color-blue
                                    @elseif($u->student->documentacion == 2)
                                        color-red
                                    @endif">
                                        Documentación: {{$u->student->documentacion()}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <img src="{{$u->foto}}" alt="">
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        {{$u}}
                                    </p>
                                    <p class="color-red">
                                        {{$u->completado}}
                                    </p>
                                    @unless($u->facebook == null)
                                    <p>
                                        <a href="{{$u->facebook}}" class="semibold" target="_blank">Facebook</a>
                                    </p>
                                    @endunless
                                    <p>
                                        Correo: {{$u->email}}
                                    </p>
                                    <p>
                                        Boleta: {{$u->identificacion}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endunless
                @endforeach
                </div>
            </section><!--.widget-tasks-->
        </div>
    </div>
@endif

@if(isset($medicalData))
    <div class="container">
        <div class="row">
            <section class="widget widget-activity">
                <header class="widget-header">
                    Resultados
                    <span class="label label-pill label-primary">{{count($medicalData)}}</span>
                </header>
                <div>
                @foreach($medicalData as $m)
                    @unless($m->user->completado() == 0)
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a href="#">
                                        <img src="{{asset('/Template/img/2-64.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        <a href="{{asset('/admin/lists')}}/{{$m->user->student->id}}" class="semibold">{{$m->user}}</a>
                                    </p>
                                    @unless($u->facebook == null)
                                    <p>
                                        <a href="{{$m->user->facebook}}" class="semibold" target="_blank">Facebook</a>
                                    </p>
                                    @endunless
                                    <p>
                                        Número de seguro: {{$m->numSeguro}}
                                    </p>
                                    <p>
                                        Proveedor de seguro: {{$m->proveedorSeguro}}
                                    </p>
                                    <p>
                                        Boleta: {{$m->user->identificacion}}
                                    </p>
                                    <p>
                                        Carrera: {{$m->user->student->carrer->nombre}}
                                    </p>
                                    <p class="color-green">
                                        CURP: {{$m->user->student->curp}}
                                    </p>
                                    <p class="@if($m->user->student->documentacion == 1)
                                        color-blue
                                    @elseif($m->user->student->documentacion == 2)
                                        color-red
                                    @endif">
                                        Documentación: {{$m->user->student->documentacion()}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <img src="{{$u->foto}}" alt="">
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        {{$u}}
                                    </p>
                                    <p class="color-red">
                                        {{$u->completado}}
                                    </p>
                                    @unless($u->facebook == null)
                                    <p>
                                        <a href="{{$u->facebook}}" class="semibold" target="_blank">Facebook</a>
                                    </p>
                                    @endunless
                                    <p>
                                        Correo: {{$u->email}}
                                    </p>
                                    <p>
                                        Boleta: {{$u->identificacion}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endunless
                @endforeach
                </div>
            </section><!--.widget-tasks-->
        </div>
    </div>
@endif

@if(isset($student))
    <div class="container">
        <div class="row">
            <section class="widget widget-activity">
                <header class="widget-header">
                    Resultados
                    <span class="label label-pill label-primary">{{count($student)}}</span>
                </header>
                <div>
                @foreach($student as $s)
                    @unless($s->user->completado() == 0)
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a href="#">
                                        <img src="{{asset('/Template/img/2-64.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        <a href="{{asset('/admin/lists')}}/{{$s->id}}" class="semibold">{{$s->user}}</a>
                                    </p>
                                    <p>
                                        <a href="{{$s->user->facebook}}" class="semibold" target="_blank">Facebook</a>
                                    </p>
                                    <p>
                                        Número de seguro: {{$s->user->medicalData->numSeguro}}
                                    </p>
                                    <p>
                                        Fecha de nacimiento: {{$s->formatedNacimiento()}}
                                    </p>
                                    <p>
                                        Tutor: {{$s->tutor}}
                                    </p>
                                    <p>
                                        Boleta: {{$s->user->identificacion}}
                                    </p>
                                    <p>
                                        Carrera: {{$s->carrer->nombre}}
                                    </p>
                                    <p class="color-green">
                                        CURP: {{$s->curp}}
                                    </p>
                                    <p class="@if($s->documentacion == 1)
                                        color-blue
                                    @elseif($s->documentacion == 2)
                                        color-red
                                    @endif">
                                        Documentación: {{$s->documentacion()}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <img src="{{$u->foto}}" alt="">
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        {{$u}}
                                    </p>
                                    <p class="color-red">
                                        {{$u->completado}}
                                    </p>
                                    @unless($u->facebook == null)
                                    <p>
                                        <a href="{{$u->facebook}}" class="semibold" target="_blank">Facebook</a>
                                    </p>
                                    @endunless
                                    <p>
                                        Correo: {{$u->email}}
                                    </p>
                                    <p>
                                        Boleta: {{$u->identificacion}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endunless
                @endforeach
                </div>
            </section><!--.widget-tasks-->
        </div>
    </div>
@endif

@stop

@section('scripts')
    <script src="{{asset('/Template/js/custom/search.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@stop
