@extends('Devel.layout3')

<?php
  $classSize = "col-lg-2 col-md-3 col-sm-4";
?>

@section('title')
<title>Inicio en modo desarrollador</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
<div class="sign-avatar">
    <img src="{{asset('/Template/img/LogoSMdevel.svg')}}" alt="" style="height:120px;width:auto;">
</div>
Inicio en modo desarrollador
@stop

@section('content')
<h5 class="m-t-lg with-border">Recordatorios</h5>

<!-- Wrap the image or canvas element with a block element (container) -->
<div>
  <img id="image" src="/Template/img/widget-user-bg.jpg" class="imge">
</div>

<h5 class="m-t-lg with-border">Recordatorios</h5>


<h5 class="m-t-lg with-border">Registros en la base de datos</h5>
<div class="container-fluid">
  <div class="row">
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill grey">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-cogwheel"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Docentes [{{$users->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill grey">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-user"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Alumnos [{{$students->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill red">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-learn"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Carreras [{{$carrers->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill purple">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-bookmark"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Estatus [{{$status->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill blue">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-help"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Clínicas [{{$clinics->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill blue">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-build"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Instituciones médicas [{{$medicalInstitute->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill green">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-map"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Estados [{{$states->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill green">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-pin-2"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Municipios [{{$places->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill orange">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-picture"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Imágenes [{{$images->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill orange">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-video-fill"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Videos [{{$videos->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill orange">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-post"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Infomación [{{$info->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>

    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill orange">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-play"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Tutoriales [{{$tutorials->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
    <div class="{{$classSize}}">
      <section class="widget widget-simple-sm-fill orange">
        <div class="widget-simple-sm-icon">
          <i class="font-icon font-icon-mail"></i>
        </div>
        <div class="widget-simple-sm-fill-caption">Mensajes [{{$messages->count()}}]</div>
      </section><!--.widget-simple-sm-fill-->
    </div>
  </div>
</div>
@stop

@section('scripts')
<style>
/* Limit image width to avoid overflow the container */
  .imge {
  max-width: 100%; /* This rule is very important, please do not ignore this! */
  }
</style>

<link  href="/Template/css/custom/cropper/cropper.css" rel="stylesheet">
<script src="/Template/js/custom/cropper/cropper.js"></script>

<script>
$('#image').cropper({
  aspectRatio: 16 / 9,
  crop: function(e) {
    // Output the result data for cropping image.
    console.log(e.x);
    console.log(e.y);
    console.log(e.width);
    console.log(e.height);
    console.log(e.rotate);
    console.log(e.scaleX);
    console.log(e.scaleY);
  }
});
</script>

@stop
