@extends('layout')

@section('title')
<title>Noticias Servicio Medico</title>
@stop

@section('css')
@stop

@section('subHead')
Novedades
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
                        </ul>
                    </div>
                </div><!--.tabs-section-nav-->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1" class="col-md-5 col-xs-6 " >

<div class="container-fluid">
@foreach($info->sortByDesc('updated_at') as $inf)
            <section class="activity-line">
                <article class="ribbon-block round relative text-center tasks-grid-col purple">
                    <div class="activity-line-date border-primary b-a round box-typical task-card task">
                        {{$inf->dia()}}<br>
                       {{$inf->Mes()}}
                    </div>
                    <header class="activity-line-item-header">
                        <div class="activity-line-item-user">
                            <div class="activity-line-item-user-photo">
                                <a href="#">
                                    <img src="{{asset('/Template/img/avatar.svg')}}" alt="" style="height:50px;width:auto;" id="modalMessagePhoto" class="round">
                                </a>
                            </div>
                            <div class="activity-line-item-user-name">{{$inf->user}}</div>
                        </div>
                            <div class="activity-line-item-user-status"></br>{{$inf->user->email}}</div>
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
       <!-- {{!!$info->render()!!}} -->


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

                </div><!--.tab-content-->
            </section>

@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
@stop
