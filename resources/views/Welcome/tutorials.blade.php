@extends('layout')

@section('title')
<title>Inicio Servicio Medico Tutoriales</title>
@stop

@section('css')
@stop

@section('subHead')
Servicio Medico Upiiz
@stop

@section('content')


<section class="tabs-section">
                <div class="tabs-section-nav tabs-section-nav-icons">
                    <div class="tbl">
                        <ul class="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-list-square"></span>
                                        Informacion
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--.tabs-section-nav-->

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tabs-1-tab-1" class="col-md-5 col-xs-6 " >
       
						<div class="container-fluid">

							<div class="row">
                         @foreach($tutorials->sortByDesc('updated_at') as $t)
                            <div class="col-md-1"></div>
                                 <div class="col-md-2">
                           <div class="gallery-col">
                           
                            <article class="gallery-item">
                            <p ALIGN=center ><strong>{{$t->titulo}}</strong></p>
                                <img class="gallery-picture" src="{{$t->imagen}}" alt="" height="158">
                                <div class="gallery-hover-layout">
                                    <div class="gallery-hover-layout-in">
                                        <p class="gallery-item-title">{{$t->titulo}}</p>
                                        <div class="btn-group">
                                            
                                                <a target="_blank" class="font-icon font-icon-picture" href="{{$t->link}}"></a>
                                               
                                           
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        </div>
                       @endforeach
                    
                        </div>

       						 </div>

                    </div><!--.tab-pane-->

                </div><!--.tab-content-->
            </section>


@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
