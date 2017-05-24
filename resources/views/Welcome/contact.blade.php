@extends('layout')

@section('title')
<title>Contactos Servicio Medico</title>
@stop

@section('css')
@stop

@section('subHead')
<header>
    <h1>Contáctanos</h1>
</header>
@stop

@section('content')
<div class="container-fluid">
            <section class="box-typical contacts-page">
                <header class="box-typical-header box-typical-header-bordered">
                    <div class="tbl-row">
                        <div class="tbl-cell tbl-cell-title">
                            <h1>Contact us</h1>
                            <ul class="contacts-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#tab-contact-1" role="tab" data-toggle="tab" class="active">France</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-contact-2" role="tab" data-toggle="tab">USA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-contact-3" role="tab" data-toggle="tab">Singapore</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tbl-cell tbl-cell-actions">
                            <button type="button" class="action-btn action-btn-expand">
                                <i class="font-icon font-icon-expand"></i>
                            </button>
                        </div>
                    </div>
                </header>

                <div class="tab-content">
                    <div role="tabpanel" class="clearfix tab-pane active" id="tab-contact-1">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <div id="map_canvas" class="map" style="height: 583px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 184px; top: 162px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 440px; top: 162px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 440px; top: -94px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 184px; top: -94px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 184px; top: 418px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 440px; top: 418px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -72px; top: 162px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -72px; top: 418px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -72px; top: -94px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 184px; top: 162px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 440px; top: 162px;"><canvas draggable="false" height="231" width="231" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 440px; top: -94px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 184px; top: -94px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 184px; top: 418px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 440px; top: 418px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -72px; top: 162px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -72px; top: 418px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -72px; top: -94px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 184px; top: 162px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i7!3i5!4i256!2m3!1e0!2sm!3i380071316!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=116061" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 440px; top: 162px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i8!3i5!4i256!2m3!1e0!2sm!3i380071316!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=4733" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 440px; top: -94px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i8!3i4!4i256!2m3!1e0!2sm!3i380071316!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=99783" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 184px; top: -94px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i7!3i4!4i256!2m3!1e0!2sm!3i380071316!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=80040" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 184px; top: 418px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i7!3i6!4i256!2m3!1e0!2sm!3i380070680!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=117300" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 440px; top: 418px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i8!3i6!4i256!2m3!1e0!2sm!3i380070680!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=5972" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -72px; top: 162px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i6!3i5!4i256!2m3!1e0!2sm!3i380071316!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=96318" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -72px; top: 418px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i6!3i6!4i256!2m3!1e0!2sm!3i380071268!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=83626" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -72px; top: -94px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i6!3i4!4i256!2m3!1e0!2sm!3i380071316!3m9!2ses-ES!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=60297" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div class="infoBox" style="width: 280px; transform: translateZ(0px); position: absolute; visibility: visible; left: 326.62px; top: 291.016px;"><img src="img/close.png" align="right" style=" position: relative; cursor: pointer; margin: 2px;"><p><i class="font-icon font-icon-pin"></i>16, Yafo Street, 94142 PARIS</p><p><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p><p><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p></div></div></div><iframe frameborder="0" style="z-index: -1; border: 0px none; position: absolute; height: 100%; width: 100%; padding: 0px; margin: 0px; left: 0px; top: 0px;"></iframe></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=48.863807,-9.393739&amp;z=4&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=apiv3" title="Haz clic aquí para visualizar esta zona en Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 184px; top: 202px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Datos de mapas</div><div style="font-size: 13px;">Datos de mapas ©2017 Google, INEGI, ORION-ME</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 86px; bottom: 0px; width: 232px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Datos de mapas</a><span style="">Datos de mapas ©2017 Google, INEGI, ORION-ME</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Datos de mapas ©2017 Google, INEGI, ORION-ME</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/es-ES_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Términos de uso</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Informar a Google acerca de errores en las imágenes o en el mapa de carreteras" href="https://www.google.com/maps/@48.863807,-9.3937394,4z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar de un error de Maps</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Acerca la imagen" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Aleja la imagen" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Control del hombrecito naranja de Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="El hombrecito naranja está en la parte superior del mapa." style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Control del hombrecito naranja de Street View" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Girar el mapa 90 grados" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Muestra el callejero" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 27px; font-weight: 500;">Mapa</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 28px; text-align: left; display: none;"><div draggable="false" title="Muestra el callejero con relieve" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Relieve</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Muestra las imágenes de satélite" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-left: 0px; min-width: 37px;">Satélite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 28px; text-align: left; display: none;"><div draggable="false" title="Muestra las imágenes con los nombres de las calles" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Etiquetas</label></div></div></div></div></div></div></div>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Connect</header>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-twitter"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>
                            </section>
                            <form class="contacts-page-section">
                                <header class="box-typical-header-sm">Send Message</header>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-Mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-rounded">Send</button>
                            </form>
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Other way</header>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->

                    <div role="tabpanel" class="clearfix tab-pane" id="tab-contact-2">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <div id="map_canvas_2" class="map" style="height: 583px;"></div>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Connect</header>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-twitter"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->

                    <div role="tabpanel" class="clearfix tab-pane" id="tab-contact-3">
                        <div class="contacts-page-col-left">
                            <div class="contacts-page-col-left-in">
                                <div id="map_canvas_3" class="map" style="height: 583px;"></div>
                            </div><!--.contacts-page-col-left-in-->
                        </div><!--.contacts-page-col-left-->
                        <div class="contacts-page-col-right">
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Connect</header>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-facebook"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-twitter"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-linkedin"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-google-plus"></i>
                                </a>
                                <a href="#" class="contact">
                                    <i class="font-icon font-icon-instagram"></i>
                                </a>
                            </section>
                            <form class="contacts-page-section">
                                <header class="box-typical-header-sm">Send Message</header>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-Mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-rounded">Send</button>
                            </form>
                            <section class="contacts-page-section">
                                <header class="box-typical-header-sm">Other way</header>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                                <p class="contact-other"><i class="font-icon font-icon-mail"></i>johndoe@gmail.com</p>
                                <p class="contact-other"><i class="font-icon font-icon-phone"></i>(+972 2) 629 06 32</p>
                            </section>
                        </div><!--.contacts-page-col-right-->
                    </div><!--.tab-pane-->
                </div><!--.tab-content-->
            </section><!--.box-typical-->
        </div>
@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
