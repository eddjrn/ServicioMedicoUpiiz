@extends('Admin.layout2')

@section('title')
<title>Listas de alumnos</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> <!--cabecera para que se puedan enviar peticiones POST desde javascript-->
@stop

@section('css')
@stop

@section('popUp')
<div class="modal fade bd-example-modal-md"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edición del perfil</h4>
            </div>
            {!!Form::open(array('method'=>'post', 'id'=>'userForm'))!!}
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
                            <h5 class="m-t-lg with-border">Estatus en el sistema</h5>
                            <?php
                              $estatus=\App\status::lists('nombre', 'id');
                             ?>
                            {!!Form::select('estatus', $estatus, 1, ['class'=>'bootstrap-select bootstrap-select-arrow form-control', 'id'=>'estatus'])!!}
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <h5 class="m-t-lg with-border">Seguro de vida</h5>
                            {!!Form::select('seguro', config('global.SeguroVida'), 1, ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example', 'id'=>'seguro'])!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1">
                            <h5 class="m-t-lg with-border">Documentación</h5>
                            {!!Form::select('documentacion', config('global.documentacion'), 1, ['class'=>'bootstrap-select bootstrap-select-arrow form-control remove-example', 'id'=>'documentacion'])!!}
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <h5 class="m-t-lg with-border">Observaciones</h5>
                            {!!Form::text('observaciones', null, array('class'=>'form-control', 'id'=>'observaciones', 'placeholder'=>'Observaciones sobre la documentacion'))!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
<!--                 <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Close</button> -->
                <div class="text-center">
                    <button type="button" class="btn btn-rounded btn-warning" formaction="{{asset('/')}}" id="formi" onclick="upOperation()" data-dismiss="modal">Guardar cambios</button>
                </div>
            </div>
            {!!Form::close()!!}

             <div class="modal-footer">
                <div class="text-center">
                    <a onclick="toggle();" id="more">Mostrar más</a>
                </div>
            </div>

            {!!Form::open(array('method'=>'delete', 'style'=>'display:none', 'class'=>'details', 'id'=>'formDest'))!!}
                <input type="hidden" name="idVal2" id="idVal2" value="">
                <div class="modal-footer">
                    <div class="container text-center">
                        <div class="form-group">
                            <h5 class="m-t-lg with-border">¿Seguro que quiere eliminar el registro?</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <button type="button" class="btn btn-rounded btn-primary btn-danger btn-inline" formaction="{{asset('/')}}" id="formButton2" data-dismiss="modal" onclick="delOperation();">Eliminar</button>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <button type="button" class="btn btn-rounded btn-primary btn-inline" onclick="toggle();">Cancelar</button>
                            </div>
                        </div>
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
                            <span class="font-icon font-icon-bookmark"></span>
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
                            Aseguración
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

                $studentAll3 = $studentsFiltered->lists('id');
            ?>

            <!-- $studentAll3 pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
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
                                                    <span class="label {{config('global.stateLabel')[$s->id]}}">{{$s->students->where('carrera_id', $carrer->id)->count()}} {{$s->nombre}}</span>
                                                @endforeach
                                                    /
                                                    <?php
                                                        $studentsDocuments = $carrer->students;
                                                    ?>
                                                    <span class="label label-{{config('global.hasState')[1]}}">Completos: {{$studentsDocuments->where('documentacion', 1)->count()}}</span>
                                                    <span class="label label-{{config('global.hasState')[2]}}">Incompletos: {{$studentsDocuments->where('documentacion', 2)->count()}}</span>
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
            <?php
              $studentAll4 = $statu->students->lists('id');
             ?>
            <!-- $studentAll4 pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 's{{$statu->id}}','pagers{{$statu->id}}', {{json_encode($studentAll4)}}, 2);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            {{$statu->nombre}}
                            <span class="label label-pill {{config('global.stateLabel')[$statu->id]}}">{{$statu->students->count()}}</span>
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
                                                    <span class="label label-{{config('global.hasState')[1]}}">Completos: {{$studentsDocuments->where('documentacion', 1)->count()}}</span>
                                                    <span class="label label-{{config('global.hasState')[2]}}">Incompletos: {{$studentsDocuments->where('documentacion', 2)->count()}}</span>

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
                <?php
                    $on = false;
                    $docStyle = 0;
                ?>
                @foreach(config('global.documentacion') as $doc)
                @if($on == true)
                  <?php
                    $studentAll5 = $studentAll->where('documentacion', $docStyle)->lists('id');
                   ?>
                <!-- $studentAll5 pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'd{{$docStyle}}','pagerd{{$docStyle}}', {{json_encode($studentAll5)}}, 3);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Documentación {{$doc}}
                            <span class="label label-pill label-{{config('global.hasState')[$docStyle]}}">{{$studentAll->where('documentacion', $docStyle)->count()}}</span>
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
                                                <span class="label" id="labelPaged{{$docStyle}}">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                @foreach($status as $s)
                                                    <span class="label {{config('global.stateLabel')[$s->id]}}">{{$s->students->where('documentacion', $docStyle)->count()}} {{$s->nombre}}</span>
                                                @endforeach
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="d{{$docStyle}}">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>

                                                <div class="text-center">
                                                    <nav id="pagerd{{$docStyle}}">
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
                @endif
                <?php
                    $on = true;
                    $docStyle++;
                ?>
                @endforeach
            </section>

        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">


        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">




            <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                    $on = false;
                    $medicStyle = 0;
                ?>
                @foreach(config('global.proveedores') as $prov)
                @if($on == true)
                <article class="panel">
                  <?php
                    $studentsM = new Illuminate\Database\Eloquent\Collection();
                   ?>

                @foreach($medicalDatas->where('proveedorSeguro', $prov) as $medicalData)
                  <?php
                    $studentsM->push($medicalData);
                   ?>
                @endforeach

                <?php
                  $studentAll8 = $studentsM->lists('id');
                 ?>
                 <!-- $studentAll8 pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->

                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'm{{$medicStyle}}','pagerm{{$medicStyle}}', {{json_encode($studentAll8)}}, 4);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Asegurado por {{$prov}}
                            <span class="label label-pill label-primary">{{$medicalDatas->where('proveedorSeguro', $prov)->count()}}</span>
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
                                                <span class="label" id="labelPagem{{$medicStyle}}">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                                /
                                                @if($medicStyle > 1)
                                                    <!-- {{$institution = \App\medicalInstitute::all()}} -->
                                                    @foreach($institution as $inst)
                                                        <span class="label label-primary">{{$inst->nombre}}</span>
                                                    @endforeach
                                                @else
                                                    <span class="label label-primary">IMSS</span>
                                                @endif
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="m{{$medicStyle}}">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>

                                                <div class="text-center">
                                                    <nav id="pagerm{{$medicStyle}}">
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
                @endif
                <?php
                    $on = true;
                    $medicStyle++;
                ?>
                @endforeach
            </section>


            <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                    $on = false;
                    $segStyle = 0;
                ?>
                @foreach(config('global.SeguroVida') as $seg)
                @if($on == true)
                <article class="panel">
                  <?php
                    $studentsI1 = new Illuminate\Database\Eloquent\Collection();
                   ?>

                @foreach($medicalDatas->where('seguroVida', $segStyle) as $medicalData)
                  <?php
                    $studentsI1->push($medicalData);
                   ?>
                @endforeach
                <?php
                  $studentAll10 = $studentsI1->lists('id');
                 ?>
                 <!-- $studentAll10  pone en una lista los estudiantes filtrados para enviarlos a la paginacion-->

                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}" onclick="loadPages(1, 'I{{$segStyle}}','pagerI{{$segStyle}}', {{json_encode($studentAll10)}}, 5);">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            {{$seg}} con seguro de vida
                            <span class="label label-pill label-{{config('global.hasState')[$segStyle]}}">{{$medicalDatas->where('seguroVida', $segStyle)->count()}}</span>
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
                                                <span class="label" id="labelPageI{{$segStyle}}">pagina</span> <!--info de la pagina de las tablas generado por script-->
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <div id="I{{$segStyle}}">
                                                    <!--Tabla generada por el script .load() de jquery-->
                                                </div>

                                                <div class="text-center">
                                                    <nav id="pagerI{{$segStyle}}">
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
                @endif
                <?php
                    $on = true;
                    $segStyle++;
                ?>
                @endforeach
            </section>

        </div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->

<div class="text-center">
    <a href="{{asset('/admin/lists')}}" class="btn btn-rounded btn-secondary" id="updateList">Actualizar datos de las tablas</a>
</div>

@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/Template/js/custom/listsEdits.js')}}"></script>

    <script> /*script para que se puedan enviar peticiones POST desde javascript*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            $('.remove-example').find('[value=0]').remove();
        });
    </script>
@stop
