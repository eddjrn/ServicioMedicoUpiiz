@extends('layout')

@section('title')
<title>Generación de formularios</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Generación de formularios
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
                            Carta responsiva
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <span class="font-icon font-icon-build"></span>
                            Formato IMSS
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                        <span class="nav-link-in">
                            <i class="font-icon font-icon-contacts"></i>
                            Historia clinica
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--.tabs-section-nav-->
    En estos casos ambos estan mostrados y organisados por fecha de actualizacion, por ello el updated_at eso noo significa que el numero del telefono y el nombre que aparecen sean de la misma persona, para que sean de la misma persona seria organizarla por created_at en ves de updated_at -> checa pestaña de formato imss
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">
            Nombre de la base de datos user </br>
            @foreach($user->sortByDesc('updated_at') as $ur)
            {{$ur->nombre}}</br>
            @endforeach

        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
            
            telefono de la base de datos student </br>
            @foreach($student->sortByDesc('updated_at') as $st)
            {{$st->telefono}}</br>
            @endforeach

        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->
@stop

@section('scripts')
@stop
