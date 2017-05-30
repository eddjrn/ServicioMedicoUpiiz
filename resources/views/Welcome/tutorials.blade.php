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

<div class="fb-video" data-href="https://www.facebook.com/702542226521320/videos/887977814644426/" data-width="500" data-show-text="false"><blockquote cite="https://www.facebook.com/702542226521320/videos/887977814644426/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/702542226521320/videos/887977814644426/"></a><p>Evolution of Johnny depp

Credit to Ida Engel</p>Posted by <a href="https://www.facebook.com/ZA-Photography-702542226521320/">ZA  Photography</a> on domingo, 17 de abril de 2016</blockquote></div>
    
</div><!--.box-typical-->


@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
