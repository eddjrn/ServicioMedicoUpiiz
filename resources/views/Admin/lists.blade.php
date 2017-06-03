@extends('Admin.layout2')

@section('title')
<title>Listas de alumnos</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Listas de todos los alumnos en el sistema
@stop

@section('content')
<section class="tabs-section">
    <div class="tabs-section-nav tabs-section-nav-icons">
        <div class="tbl">
            <ul class="nav" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-doc"></i>
                            Carrera
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <span class="font-icon font-icon-build"></span>
                            Estatus
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-contacts"></i>
                            Generación
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-contacts"></i>
                            Asegurado por
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--.tabs-section-nav-->

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">
        
            <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <!--{{$x=0}}-->
            @foreach($carrers as $carrer)
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            {{$carrer->nombre}}
                            [{{$carrer->students->count()}}]
                            <i class="font-icon font-icon-arrow-down"></i>
                        </a>
                    </div>
                    <div id="collapse{{$numbers[$x]}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$numbers[$x]}}">
                        <div class="panel-collapse-in">
                        
                            <section class="box-typical box-typical-max-280">
                                <header class="box-typical-header">
                                    <div class="tbl-row">
                                        <div class="tbl-cell tbl-cell-title">
                                            <h3>
                                                @foreach($status as $s)
                                                    {{$s->students->count()}}
                                                @endforeach
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach($carrer->students as $student)
                                                <tr>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Nombre</div>
                                                        <a href="/admin/lists/{{$student->id}}">{{$student->user}}</a>
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Correo electrónico</div>
                                                        {{$student->user->email}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Boleta</div>
                                                        {{$student->user->boleta}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$student->noSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
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
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--.box-typical-body-->
                            </section><!--.box-typical-->
                            
                        </div>
                    </div>
                </article>
                <!--{{$x++}}-->
            @endforeach
            </section>
            
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2"></div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">Tab 4</div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->


@stop

@section('scripts')
@stop