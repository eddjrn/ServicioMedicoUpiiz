@extends('layout')

@section('title')
<title>Noticias Servicio Medico</title>
@stop

@section('css')
@stop

@section('subHead')

@stop

@section('content')

<section class="tabs-section">
                <div class="tabs-section-nav tabs-section-nav-icons">
                    <div class="tbl">
                        <ul class="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-comment"></span>
                                        Noticias
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-picture-double"></span>
                                        Imagenes
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-play"></span>
                                        Videos
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--.tabs-section-nav-->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1" class="col-md-5 col-xs-6" >
       
        @foreach($info as $in)
            <div class="card-grid-col"> <!-- Card-->
                    <article class="card-typical">
                        <div class="card-typical-section">
                            <div class="user-card-row">
                                <div class="tbl-row">
                                    <div class="tbl-cell tbl-cell-photo">
                                        <a href="#">
                                            <img src="Template/img/avatar-sign.png" alt="">
                                        </a>
                                    </div>
                                    <div class="tbl-cell">
                                        <p class="user-card-row-name"><a>@if($in->usuario_id==1) Veronica @endif</a></p>
                                        <p class="color-blue-grey-lighter">3 days ago - 23 min reader</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-typical-section card-typical-content"> <!-- Post-->
                            <header class="title"><a>{{$in->titulo}}</a></header>
                            <p>{{$in->contenido}} </p>
                        </div>
                       
                    </article><!--.card-typical-->
                    </div>  
                 @endforeach
                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">Imagenes

                        @foreach($images as $img)
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-xxl-6 col-md-10">
                    <section class="widget widget-time">
                        <header class="widget-header-dark with-btn">
                            Sacar Vigencia de derechos IMSS
                        </header>
                        <div class="widget-time-content">
                            <div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fverodelarosa.medicaupiiz%2Fvideos%2F1856299047919436%2F&width=500&show_text=false&appId=578903988956921&height=280" width="100%" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                    </div>
                                </div>
                        </div>
                    </section><!--.widget-time-->

                </div>

                <div class="col-xxl-6 col-md-10">
                    <section class="widget widget-time">
                        <header class="widget-header-dark with-btn">
                            Cambiarte de Clinica o UMF IMSS
                        </header>
                        <div class="widget-time-content">
                            <div >
                                <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fverodelarosa.medicaupiiz%2Fvideos%2F1856271931255481%2F&width=500&show_text=false&appId=578903988956921&height=280" width="100%" height="380" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                    </section><!--.widget-time-->
            </div><!--.row-->

        </div>
</div><!--.box-typical-->
                        @endforeach

                    </div><!--.tab-pane-->
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Videos</div><!--.tab-pane-->
                </div><!--.tab-content-->
            </section>

@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
