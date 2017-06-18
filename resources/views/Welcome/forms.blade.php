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
    
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1">

        {{$student->user}}
        {{$student->user->medicalData->numSeguro}}

        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
            

        </div><!--.tab-pane-->
        <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Tab 3</div><!--.tab-pane-->
    </div><!--.tab-content-->
</section><!--.tabs-section-->
@stop

@section('scripts')
@stop
