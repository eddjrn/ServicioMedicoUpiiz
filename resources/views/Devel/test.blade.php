@extends('Devel.layout3')

@section('title')
<title>Vista de pruebas</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> <!--cabecera para que se puedan enviar peticiones POST desde javascript-->
<meta name="viewport" content="width=device-width, initial-scale=1">
@stop

@section('css')
<link  href="/Template/css/lib/cropper/cropper.min.css" rel="stylesheet">
@stop

@section('popUp')
@stop

@section('subHead')
Vista de pruebas
@stop

@section('content')

<style>
.container {
  max-width: 640px;
  max-height: 360px;
  margin: 20px auto;
}

.container > img {
  max-width: 100%;
}
</style>

<img src="{{$url}}">

<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <!-- <h3>Demo:</h3> -->
      <div class="img-container">
        <img id="image" src="/Template/img/user-bg.jpg" alt="Picture">
      </div>
    </div>
    <div class="col-md-3">
      <h3>Preview:</h3>
      <div class="docs-preview clearfix">
        <div class="img-preview preview-lg"></div>
        <div class="img-preview preview-md"></div>
        <div class="img-preview preview-sm"></div>
        <div class="img-preview preview-xs"></div>
      </div>

      <button id="crop">cortar</button>

      <!-- <h3>Data:</h3> -->
      <div class="docs-data">
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataX">X</label>
          <input type="text" class="form-control" id="dataX" placeholder="x">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataY">Y</label>
          <input type="text" class="form-control" id="dataY" placeholder="y">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataWidth">Width</label>
          <input type="text" class="form-control" id="dataWidth" placeholder="width">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataHeight">Height</label>
          <input type="text" class="form-control" id="dataHeight" placeholder="height">
          <span class="input-group-addon">px</span>
        </div>
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataRotate">Rotate</label>
          <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
          <span class="input-group-addon">deg</span>
        </div>
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataScaleX">ScaleX</label>
          <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
        </div>
        <div class="input-group input-group-sm">
          <label class="input-group-addon" for="dataScaleY">ScaleY</label>
          <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-9 docs-buttons">
      <!-- <h3>Toolbar:</h3> -->
      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
            <span class="fa fa-arrows"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
            <span class="fa fa-crop"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
            <span class="fa fa-search-plus"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
            <span class="fa fa-search-minus"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
            <span class="fa fa-arrow-left"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
            <span class="fa fa-arrow-right"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
            <span class="fa fa-arrow-up"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
            <span class="fa fa-arrow-down"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
            <span class="fa fa-rotate-left"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
            <span class="fa fa-rotate-right"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)">
            <span class="fa fa-arrows-h"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)">
            <span class="fa fa-arrows-v"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="crop" title="Crop">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)">
            <span class="fa fa-check"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="clear" title="Clear">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
            <span class="fa fa-remove"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="disable" title="Disable">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
            <span class="fa fa-lock"></span>
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="enable" title="Enable">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
            <span class="fa fa-unlock"></span>
          </span>
        </button>
      </div>

      <div class="btn-group">
        <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
            <span class="fa fa-refresh"></span>
          </span>
        </button>
        <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
          <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
          <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
            <span class="fa fa-upload"></span>
          </span>
        </label>
        <button type="button" class="btn btn-primary" data-method="destroy" title="Destroy">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
            <span class="fa fa-power-off"></span>
          </span>
        </button>
      </div>

      <div class="btn-group btn-group-crop">
        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
            Get Cropped Canvas
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
            160&times;90
          </span>
        </button>
        <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
          <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
            320&times;180
          </span>
        </button>
      </div>

      <!-- Show the cropped image in modal -->
      <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
            </div>
          </div>
        </div>
      </div><!-- /.modal -->

      <button type="button" class="btn btn-primary" data-method="getData" data-option data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
          Get Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="setData" data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)">
          Set Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="getContainerData" data-option data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)">
          Get Container Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="getImageData" data-option data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
          Get Image Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="getCanvasData" data-option data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
          Get Canvas Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="setCanvasData" data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
          Set Canvas Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="getCropBoxData" data-option data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
          Get Crop Box Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="setCropBoxData" data-target="#putData">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
          Set Crop Box Data
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="moveTo" data-option="0">
        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)">
          0,0
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="zoomTo" data-option="1">
        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)">
          100%
        </span>
      </button>
      <button type="button" class="btn btn-primary" data-method="rotateTo" data-option="180">
        <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)">
          180°
        </span>
      </button>
      <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
    </div><!-- /.docs-buttons -->

    <div class="col-md-3 docs-toggles">
      <!-- <h3>Toggles:</h3> -->
      <div class="btn-group btn-group-justified" data-toggle="buttons">
        <label class="btn btn-primary active">
          <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9">
            16:9
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3">
            4:3
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1">
            1:1
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3">
            2:3
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
          <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN">
            Free
          </span>
        </label>
      </div>

      <div class="btn-group btn-group-justified" data-toggle="buttons">
        <label class="btn btn-primary active">
          <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0">
            VM0
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1">
            VM1
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2">
            VM2
          </span>
        </label>
        <label class="btn btn-primary">
          <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
          <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3">
            VM3
          </span>
        </label>
      </div>

      <div class="dropdown dropup docs-options">
        <button type="button" class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
          Toggle Options
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="responsive" checked>
              responsive
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="restore" checked>
              restore
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="checkCrossOrigin" checked>
              checkCrossOrigin
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="checkOrientation" checked>
              checkOrientation
            </label>
          </li>

          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="modal" checked>
              modal
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="guides" checked>
              guides
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="center" checked>
              center
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="highlight" checked>
              highlight
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="background" checked>
              background
            </label>
          </li>

          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="autoCrop" checked>
              autoCrop
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="movable" checked>
              movable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="rotatable" checked>
              rotatable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="scalable" checked>
              scalable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="zoomable" checked>
              zoomable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="zoomOnTouch" checked>
              zoomOnTouch
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="zoomOnWheel" checked>
              zoomOnWheel
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="cropBoxMovable" checked>
              cropBoxMovable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="cropBoxResizable" checked>
              cropBoxResizable
            </label>
          </li>
          <li role="presentation">
            <label class="checkbox-inline">
              <input type="checkbox" name="toggleDragModeOnDblclick" checked>
              toggleDragModeOnDblclick
            </label>
          </li>
        </ul>
      </div><!-- /.dropdown -->

      <a class="btn btn-default btn-block" data-toggle="tooltip" href="https://fengyuanchen.github.io/cropperjs" title="Cropper without jQuery">Cropper.js</a>

    </div><!-- /.docs-toggles -->
  </div>
</div>

<!-- Footer -->
<footer class="docs-footer">
  <div class="container">
    <p class="heart"></p>
    <ul class="list-inline links">
      <li><a href="https://github.com/fengyuanchen/cropper">GitHub</a></li>
      <li><a href="https://github.com/fengyuanchen/cropper/tree/master/examples">Examples</a></li>
      <li><a href="https://github.com/fengyuanchen/cropper/blob/master/LICENSE">License</a></li>
      <li><a href="http://chenfengyuan.com">About</a></li>
    </ul>
  </div>
</footer>

@stop

@section('scripts')

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://fengyuanchen.github.io/js/common.js"></script>

<script src="/Template/js/lib/cropper/cropper.min.js"></script>

<script>
$(function () {

  'use strict';

  var console = window.console || { log: function () {} };
  var $image = $('#image');
  var $download = $('#download');
  var $dataX = $('#dataX');
  var $dataY = $('#dataY');
  var $dataHeight = $('#dataHeight');
  var $dataWidth = $('#dataWidth');
  var $dataRotate = $('#dataRotate');
  var $dataScaleX = $('#dataScaleX');
  var $dataScaleY = $('#dataScaleY');
  var options = {
        aspectRatio: 16 / 9,
        preview: '.img-preview',
        crop: function (e) {
          $dataX.val(Math.round(e.x));
          $dataY.val(Math.round(e.y));
          $dataHeight.val(Math.round(e.height));
          $dataWidth.val(Math.round(e.width));
          $dataRotate.val(e.rotate);
          $dataScaleX.val(e.scaleX);
          $dataScaleY.val(e.scaleY);
        }


      };



  // Tooltip
  $('[data-toggle="tooltip"]').tooltip();



  // Cropper
  $image.on({
    'build.cropper': function (e) {
      console.log(e.type);
    },
    'built.cropper': function (e) {
      console.log(e.type);
    },
    'cropstart.cropper': function (e) {
      console.log(e.type, e.action);
    },
    'cropmove.cropper': function (e) {
      console.log(e.type, e.action);
    },
    'cropend.cropper': function (e) {
      console.log(e.type, e.action);
    },
    'crop.cropper': function (e) {
      console.log(e.type, e.x, e.y, e.width, e.height, e.rotate, e.scaleX, e.scaleY);
    },
    'zoom.cropper': function (e) {
      console.log(e.type, e.ratio);
    }
  }).cropper(options);


  // Buttons
  if (!$.isFunction(document.createElement('canvas').getContext)) {
    $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
  }

  if (typeof document.createElement('cropper').style.transition === 'undefined') {
    $('button[data-method="rotate"]').prop('disabled', true);
    $('button[data-method="scale"]').prop('disabled', true);
  }


  // Download
  if (typeof $download[0].download === 'undefined') {
    $download.addClass('disabled');
  }


  // Options
  $('.docs-toggles').on('change', 'input', function () {
    var $this = $(this);
    var name = $this.attr('name');
    var type = $this.prop('type');
    var cropBoxData;
    var canvasData;

    if (!$image.data('cropper')) {
      return;
    }

    if (type === 'checkbox') {
      options[name] = $this.prop('checked');
      cropBoxData = $image.cropper('getCropBoxData');
      canvasData = $image.cropper('getCanvasData');

      options.built = function () {
        $image.cropper('setCropBoxData', cropBoxData);
        $image.cropper('setCanvasData', canvasData);
      };
    } else if (type === 'radio') {
      options[name] = $this.val();
    }

    $image.cropper('destroy').cropper(options);
  });


  // Methods
  $('.docs-buttons').on('click', '[data-method]', function () {
    var $this = $(this);
    var data = $this.data();
    var $target;
    var result;

    if ($this.prop('disabled') || $this.hasClass('disabled')) {
      return;
    }

    if ($image.data('cropper') && data.method) {
      data = $.extend({}, data); // Clone a new one

      if (typeof data.target !== 'undefined') {
        $target = $(data.target);

        if (typeof data.option === 'undefined') {
          try {
            data.option = JSON.parse($target.val());
          } catch (e) {
            console.log(e.message);
          }
        }
      }

      if (data.method === 'rotate') {
        $image.cropper('clear');
      }

      result = $image.cropper(data.method, data.option, data.secondOption);

      if (data.method === 'rotate') {
        $image.cropper('crop');
      }

      switch (data.method) {
        case 'scaleX':
        case 'scaleY':
          $(this).data('option', -data.option);
          break;

        case 'getCroppedCanvas':
          if (result) {

            // Bootstrap's Modal
            $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

            if (!$download.hasClass('disabled')) {
              $download.attr('href', result.toDataURL('image/jpeg'));
            }
          }

          break;
      }

      if ($.isPlainObject(result) && $target) {
        try {
          $target.val(JSON.stringify(result));
        } catch (e) {
          console.log(e.message);
        }
      }

    }
  });


  // Keyboard
  $(document.body).on('keydown', function (e) {

    if (!$image.data('cropper') || this.scrollTop > 300) {
      return;
    }

    switch (e.which) {
      case 37:
        e.preventDefault();
        $image.cropper('move', -1, 0);
        break;

      case 38:
        e.preventDefault();
        $image.cropper('move', 0, -1);
        break;

      case 39:
        e.preventDefault();
        $image.cropper('move', 1, 0);
        break;

      case 40:
        e.preventDefault();
        $image.cropper('move', 0, 1);
        break;
    }

  });

  $('#crop').on('click', function(){
    $('#image').cropper('getCroppedCanvas', {
      width: 300,
        height: 300,
      fillColor: '#fff',
      imageSmoothingEnabled: false,
      imageSmoothingQuality: 'medium',
    });

    $('#image').cropper('getCroppedCanvas').toBlob(function (blob) {
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

      // var url = '/devel';
      // var data = formData;
      // $.post(url, data, function(result){
      //     alert('si se pufo');
      //     }).fail(function (){
      //     alert('no se pudo :v');
      // });

      });
  });


  // Import image
  var $inputImage = $('#inputImage');
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
