@extends('layout')

@section('title')
lista de clínicas servicio medico
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Lista de clínicas
@stop

@section('content')

<div class="container-fluid">
  <div class="row">
      @foreach($clinic as $cl)
      <div class="col-lg-4 col-md-6 col-sm-6 ">
          <div class="ribbon-block round relative text-center">

             <a onclick="showMap(
                      '{{$cl->mapa}}',
                      'mapBox{{$cl->id}}',
                      'mapRibbon{{$cl->id}}',
                      'mapRibbonIcon{{$cl->id}}',
                      'mapRibbonLabel{{$cl->id}}',
                      '{{$cl->place->nombre}}',
                      '{{$cl->place->nombre}}',
                      '{{$cl}}',
                  );"
              id="mapRibbon{{$cl->id}}"><div class="ribbon right-top">

                  <i class="font-icon font-icon-map" id="mapRibbonIcon{{$cl->id}}"></i>
                  <span id="mapRibbonLabel{{$cl->id}}">Mapa</span>
              </div></a>
              <div id="mapBox{{$cl->id}}">
                  <br/>
                  <i class="font-icon font-icon-pin-2"></i> Municipio: {{$cl->place->nombre}}
                  <br/>
                  <i class="font-icon font-icon-build"></i> Tipo: {{$cl->place->nombre}}
                  <span class="title">
                      <strong>{{$cl}}</strong>
                  </span>
              </div>
          </div>
      </div><!--.col-->
      @endforeach
  </div><!--.row-->
</div>

{!!with(new App\Pagination\HDPresenter($clinic))->render()!!}
@stop

@section('scripts')
<script>
    function showMap(map, idBox, ribbon, icon, label, place, kind, title){
        document.getElementById(idBox).innerHTML = map;
        document.getElementById(label).innerHTML = 'Ocultar';
        document.getElementById(icon).setAttribute('class', 'font-icon font-icon-player-subtitres');

        document.getElementById(ribbon).setAttribute('onclick', `hideMap('${map}', '${idBox}', '${ribbon}', '${icon}', '${label}', '${place}', '${kind}', '${title}');`);
    }

    function hideMap(map, id, ribbon, icon, label, place, kind, title){
        document.getElementById(id).innerHTML = `\
            <br/>\
            <i class="font-icon font-icon-pin-2"></i> Municipio: ${place}\
            <br/>\
            <i class="font-icon font-icon-build"></i> Tipo: ${kind}\
            <span class="title">\
                <strong>${title}</strong>\
            </span>\
        `;
        document.getElementById(label).innerHTML = 'Mapa';
        document.getElementById(icon).setAttribute('class', 'font-icon font-icon-map');

        document.getElementById(ribbon).setAttribute('onclick', `showMap('${map}', '${id}', '${ribbon}', '${icon}', '${label}', '${place}', '${kind}', '${title}');`);
    }
</script>
@stop
