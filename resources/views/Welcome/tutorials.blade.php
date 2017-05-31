@extends('layout')

@section('title')
<title>Inicio Servicio Medico Tutoriales</title>
@stop

@section('css')
@stop

@section('subHead')
Servicio Medico Upiiz
@stop

@section('content')
@include('alerts.sessionError')

<div class="box-typical box-typical-padding documentation">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9&appId=578903988956921";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

        <div class="container-fluid">
            
            <div class="row">
                <div class="col-xxl-6 col-md-10">
                    <section class="widget widget-time">
                        <header class="widget-header-dark with-btn">
                            Time is Money!
                        </header>
                        <div class="widget-time-content">
                            <div>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/qFnE2_pEFJo" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </section><!--.widget-time-->

                </div>

                <div class="col-xxl-6 col-md-10">
                    <section class="widget widget-time">
                        <header class="widget-header-dark with-btn">
                            Time is Money!
                        </header>
                        <div class="widget-time-content">
                            <div >
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/qFnE2_pEFJo" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </section><!--.widget-time-->
            </div><!--.row-->

        </div>
</div><!--.box-typical-->


@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
