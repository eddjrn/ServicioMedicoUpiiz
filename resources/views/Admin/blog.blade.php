@extends('Admin.layout2')

@section('title')
<title>Administración servicio medico</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Vista previa del blog
@stop

@section('content')

<section class="tabs-section">
                <div class="tabs-section-nav tabs-section-nav-icons">
                    <div class="tbl">
                        <ul class="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-post"></span>
                                        Noticias
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-picture"></span>
                                        Imagenes
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-video-fill"></span>
                                        Videos
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-play"></span>
                                        Tutoriales
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--.tabs-section-nav-->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1" class="col-md-5 col-xs-6 " >
       
<div class="container-fluid">
@foreach($info->sortByDesc('updated_at') as $inf) 
            <section class="activity-line">
                <article class="activity-line-item box-typical">
                    <div class="activity-line-date border-primary b-a round">
                        {{$inf->dia()}}<br>
                       {{$inf->Mes()}}
                    </div>
                    <header class="activity-line-item-header">
                        <div class="activity-line-item-user">
                            <div class="activity-line-item-user-photo">
                                <a href="#">
                                    <img src="/Template/img/avatar-1-64.png" alt="">
                                </a>
                            </div>
                            <div class="activity-line-item-user-name">{{$inf->user}}</div>
                           
                        </div>
                         </br><div class="activity-line-item-user-status">{{$inf->user->email}}</div>
                    </header>
                    <div class="activity-line-action-list">
                        <section class="activity-line-action">
                            <div class="time">{{$inf->hora()}}</div>
                            <div class="cont">
                                <div class="cont-in">
                                    <div class="activity-line-item-user-name text-shadow "><strong>{{$inf->titulo}}</strong></div>
                                    <ul class="previews">
                                        <div>
                                           <div class="activity-line-item-user-status"></br>{{$inf->contenido}}</div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </section><!--.activity-line-action-->
                       
                    </div><!--.activity-line-action-list-->
                </article><!--.activity-line-item-->

                
            </section><!--.activity-line-->
            @endforeach
            {!!with(new App\Pagination\HDPresenter($info))->render()!!}
        </div>

                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
                        <div class="row">
                            @foreach($images->sortByDesc('updated_at') as $img)
                            <div class="col-lg-3 col-md-4">
                                <article class="gallery-item">
                                    <p class="gallery-item-title text-center">{{$img->titulo}}</p>
                                    <img class="gallery-picture" src="{{$img->imagen}}" alt="{{$img->titulo}}" style="height:200px;width:auto;margin:auto;">
                                    <div class="gallery-hover-layout">
                                        <div class="gallery-hover-layout-in">
                                            <p class="gallery-item-title">{{$img->titulo}}</p>
                                            <p>{{$img->user}}</p>
                                            <div class="btn-group">
                                                <a href="{{$img->imagen}}" target="_blank"><button type="button" class="btn">
                                                    <i class="font-icon font-icon-eye"></i>
                                                </button></a>
                                            </div>
                                            <p>{{$img->FechaActualizacion()}}</p>
                                        </div>
                                    </div>
                                </article>
                                <br/>
                            </div><!--.gallery-col-->
                            @endforeach
                        </div><!--.gallery-col-->
                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">
                        <div class="row">
                            @foreach($video->sortByDesc('update_at') as $vi)
                            <div class="col-lg-3 col-md-4">
                                <article class="gallery-item">
                                    <p class="gallery-item-title text-center">{{$vi->titulo}}</p>
                                    <img class="gallery-picture" src="{{$vi->imagen}}" alt="{{$vi->titulo}}" style="height:200px;width:auto;margin:auto;">
                                    <div class="gallery-hover-layout">
                                        <div class="gallery-hover-layout-in">
                                            <p class="gallery-item-title">{{$vi->titulo}}</p>
                                            <p>{{$vi->user}}</p>
                                            <div class="btn-group">
                                                <a href="{{$vi->link}}" target="_blank"><button type="button" class="btn">
                                                    <i class="font-icon font-icon-play"></i>
                                                </button></a>
                                            </div>
                                            <p>{{$vi->FechaActualizacion()}}</p>
                                        </div>
                                    </div>
                                </article>
                                <br/>
                            </div><!--.gallery-col-->
                            @endforeach
                        </div><!--.gallery-col-->
                    </div><!--.tab-pane-->

                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">
                        <div class="row">
                            @foreach($tutorials->sortByDesc('updated_at') as $t)
                            <div class="col-lg-3 col-md-4">
                                <article class="gallery-item">
                                    <p class="gallery-item-title text-center">{{$t->titulo}}</p>
                                    <img class="gallery-picture" src="{{$t->imagen}}" alt="{{$t->titulo}}" style="height:200px;width:auto;margin:auto;">
                                    <div class="gallery-hover-layout">
                                        <div class="gallery-hover-layout-in">
                                            <p class="gallery-item-title">{{$t->titulo}}</p>
                                            <p>{{$t->user}}</p>
                                            <div class="btn-group">
                                                <a href="{{$t->link}}" target="_blank"><button type="button" class="btn">
                                                    <i class="font-icon font-icon-play"></i>
                                                </button></a>
                                            </div>
                                            <p>{{$t->FechaActualizacion()}}</p>
                                        </div>
                                    </div>
                                </article>
                                <br/>
                            </div><!--.gallery-col-->
                            @endforeach
                        </div><!--.gallery-col-->
                    </div><!--.tab-pane-->

                </div><!--.tab-content-->
            </section>

@stop

@section('scripts')
@stop
