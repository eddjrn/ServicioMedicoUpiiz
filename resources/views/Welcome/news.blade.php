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
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1" class="col-md-5 col-xs-6 " >
       
<div class="container-fluid">
@foreach($info->sortByDesc('updated_at') as $info) 
            <section class="activity-line">
                <article class="activity-line-item box-typical">
                    <div class="activity-line-date border-primary b-a round">
                        {{$info->dia()}}<br>
                       {{$info->Mes()}}
                    </div>
                    <header class="activity-line-item-header">
                        <div class="activity-line-item-user">
                            <div class="activity-line-item-user-photo">
                                <a href="#">
                                    <img src="/template/img/photo-64-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="activity-line-item-user-name">{{$info->user}}</div>
                            <div class="activity-line-item-user-status">{{$info->user->email}}</div>
                        </div>
                    </header>
                    <div class="activity-line-action-list">
                        <section class="activity-line-action">
                            <div class="time">{{$info->hora()}}</div>
                            <div class="cont">
                                <div class="cont-in">
                                    <div class="activity-line-item-user-name text-shadow "><strong>{{$info->titulo}}</strong></div>
                                    <ul class="previews">
                                        <div>
                                           <div class="activity-line-item-user-status"></br>{{$info->contenido}}</div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </section><!--.activity-line-action-->
                       
                    </div><!--.activity-line-action-list-->
                </article><!--.activity-line-item-->

                
            </section><!--.activity-line-->
            @endforeach
        </div>

                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
                    	
                    	<div class="row ">
                        @foreach($images->sortByDesc('updated_at') as $img) 
                            <div class="col-md-1 col-sm-6"></div>
                                 <div class="col-md-2 col-sm-6 ">
                           <div class="gallery-col">
                           <p ALIGN=center ><strong>{{$img->titulo}}</strong></p>
                            <article class="gallery-item">
                                
                                <img class="gallery-picture" src="{{$img->imagen}}" alt="" height="158">
                                <div class="gallery-hover-layout">
                                    <div class="gallery-hover-layout-in">
                                        <p class="gallery-item-title">{{$img->titulo}}</p>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                <a target="_blank" class="font-icon font-icon-picture" href="{{$img->imagen}}"></a>
                                               
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        </div>
                        @endforeach
                        </div>



                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">

                    	<div class="row">
                        @foreach($video->sortByDesc('update_at') as $vi) 
                            <div class="col-md-1"></div>
                                 <div class="col-md-2">
                           <div class="gallery-col">
                           <p ALIGN=center ><strong>{{$vi->titulo}}</strong></p>
                            <article class="gallery-item">
                            
                                <img class="gallery-picture" src="{{$vi->imagen}}" alt="" height="158">
                                <div class="gallery-hover-layout">
                                    <div class="gallery-hover-layout-in">
                                        <p class="gallery-item-title">{{$vi->titulo}}</p>
                                        <div class="btn-group">
                                            <button type="button" class="btn">
                                                <a target="_blank" class="font-icon font-icon-picture" href="{{$vi->link}}"></a>
                                               
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        </div>
                        @endforeach
                        </div>


                    </div><!--.tab-pane-->

                </div><!--.tab-content-->
            </section>

@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
