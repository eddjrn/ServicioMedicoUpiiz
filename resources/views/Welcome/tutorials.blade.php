@extends('layout')

@section('title')
Tutoriales Servicio Medico Tutoriales
@stop

@section('css')
@stop

@section('subHead')
Tutoriales
@stop

@section('content')


<section class="tabs-section">
                <div class="tabs-section-nav tabs-section-nav-icons">
                    <div class="tbl">
                        <ul class="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-play"></span>
                                        Tutoriales IMSS
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--.tabs-section-nav-->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1" class="col-md-5 col-xs-6 " >
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
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
@stop
