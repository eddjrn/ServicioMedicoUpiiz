@extends('layout')

@section('title')
<title>Inicio servicio medico</title>
@stop

@section('css')
@stop

@section('subHead')
Servicio Medico Upiiz
@stop

@section('content')
<div class="box-typical box-typical-padding documentation">
    <header class="documentation-header">
        <h2>Objetivo</h2>
        <p class="lead color-blue-grey"> </p>
    </header>
    <div class="text-block text-block-typical">
        <p>
            Tenemos como objetivo principal el que los alumnos de nuevo ingreso no batallen con el llendo de la documentación médica.
        </p>
        <p>mediante instructivos  y para los demás alumnos contar con su expediente completo.</p>
        
    </div>
</div><!--.box-typical-->


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
            <section class="widget">
                <header class="widget-header-dark">Tasks Completed</header>
                
                <div class="tab-content widget-tabs-content">
                    <div class="tab-pane" id="w-1-tab-1" role="tabpanel" aria-expanded="false">
                        <center><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12373.766879175771!2d-102.58526506211027!3d22.77492056162897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUPIIZ-IPN%2C+Zacatecas!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x86824e93068b2cb3%3A0xe9af7064ac9c92b7!2sIMSS%2C+Avenida+Universidad+102%2C+Lomas+del+Patrocinio%2C+98060+Zacatecas%2C+Zac.!3m2!1d22.7662625!2d-102.5598576!5e0!3m2!1ses!2smx!4v1495545674418" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center>
                    </div>
                    <div class="tab-pane" id="w-1-tab-2" role="tabpanel" aria-expanded="false">
                        <center><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12373.766879175771!2d-102.58526506211027!3d22.77492056162897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUPIIZ-IPN%2C+Zacatecas!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x86824e93068b2cb3%3A0xe9af7064ac9c92b7!2sIMSS%2C+Avenida+Universidad+102%2C+Lomas+del+Patrocinio%2C+98060+Zacatecas%2C+Zac.!3m2!1d22.7662625!2d-102.5598576!5e0!3m2!1ses!2smx!4v1495545674418" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center>
                    </div>
                    <div class="tab-pane active" id="w-1-tab-3" role="tabpanel" aria-expanded="true">
                        <center><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12373.766879175771!2d-102.58526506211027!3d22.77492056162897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUPIIZ-IPN%2C+Zacatecas!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x86824e93068b2cb3%3A0xe9af7064ac9c92b7!2sIMSS%2C+Avenida+Universidad+102%2C+Lomas+del+Patrocinio%2C+98060+Zacatecas%2C+Zac.!3m2!1d22.7662625!2d-102.5598576!5e0!3m2!1ses!2smx!4v1495545674418" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></center>
                    </div>
                </div>
                
                <div class="widget-tabs-nav bordered">
                    <ul class="tbl-row" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-1" role="tab" aria-expanded="false">
                                <i class="font-icon font-icon-chart-3"></i>
                                Chart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab" aria-expanded="false">
                                <i class="font-icon font-icon-notebook-lines"></i>
                                Tasks
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#w-1-tab-3" role="tab" aria-expanded="true">
                                <i class="font-icon font-icon-pin"></i>
                                Event
                            </a>
                        </li>
                    </ul>
                </div>
            </section><!--.widget-->
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
