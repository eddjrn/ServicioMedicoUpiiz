@extends('Devel.layout3')

<?php
  $classSize = "col-lg-2 col-md-3 col-sm-4";
?>

@section('title')
<title>Inicio en modo desarrollador</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> <!--cabecera para que se puedan enviar peticiones POST desde javascript-->
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
<div>
  <img id="cs" src="data:image/jpeg;base64,{{base64_encode(Auth::user()->foto)}}" class="imge" style="height:120px;width:auto;">
  <!-- <img id="cs" src="{{Auth::user()->foto}}" class="imge" style="height:120px;width:auto;"> -->
</div>
<!-- Wrap the image or canvas element with a block element (container) -->
<div>
  <img id="image" src="/Template/img/widget-user-bg.jpg" class="imge" style="height:400px;width:auto;">
</div>
<div class="col col-3">
  <div class="preview"></div>
</div>
<div class="col col-2">
  <div class="preview"></div>
</div>
<div class="col col-1">
  <div class="preview"></div>
</div>



<h5 class="m-t-lg with-border">Recordatorios</h5>
<button id="reset" class="btn btn-rounded btn-inline">reset</button>
<button id="crop" class="btn btn-rounded btn-inline">cortar</button>

<button id="rotar1" class="btn btn-rounded btn-inline">rotal 1</button>
<button id="rotar2" class="btn btn-rounded btn-inline">rotal 2</button>


{!!Form::open(array('url'=>'/devel', 'method'=>'post', 'enctype'=>'multipart/form-data'))!!}
<input class="btn btn-rounded btn-inline" type="file" id="abrir" name="abrir" accept="image/*" onchange="handleFile();" id="files">
<button class="btn btn-rounded btn-inline" type="submit" id="subir" name="subir">subir</button>
{!!Form::close()!!}

<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
  <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
  <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
    <span class="fa fa-upload"></span>
  </span>
</label>

{!!Form::open(array('url'=>'/devel', 'method'=>'post', 'enctype'=>'multipart/form-data'))!!}
<input type="file" id="abrir2" name="abrir2" accept="image/*" onchange="handleFile();" id="files">
<button type="submit" id="subir2" name="subir2">subir</button>
{!!Form::close()!!}


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

<style>

  .row,
  .preview {
    overflow: hidden;
  }

  .col {
    float: left;
  }

  .col-6 {
    width: 50%;
  }

  .col-3 {
    width: 25%;
  }

  .col-2 {
    width: 16.7%;
  }

  .col-1 {
    width: 8.3%;
  }
</style>

<link  href="/Template/css/lib/cropper/cropper.min.css" rel="stylesheet">
<script src="/Template/js/lib/cropper/cropper.min.js"></script>



<script>
  function handleFile(event){
    alert('x');

    // var selectedFile = event.target.files[0];
    // var reader = new FileReader();
    //
    // var imgtag = document.getElementById("image");
    // imgtag.title = selectedFile.name;
    //
    // reader.onload = function(event) {
    //   //imgtag.src = event.target.result;
    //   //$('#image').cropper('destroy');
    //   $('#image').cropper('replace', event.target.result);
    // };
    //
    //
    //
    // reader.readAsDataURL(selectedFile);
  }

  $(function () {
    var $previews = $('.preview');

    // Import image
    var $inputImage = $('#inputImage');
    var $image = $('#image');
    var URL = window.URL || window.webkitURL;
    var blobURL;

    if (URL) {
      $inputImage.change(function () {
        var files = this.files;
        var file;

        if (!$image.data('cropper')) {
          return;
        }

        if (files && files.length) {
          file = files[0];

          if (/^image\/\w+$/.test(file.type)) {
            blobURL = URL.createObjectURL(file);
            $image.one('built.cropper', function () {

              // Revoke when load complete
              URL.revokeObjectURL(blobURL);
            }).cropper('reset').cropper('replace', blobURL);
            $inputImage.val('');
          } else {
            window.alert('Please choose an image file.');
          }
        }
      });
    } else {
      $inputImage.prop('disabled', true).parent().addClass('disabled');
    }



    $('#image').cropper({
        aspectRatio: 1 / 1,
        viewMode: 1,
        movable: true,
        zoomable: true,
        zoomOnTouch: true,
        zoomOnWheel: true,
        rotatable: true,
        scalable: true,
        center: true,
        minCropBoxWidth: 100,
        minCropBoxHeight: 100,
        checkOrientation: true,

        ready: function (e) {
          var $clone = $(this).clone().removeClass('cropper-hidden');

          $clone.css({
            display: 'block',
            width: '100%',
            minWidth: 0,
            minHeight: 0,
            maxWidth: 'none',
            maxHeight: 'none',
          });

          $previews.css({
            width: '100%',
            overflow: 'hidden',
          }).html($clone);
        },

        crop: function (e) {
          var imageData = $(this).cropper('getImageData');
          var previewAspectRatio = e.width / e.height;

          $previews.each(function () {
            var $preview = $(this);
            var previewWidth = $preview.width();
            var previewHeight = previewWidth / previewAspectRatio;
            var imageScaledRatio = e.width / previewWidth;

            $preview.height(previewHeight).find('img').css({
              width: imageData.naturalWidth / imageScaledRatio,
              height: imageData.naturalHeight / imageScaledRatio,
              marginLeft: -e.x / imageScaledRatio,
              marginTop: -e.y / imageScaledRatio,
            });
          });
        }
      });

      $('#reset').on('click', function(){
        $('#image').cropper('reset');
      });
      $('#crop').on('click', function(){
        $('#image').cropper('getCroppedCanvas', {
          width: 300,
          height: 300,
          fillColor: '#fff',
          imageSmoothingEnabled: true,
          imageSmoothingQuality: 'low',
        }).toBlob(function (blob) {
          var formData = new FormData();

          formData.append('croppedImage', blob);

          $.ajax('/devel', {
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
              alert('Upload success');
              alert(response);
              location.href = "/devel";
            },
            error: function (xhr, status, error) {
              alert('Upload error');
              alert(xhr.responseText);
            }
          });



          });
      });

      $('#rotar1').on('click', function(){
        $('#image').cropper('rotate', 45);
      });
      $('#rotar2').on('click', function(){
        $('#image').cropper('rotate', -45);
      });

  });


</script>

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
