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


                        <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://www.virginia.org/uploadedImages/virginiaorg/Images/OrgImages/H/HamptonConventionVisitorBureau/Grandview_Nature_Preserve.jpg?width=300&height=200&scale=upscalecanvas" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://www.virginia.org/uploadedImages/virginiaorg/Images/OrgImages/H/HamptonConventionVisitorBureau/Grandview_Nature_Preserve.jpg?width=300&height=200&scale=upscalecanvas" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" /></div>
        <div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" /></div>
    </div>
</div>       


                    </div><!--.tab-pane-->
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">Videos</div><!--.tab-pane-->
                </div><!--.tab-content-->
            </section>

@stop

@section('scripts')
    <script src="Template/js/lib/select2/select2.full.min.js"></script>
@stop
