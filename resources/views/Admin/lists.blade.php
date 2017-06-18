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
                    <button type="submit" class="btn btn-rounded btn-primary" formaction="/" id="formi">Guardar cambios</button>
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
                        <label class="form-label">¿Seguro que quiere eliminar el registro?</label>
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
            <!--{{$x=0}}-->
            @foreach($carrers as $carrer)
            
            <?php
                $studentsFiltered = $carrer->students->filter(function ($student){
                    return $student->estatus_id == 1 || $student->estatus_id == 2;
                });
            ?>
            
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
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
                                                @foreach($studentsFiltered as $student)
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
                                                        {{$student->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$student->user->medicalData->numSeguro}}
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
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Documentación</div>
                                                        <input type="text" readonly class="form-control @if($student->documentacion == 1)
                                                            {{$statusStyle[4]}}
                                                        @elseif($student->documentacion == 2)
                                                            {{$statusStyle[1]}}
                                                        @endif" value="{{$student->documentation()}}">
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$student->id}},'{{$student->user}}',{{$student->estatus_id}},{{$student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
        
         <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach($status as $statu)
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
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
                                                @foreach($statu->students as $student)
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
                                                        {{$student->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$student->user->medicalData->numSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                        {{$student->carrer->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Documentación</div>
                                                        <input type="text" readonly class="form-control @if($student->documentacion == 1)
                                                            {{$statusStyle[4]}}
                                                        @elseif($student->documentacion == 2)
                                                            {{$statusStyle[1]}}
                                                        @endif" value="{{$student->documentation()}}">
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$student->id}},'{{$student->user}}',{{$student->estatus_id}},{{$student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
            
            <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
                        <a data-toggle="collapse"
                            data-parent="#accordion"
                            href="#collapse{{$numbers[$x]}}"
                            aria-expanded="false"
                            aria-controls="collapse{{$numbers[$x]}}">
                            Documentación completa
                            <span class="label label-pill label-primary">{{$studentAll->where('documentacion', 1)->count()}}</span>
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
                                                @foreach($studentAll->where('documentacion', 1) as $student)
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
                                                        {{$student->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$student->user->medicalData->numSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                        {{$student->carrer->nombre}}
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
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$student->id}},'{{$student->user}}',{{$student->estatus_id}},{{$student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
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
                                                @foreach($studentAll->where('documentacion', 2) as $student)
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
                                                        {{$student->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$student->user->medicalData->numSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                        {{$student->carrer->nombre}}
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
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$student->id}},'{{$student->user}}',{{$student->estatus_id}},{{$student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
            </section>
        
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
        
        
        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">
        
        <section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
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
                                                    <span class="label label-primary">IMSS</span>
                                            </h3>
                                        </div>
                                    </div>
                                </header>
                                <div class="box-typical-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                @foreach($medicalDatas->where('proveedorSeguro', 1) as $medicalData)
                                                <tr>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Nombre</div>
                                                        <a href="/admin/lists/{{$medicalData->user->student->id}}">{{$medicalData->user}}</a>
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Correo electrónico</div>
                                                        {{$medicalData->user->email}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Boleta</div>
                                                        {{$medicalData->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$medicalData->numSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$medicalData->user->student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                        {{$medicalData->user->student->carrer->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Institución que lo asegura</div>
                                                        {{$medicalData->institution->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
                                                        <input type="text" readonly class="form-control @if($medicalData->user->student->estatus_id == 1)
                                                            {{$statusStyle[0]}}
                                                        @elseif($medicalData->user->student->estatus_id == 2)
                                                            {{$statusStyle[1]}}
                                                        @elseif($medicalData->user->student->estatus_id == 3)
                                                            {{$statusStyle[2]}}
                                                        @elseif($medicalData->user->student->estatus_id == 4)
                                                            {{$statusStyle[3]}}
                                                        @elseif($medicalData->user->student->estatus_id == 5)
                                                            {{$statusStyle[4]}}
                                                        @endif" value="{{$medicalData->user->student->status->nombre}}">
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$medicalData->user->student->id}},'{{$medicalData->user}}',{{$medicalData->user->student->estatus_id}},{{$medicalData->user->student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
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
                                                @foreach($medicalDatas->where('proveedorSeguro', 2) as $medicalData)
                                                <tr>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Nombre</div>
                                                        <a href="/admin/lists/{{$medicalData->user->student->id}}">{{$medicalData->user}}</a>
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Correo electrónico</div>
                                                        {{$medicalData->user->email}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Boleta</div>
                                                        {{$medicalData->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$medicalData->numSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$medicalData->user->student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                        {{$medicalData->user->student->carrer->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Institución que lo asegura</div>
                                                        {{$medicalData->institution->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
                                                        <input type="text" readonly class="form-control @if($medicalData->user->student->estatus_id == 1)
                                                            {{$statusStyle[0]}}
                                                        @elseif($medicalData->user->student->estatus_id == 2)
                                                            {{$statusStyle[1]}}
                                                        @elseif($medicalData->user->student->estatus_id == 3)
                                                            {{$statusStyle[2]}}
                                                        @elseif($medicalData->user->student->estatus_id == 4)
                                                            {{$statusStyle[3]}}
                                                        @elseif($medicalData->user->student->estatus_id == 5)
                                                            {{$statusStyle[4]}}
                                                        @endif" value="{{$medicalData->user->student->status->nombre}}">
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$medicalData->user->student->id}},'{{$medicalData->user}}',{{$medicalData->user->student->estatus_id}},{{$medicalData->user->student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
                <article class="panel">
                    <div class="panel-heading" role="tab" id="heading{{$numbers[$x]}}">
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
                                                @foreach($medicalDatas->where('proveedorSeguro', 3) as $medicalData)
                                                <tr>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Nombre</div>
                                                        <a href="/admin/lists/{{$medicalData->user->student->id}}">{{$medicalData->user}}</a>
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Correo electrónico</div>
                                                        {{$medicalData->user->email}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Boleta</div>
                                                        {{$medicalData->user->identificacion}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Número de seguro</div>
                                                        {{$medicalData->numSeguro}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Teléfono</div>
                                                        {{$medicalData->user->student->telefono}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Carrera</div>
                                                        {{$medicalData->user->student->carrer->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Institución que lo asegura</div>
                                                        {{$medicalData->institution->nombre}}
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Estatus</div>
                                                        <input type="text" readonly class="form-control @if($medicalData->user->student->estatus_id == 1)
                                                            {{$statusStyle[0]}}
                                                        @elseif($medicalData->user->student->estatus_id == 2)
                                                            {{$statusStyle[1]}}
                                                        @elseif($medicalData->user->student->estatus_id == 3)
                                                            {{$statusStyle[2]}}
                                                        @elseif($medicalData->user->student->estatus_id == 4)
                                                            {{$statusStyle[3]}}
                                                        @elseif($medicalData->user->student->estatus_id == 5)
                                                            {{$statusStyle[4]}}
                                                        @endif" value="{{$medicalData->user->student->status->nombre}}">
                                                    </td>
                                                    <td>
                                                        <div class="font-11 color-blue-grey-lighter uppercase">Editar</div>
                                                        <button type="button"
                                                            class="btn btn-inline btn-sm btn-primary"
                                                            data-toggle="modal"
                                                            data-target=".bd-example-modal-sm" onclick="updateInputs({{$medicalData->user->student->id}},'{{$medicalData->user}}',{{$medicalData->user->student->estatus_id}},{{$medicalData->user->student->documentacion}})"><span class="font-icon font-icon-pencil"></span></button>
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
            </section>
        
        </div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->


@stop

@section('scripts')
    <script src="/Template/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Template/js/custom/listsEdits.js"></script>
@stop
