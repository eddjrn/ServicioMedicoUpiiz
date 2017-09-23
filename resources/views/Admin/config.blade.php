@extends('Admin.layout2')

@section('title')
<title>Configuración del servicio medico</title>
@stop

@section('css')
    <link href="{{asset('/Template/css/lib/charts-c3js/c3.min.css')}}" rel="stylesheet" type="text/css">
@stop

@section('popUp')

{!!Form::open(array('method'=>'post', 'id'=>'specialForm'))!!}
<div id="specialPopUp">
    
</div>
{!!Form::close()!!}

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
                <h4 class="modal-title" id="windowTitle">¿Desea editar?</h4>
            </div>
            {!!Form::open(array('method'=>'post', 'id'=>'passForm'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="clave" id="clave">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-danger" formaction="" id="formButton">Editar datos</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->

<div class="box-typical">
    <header class="widgets-header">
        <div class="container-fluid">
            <div class="tbl tbl-outer">
                <div class="tbl-row">
                
                    <div class="tbl-cell">
                        <div class="tbl tbl-item">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <div class="title">Alumnos con documentos completos: {{$students->where('documentacion', 1)->count()}}</div>
                                    <div class="amount-sm">Alumnos con documentos incompletos: {{$students->where('documentacion', 2)->count()}}</div>
                                </div>
                                <div class="tbl-cell tbl-cell-progress">
                                    <div class="circle-progress-bar-typical size-56 pieProgress"
                                            role="progressbar" data-goal="{{$students->where('documentacion', 1)->count()}}"
                                            data-barcolor="#24B500"
                                            data-barsize="10"
                                            aria-valuemin="0"
                                            aria-valuemax="{{$students->count()}}">
                                        <span class="pie_progress__number">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!--tbl tbl-item-->
                    </div> <!--tbl-cell-->
                    
                    <div class="tbl-cell">
                        <div class="tbl tbl-item">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <div class="title">Alumnos asegurados por UPIIZ-IPN: {{$medicalDatas->where('proveedorSeguro', 'UPIIZ-IPN')->count()}}</div>
                                    <div class="amount-sm">Alumnos asegurados por padres: {{$medicalDatas->where('proveedorSeguro', 'Padres')->count()}}</div>
                                    <div class="amount-sm">Alumnos asegurados por trabajo: {{$medicalDatas->where('proveedorSeguro', 'Trabajo')->count()}}</div>
                                </div>
                                <div class="tbl-cell tbl-cell-progress">
                                    <div class="circle-progress-bar-typical size-56 pieProgress"
                                            role="progressbar" data-goal="{{$medicalDatas->where('proveedorSeguro', 'UPIIZ-IPN')->count()}}"
                                            data-barcolor="#AA3167"
                                            data-barsize="10"
                                            aria-valuemin="0"
                                            aria-valuemax="{{$medicalDatas->count()}}">
                                        <span class="pie_progress__number">0%</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!--tbl tbl-item-->
                    </div> <!--tbl-cell-->
                    
                </div> <!--tbl-row-->
            </div> <!--tbl tbl-outer-->
        </div> <!--container fluid-->
    </header>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-offset-0 col-lg-2 col-md-3 col-sm-3 col-xs-6">
            <section class="widget widget-simple-sm-fill grey">
                <div class="widget-simple-sm-icon">
                    {{$students->count()}}
                </div>
                <div class="widget-simple-sm-fill-caption">Alumnos</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
        
        @foreach($status as $s)
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
            <section class="widget widget-simple-sm-fill 
            @if($s->id == 1)
                blue
            @elseif($s->id == 2)
                red
            @elseif($s->id == 3)
                purple
            @elseif($s->id == 4)
                orange
            @elseif($s->id == 5)
                green
            @endif">
                <div class="widget-simple-sm-icon">
                    {{$s->students->count()}}
                </div>
                <div class="widget-simple-sm-fill-caption">{{$s->nombre}}</div>
            </section><!--.widget-simple-sm-fill-->
        </div>
        @endforeach
    </div>
</div>

<div class="container-fluid">
    
@include('alerts.formError')
@include('alerts.sessionAlert')
    
<div class="row">

    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Carreras registradas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar carreras', 1);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                    <div id="pie-chart1"></div> 
                </div>
                <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($carrer as $c)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                            {{$c->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$c->students->count()}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Color</div>
                                            <button type="button" class="btn btn-inline btn-lg" style="background-color: {{$c->color}}; border-color: #D0D0D0;"></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Estados registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar estados', 2);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-2-tab-1" role="tabpanel">
                    <div id="pie-chart2"></div> 
                </div>
                <div class="tab-pane" id="w-2-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($state as $s)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Estado</div>
                                            {{$s->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$s->students->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-2-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Instituciones médicas registradas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar instituciones médicas', 3);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-3-tab-1" role="tabpanel">
                    <div id="pie-chart3"></div> 
                </div>
                <div class="tab-pane" id="w-3-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($institution as $in)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Institucione médica</div>
                                            {{$in->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de registros</div>
                                            {{$in->medicalData->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-3-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-3-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
</div>

<div class="row">

    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Municipios registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar municipios', 4);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-4-tab-1" role="tabpanel">
                    <div id="pie-chart4"></div> 
                </div>
                <div class="tab-pane" id="w-4-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($place as $p)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Municipio</div>
                                            {{$p->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$p->students->count()}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de clínicas</div>
                                            {{$p->clinics->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-4-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-4-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Estatus registrados en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar estatus', 5);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-5-tab-1" role="tabpanel">
                    <div id="pie-chart5"></div> 
                </div>
                <div class="tab-pane" id="w-5-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($status as $es)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
                                            {{$es->nombre}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$es->students->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-5-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-5-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
    <div class="col-lg-4 col-md-6">
        <section class="widget">
            <header class="widget-header-dark with-btn">
                Clínicas registradas en el sistema
                <button type="button" class="widget-header-btn" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUser('Editar clínicas', 6);">
                    <i class="font-icon font-icon-pencil"></i>
                </button>
            </header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-6-tab-1" role="tabpanel">
                        <div id="pie-chart6"></div>
                </div>
                <div class="tab-pane" id="w-6-tab-2" role="tabpanel">
                    <center>
                        <div class="pre-scrollable">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($clinics as $cli)
                                    <tr>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Clínica</div>
                                            {{$cli}}
                                        </td>
                                        <td class="table-check">
                                            <div class="font-11 color-blue-grey-lighter uppercase">Número de alumnos</div>
                                            {{$cli->medicalData->count()}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-6-tab-1" role="tab">
                            <i class="font-icon font-icon-chart-3"></i>
                            Gráfica
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-6-tab-2" role="tab">
                            <i class="font-icon font-icon-notebook-lines"></i>
                            Lista
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div> <!--col-lg-4 col-md-6-->
    
</div>

<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

<div class="container">
    <div class="row">
        <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-video-fill color-blue"></i>
                </div>
                <div class="widget-simple-sm-bottom">{{\App\video::all()->count()}} <br class="hidden-lg-up"/> videos</div>
            </section><!--.widget-simple-sm-->
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-post color-red"></i>
                </div>
                <div class="widget-simple-sm-bottom">{{\App\info::all()->count()}} <br class="hidden-lg-up"/> posts</div>
            </section><!--.widget-simple-sm-->
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-picture color-green"></i>
                </div>
                <div class="widget-simple-sm-bottom">{{\App\images::all()->count()}} <br class="hidden-lg-up"/> imágenes</div>
            </section><!--.widget-simple-sm-->
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-play color-black-blue"></i>
                </div>
                <div class="widget-simple-sm-bottom">{{\App\tutorials::all()->count()}} <br class="hidden-lg-up"/> Tutoriales</div>
            </section><!--.widget-simple-sm-->
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
            <section class="widget widget-simple-sm">
                <div class="widget-simple-sm-icon">
                    <i class="font-icon font-icon-mail color-purple"></i>
                </div>
                <div class="widget-simple-sm-bottom">{{Auth::user()->messages->count()}} <br class="hidden-lg-up"/> Avisos</div>
            </section><!--.widget-simple-sm-->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="text-center">
            <div class="col-lg-4 col-md-4">
                <button type="button" class="btn btn-rounded btn-danger btn-inline" data-toggle="modal" data-target=".bd-example-modal-sm" onclick="authUserSpecialFunctions('Configuraciones especiales', 1);">Más opciones</button>
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="{{asset('/admin')}}" class="btn btn-rounded btn-primary btn-inline">Regresar</a>
            </div>
            <div class="col-lg-4 col-md-4">
                 <a href="{{asset('/ExportExcel')}}" class="btn btn-rounded btn-incline btn-info">Lista de Registrados</a>
            </div> 
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
    <script src="{{asset('/Template/js/lib/d3/d3.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/charts-c3js/c3.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/configEdit.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            console.log(11);
            var pieChart = c3.generate({
            bindto: '#pie-chart1',
                data: {
                    columns: [
                        <?php 
                            foreach($carrer as $c){
                                echo '["'.$c->nombre.'['.$c->students->count().']", '.$c->students->count().'],';
                            }
                        ?>
                    ],
                    type : 'pie'
                }
            });
            var pieChart = c3.generate({
            bindto: '#pie-chart2',
                data: {
                    columns: [
                        <?php
                            $otros = 0;
                            
                            foreach($state as $s){
                                if($s->students->count() > 10){
                                    echo '["'.$s->nombre.'['.$s->students->count().']", '.$s->students->count().'],';
                                } else{
                                    $otros = $otros + $s->students->count();
                                }
                            }
                            
                            echo '["Otros['.$otros.']", 0],';
                        ?>
                    ],
                    type : 'pie'
                }
            });
            var pieChart = c3.generate({
            bindto: '#pie-chart3',
                data: {
                    columns: [
                        <?php 
                            foreach($institution as $in){
                                echo '["'.$in->nombre.'['.$in->medicalData->count().']", '.$in->medicalData->count().'],';
                            }
                        ?>
                    ],
                    type : 'pie'
                }
            });
            var pieChart = c3.generate({
            bindto: '#pie-chart4',
                data: {
                    columns: [
                        <?php
                            $otros = 0;
                            
                            foreach($place as $p){
                                if($p->students->count() > 10){
                                    echo '["'.$p->nombre.'['.$p->students->count().']", '.$p->students->count().'],';
                                } else{
                                    $otros = $otros + $p->students->count();
                                }
                            }
                            
                            echo '["Otros['.$otros.']", 0],';
                        ?>
                    ],
                    type : 'pie'
                }
            });
            var pieChart = c3.generate({
            bindto: '#pie-chart5',
                data: {
                    columns: [
                        <?php 
                            foreach($status as $es){
                                echo '["'.$es->nombre.'['.$es->students->count().']", '.$es->students->count().'],';
                            }
                        ?>
                    ],
                    type : 'pie'
                }
            });
            var pieChart = c3.generate({
            bindto: '#pie-chart6',
                data: {
                    columns: [
                        <?php
                            $otros = 0;
                            
                            foreach($clinics as $cli){
                                if($cli->medicalData->count() > 10){
                                    echo '["'.$cli.'['.$cli->medicalData->count().']", '.$cli->medicalData->count().'],';
                                } else{
                                    $otros = $otros + $cli->medicalData->count();
                                }
                            }
                            
                            echo '["Otros['.$otros.']", 0],';
                        ?>
                    ],
                    type : 'pie'
                }
            });
            
        });
    </script>
    
@stop
