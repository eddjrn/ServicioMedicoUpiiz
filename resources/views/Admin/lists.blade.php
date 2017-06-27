@extends('Admin.layout2')

@section('title')
<title>Listas de alumnos</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> <!--cabecera para que se puedan enviar peticiones POST desde javascript-->
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
                <h4 class="modal-title" id="myModalLabel">Edición del perfil</h4>
            </div>
            {!!Form::open(array('method'=>'post', 'id'=>'userForm'))!!}
            <div class="modal-body">
                <h5 class="m-t-lg with-border">Estatus en el sistema</h5>
                <!--{{$estatus=\App\status::lists('nombre', 'id')}} -->
                {!!Form::select('estatus', $estatus, 1, ['class'=>'bootstrap-select bootstrap-select-arrow form-control', 'id'=>'estatus'])!!}
                <h5 class="m-t-lg with-border">Documentación</h5>
                {!!Form::select('documentacion', array('1'=>'Completa', '2'=>'Incompleta'), 1, ['class'=>'bootstrap-select bootstrap-select-arrow form-control', 'id'=>'documentacion'])!!}
            </div>
            <div class="modal-footer">
<!--                 <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button> -->
                <div class="text-center">
                    <button type="button" class="btn btn-rounded btn-warning" formaction="/" id="formi" onclick="upOperation()" data-dismiss="modal">Guardar cambios</button>
                </div>
            </div>
            {!!Form::close()!!}
            
             <div class="modal-footer">
                <div class="text-center">
                    <a onclick="toggle();" id="more">Mostrar más</a>
                </div>
            </div>
            
            {!!Form::open(array('method'=>'delete', 'style'=>'display:none', 'class'=>'details', 'id'=>'formDest'))!!}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">¿Seguro que quiere eliminar el registro?</label>
                    </div>
                </div>
            
                <input type="hidden" name="idVal2" id="idVal2" value="">
                <div class="modal-footer">
                    <div class="text-center">
                        <button type="button" class="btn btn-rounded btn-primary btn-danger" formaction="/" id="formButton2" data-dismiss="modal" onclick="delOperation();">Eliminar</button>
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
                            <i class="font-icon font-icon-learn"></i>
                            Carrera
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <span class="font-icon font-icon-eye"></span>
                            Estatus
                        </span>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-calend"></i>
                            Generación
                        </span>
                    </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-build"></i>
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
            <!--{{$x=0}} contador del array ($numbers) que viene del controlador y sirve para las clases de los acordeones-->
            @foreach($carrers as $carrer)
            
            <?php
//                 filtra los estudiantes a solo inscritos y no inscritos para las carreras y los ordena de manera descendente
                $studentsFiltered = $carrer->students->filter(function ($student){
                    return $student->estatus_id == 1 || $student->estatus_id == 2;
                })->sortByDesc('id');
            ?>
            
            <!--     {{$studentAll3 = $studentsFiltered->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                <!--el 1 es el numero de pagina, c{carrer id} es el id del div donde se cargaran las tablas, pagerc{carrer id} es el nav donde se cargaran los botones de navegacion de paginas, se envia un objeto json a la funcion javascript-->
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'c{{$carrer->id}}','pagerc{{$carrer->id}}', {{json_encode($studentAll3)}}, 1);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            {{$carrer->nombre}}
                            <span class="label label-pill label-primary">{{$studentsFiltered->count()}}</span>
                            <span class="label" style="background: {{$carrer->color}};">______________</span>
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
                                                <span class="label" id="labelPagec{{$carrer->id}}">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                @foreach($status as $s)
                                                    <span class="label 
                                                        @if($s->id == 1)
                                                            label-primary
                                                        @elseif($s->id == 2)
                                                            label-danger
                                                        @elseif($s->id == 3)
                                                            label-info
                                                        @elseif($s->id == 4)
                                                            label-warning
                                                        @elseif($s->id == 5)
                                                            label-success
                                                        @endif">{{$s->students->where('carrera_id', $carrer->id)->count()}} {{$s->nombre}}s</span>
                                                @endforeach
                                                    /
                                                    <?php
                                                        $studentsDocuments = $carrer->students;
                                                    ?>
                                                    <span class="label label-success">Completos: {{$studentsDocuments->where('documentacion', 1)->count()}}</span>
                                                    <span class="label label-danger">Incompletos: {{$studentsDocuments->where('documentacion', 2)->count()}}</span>
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="c{{$carrer->id}}">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagerc{{$carrer->id}}">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
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
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
        
         <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach($status as $statu)
            <!--     {{$studentAll4 = $statu->students->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 's{{$statu->id}}','pagers{{$statu->id}}', {{json_encode($studentAll4)}}, 2);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            {{$statu->nombre}}s
                            <span class="label label-pill @if($statu->id == 1)
                                label-primary
                            @elseif($statu->id == 2)
                                label-danger
                            @elseif($statu->id == 3)
                                label-info
                            @elseif($statu->id == 4)
                                label-warning
                            @elseif($statu->id == 5)
                                label-success
                            @endif">{{$statu->students->count()}}</span>
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
                                            <span class="label" id="labelPages{{$statu->id}}">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                            <?php
                                                $studentsDocuments = $statu->students;
                                            ?>
                                                    <span class="label label-success">Completos: {{$studentsDocuments->where('documentacion', 1)->count()}}</span>
                                                    <span class="label label-danger">Incompletos: {{$studentsDocuments->where('documentacion', 2)->count()}}</span>
                                                
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="s{{$statu->id}}">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagers{{$statu->id}}">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
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
            
            <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <!--     {{$studentAll5 = $studentAll->where('documentacion', 1)->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'd1','pagerd1', {{json_encode($studentAll5)}}, 3);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Documentación completa
                            <span class="label label-pill label-success">{{$studentAll->where('documentacion', 1)->count()}}</span>
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
                                                <span class="label" id="labelPaged1">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                @foreach($status as $s)
                                                    <span class="label 
                                                        @if($s->id == 1)
                                                            label-primary
                                                        @elseif($s->id == 2)
                                                            label-danger
                                                        @elseif($s->id == 3)
                                                            label-info
                                                        @elseif($s->id == 4)
                                                            label-warning
                                                        @elseif($s->id == 5)
                                                            label-success
                                                        @endif">{{$s->students->where('documentacion', 1)->count()}} {{$s->nombre}}s</span>
                                                @endforeach
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="d1">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagerd1">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--.box-typical-body-->
                            </section><!--.box-typical-->
                            
                        </div>
                    </div>
                </article>
                <!--{{$x++}}-->
                <!--     {{$studentAll6 = $studentAll->where('documentacion', 2)->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'd2','pagerd2', {{json_encode($studentAll6)}}, 3);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Documentación incompleta
                            <span class="label label-pill label-danger">{{$studentAll->where('documentacion', 2)->count()}}</span>
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
                                                <span class="label" id="labelPaged2">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                @foreach($status as $s)
                                                    <span class="label 
                                                        @if($s->id == 1)
                                                            label-primary
                                                        @elseif($s->id == 2)
                                                            label-danger
                                                        @elseif($s->id == 3)
                                                            label-info
                                                        @elseif($s->id == 4)
                                                            label-warning
                                                        @elseif($s->id == 5)
                                                            label-success
                                                        @endif">{{$s->students->where('documentacion', 2)->count()}} {{$s->nombre}}s</span>
                                                @endforeach
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="d2">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagerd2">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--.box-typical-body-->
                            </section><!--.box-typical-->
                            
                        </div>
                    </div>
                </article>
                <!--{{$x++}}-->
            </section>
        
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
        
        
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">
        
        <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <article class="panel">
<!--                 {{$studentsM = new Illuminate\Database\Eloquent\Collection()}} -->
                                                
                @foreach($medicalDatas->where('proveedorSeguro', 1) as $medicalData)                           
<!--                     {{$studentsM->push($medicalData)}} -->
                @endforeach
                
                 <!--     {{$studentAll8 = $studentsM->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                 
                 <script>
                    //alert({{$studentAll8}});
                 </script>
                
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'm1','pagerm1', {{json_encode($studentAll8)}}, 4);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Asegurado por UPIIZ-IPN
                            <span class="label label-pill label-primary">{{$medicalDatas->where('proveedorSeguro', 1)->count()}}</span>
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
                                                <span class="label" id="labelPagem1">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                <span class="label label-primary">IMSS</span>
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>                                                
                                                <div id="m1">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagerm1">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--.box-typical-body-->
                            </section><!--.box-typical-->
                            
                        </div>
                    </div>
                </article>
                <!--{{$x++}}-->
                <article class="panel">
                <!--                 {{$studentsM2 = new Illuminate\Database\Eloquent\Collection()}} -->
                
                @foreach($medicalDatas->where('proveedorSeguro', 2) as $medicalData)                           
<!--                     {{$studentsM2->push($medicalData)}} -->
                @endforeach
                
                 <!--     {{$studentAll9 = $studentsM2->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->

                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'm2','pagerm2', {{json_encode($studentAll9)}}, 4);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Asegurado por Padres
                            <span class="label label-pill label-primary">{{$medicalDatas->where('proveedorSeguro', 2)->count()}}</span>
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
                                                <span class="label" id="labelPagem2">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                <!-- {{$institution = \App\medicalInstitute::all()}} -->
                                                @foreach($institution as $inst)
                                                    <span class="label label-primary">{{$inst->nombre}}</span>
                                                @endforeach
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="m2">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagerm2">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--.box-typical-body-->
                            </section><!--.box-typical-->
                            
                        </div>
                    </div>
                </article>
                <!--{{$x++}}-->
                <article class="panel">
<!--                 {{$studentsM3 = new Illuminate\Database\Eloquent\Collection()}} -->
                                                
                @foreach($medicalDatas->where('proveedorSeguro', 3) as $medicalData)                           
<!--                     {{$studentsM3->push($medicalData)}} -->
                @endforeach
                
                 <!--     {{$studentAll9 = $studentsM3->lists('id')}} pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                 
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'm3','pagerm3', {{json_encode($studentAll9)}}, 4);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Asegurado por Trabajo
                            <span class="label label-pill label-primary">{{$medicalDatas->where('proveedorSeguro', 3)->count()}}</span>
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
                                                <span class="label" id="labelPagem3">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                <!-- {{$institution = \App\medicalInstitute::all()}} -->
                                                @foreach($institution as $inst)
                                                    <span class="label label-primary">{{$inst->nombre}}</span>
                                                @endforeach
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="m3">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>
                                                
                                                <div class="text-center">
                                                    <nav id="pagerm3">
                                                        <!--Paginador de la tabla generado por el script innerHTML-->
                                                    </nav>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--.box-typical-body-->
                            </section><!--.box-typical-->
                            
                        </div>
                    </div>
                </article>
                <!--{{$x++}}-->
            </section>
        
        </div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->

@stop

@section('scripts')
    <script src="/Template/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Template/js/custom/listsEdits.js"></script>
    
    <script> /*script para que se puedan enviar peticiones POST desde javascript*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@stop
