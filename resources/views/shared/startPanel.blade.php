<!-- start popUp -->
<div class="modal fade"
        id="myModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<div class="row">
            		<div class="col-lg-1 col-md-1">
				    	<div class="tbl-cell tbl-cell-photo">
				            <a >
				                <img src="{{asset('/Template/img/avatar.svg')}}" alt="" style="height:50px;width:auto;" id="photoUser" class="round">
				            </a>
				        </div>
		            </div>
		            <div class="col-lg-11 col-md-11">
		            	<h4 class="modal-title" id="myModalLabel"></h4>
               			 <p class="color-blue-grey-lighter" id="userModal"> </p>
		            </div>
                </div>
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
            </div>
            <div class="modal-body" id="bodyModal"></div>
            <div class="modal-footer">
                <p class="color-blue-grey-lighter" id="dateModal"> </p>
            </div>
        </div>
    </div>
</div><!--.modal-->

<!-- end popUp -->

<!-- start content -->

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <article class="card-typical">
            <div class="card-typical-section">
                <div class="user-card-row">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <p class="user-card-row-name">Carteles del más recientes</p>
                            <p class="color-blue-grey-lighter">Últimos {{$images->count()}}</p>
                        </div>
                        <div class="tbl-cell tbl-cell-status">
<!--                             <a href="#" class="glyphicon glyphicon-plus"></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-typical-section card-typical-content">
                <div id="carouselExampleIndicators" class="carousel slide text-center" data-ride="carousel">
                    <?php
                        $index2 = 0;
                    ?>
                    <ol class="carousel-indicators hidden-xs-down" style="z-index:3;">
                        @foreach($images as $image)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$index2}}" class="btn btn-primary-outline btn-sm @if($index2 == 0) active @endif"></li>
                        <?php
                            $index2++;
                        ?>
                        @endforeach
                    </ol>

                    <?php
                        $index2 = 0;
                    ?>
                    <div class="carousel-inner" role="listbox">
                        @foreach($images as $image)
                        <div class="carousel-item  @if($index2 == 0) active @endif">
                            <header class="title"><a href="{{$image->imagen}}" target="_blank">{{$image->titulo}}</a></header>
                            <article class="gallery-item">
                                <img class="gallery-picture d-block img-fluid img-size" src="{{$image->imagen}}" alt="{{$image->titulo}}">
                                <div class="gallery-hover-layout">
                                    <div class="gallery-hover-layout-in">
                                        <p class="gallery-item-title">{{$image->titulo}}</p>
                                        <p>Autor: {{$image->user}}</p>
                                        <div class="btn-group">
                                            <a href="{{$image->imagen}}" class="btn" target="_blank">
                                                <i class="font-icon font-icon-eye"></i>
                                            </a>
                                        </div>
                                        <p>Fecha de actualización: {{$image->FechaActualizacion()}}</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php
                            $index2++;
                        ?>
                        @endforeach
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-6">
                            <a class="btn btn-sm" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="font-icon font-icon-arrow-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6">
                            <a class="btn btn-sm" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="font-icon font-icon-arrow-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <br/>
                    <br/>
                </div>
            </div>
        </article><!--.card-typical-->
    </div>
</div>
<br/>

<h4 class="with-border text-center">
Avisos <span class="label label-pill label-default"><strong>{{$messages->count()}}</strong></span>
@if(Auth::check() && isset($messages2)) / Mensajes <span class="label label-pill label-default"><strong>{{$messages2->count()}}</strong></span> @endif
</h4>

<div class="container">
    <div class="row" >
        @foreach($messages as $message)
        <div class="col-lg-3 col-md-4 col-sm-6 tasks-grid-col purple">
            <section class="box-typical task-card task">
                <!--<div class="task-card-photo">
                    <img src="/Template/img/img-task.jpg" alt="">
                </div>-->
                <div class="task-card-in">
                    <div class="task-card-title">
                        {{$message->titulo}}
                        <br/>
                        <span class="task-card-title-label">{{$message->usuario()}}</span>
                        <br/>
                        <span class="task-card-title-label">{{$message->destino()}}</span>
                        <br/>
                        <br/>
                        <div class="progress-compact-style-label">{{$message->contenido}}</div>
                    </div>
                </div>

                <div class="task-card-footer">
                    <div class="task-card-meta-item"><i class="font-icon font-icon-calend"></i>{{$message->dateUpdate()}}</div>

                    <div class="avatar-preview avatar-preview-32">
                        <a >
                            <img src="{{$message->user->foto}}" alt="">
                        </a>
                    </div>
                </div>
            </section><!--.task-card-->
        </div> <!--col-->
        @endforeach

        @if(Auth::check() && isset($messages2))
            @foreach($messages2 as $message)
            <div class="col-lg-3 col-md-4 col-sm-6 tasks-grid-col red">
                <section class="box-typical task-card task">
                    <!--<div class="task-card-photo">
                        <img src="/Template/img/img-task.jpg" alt="">
                    </div>-->
                    <div class="task-card-in">
                        <div class="task-card-title">
                            {{$message->titulo}}
                            <br/>
                            <span class="task-card-title-label">{{$message->usuario()}}</span>
                            <br/>
                            <span class="task-card-title-label">{{$message->destino()}}</span>
                            <br/>
                            <br/>
                            <div class="progress-compact-style-label">{{$message->contenido}}</div>
                        </div>
                    </div>

                    <div class="task-card-footer">
                        <div class="task-card-meta-item"><i class="font-icon font-icon-calend"></i>{{$message->dateUpdate()}}</div>

                        <div class="avatar-preview avatar-preview-32">
                            <a >
                                <img src="{{$message->user->foto}}" alt="">
                            </a>
                        </div>
                    </div>
                </section><!--.task-card-->
            </div> <!--col-->
            @endforeach
        @endif
    </div><!--row-->
</div>

<h4 class="with-border text-center">Información reciente <span class="label label-pill label-default"><strong>{{$infos->count()}}</strong></span></h4>

<div class="container">
    <div class="row">
        @foreach($infos as $info)
            <div class="col-lg-4 col-md-6" style="padding:20px;">
                <article class="card-typical">
                    <div class="card-typical-section">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a >
                                        <img src="{{$message->user->foto}}" alt="">
                                    </a>
                                </div>
                                <div class="tbl-cell">
                                    <p class="user-card-row-name"><a href="#">{{$info->user}}</a></p>
                                    <p class="color-blue-grey-lighter">{{$info->FechaActualizacion()}}</p>
                                </div>
                                <div class="tbl-cell tbl-cell-status">
                                    <a class="font-icon font-icon-eye" data-toggle="modal" data-target="#myModal" onclick="update('{{$info->user}}', '{{$info->FechaActualizacion()}}', '{{$info->titulo}}', '{{$info->contenido}}', '{{$message->user->foto}}');"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-typical-section card-typical-content">
                        <header class="title"><a href="#">{{$info->titulo}}</a></header>
                        <p>{{str_limit($info->contenido, $limit = 255, $end = "...")}}</p>
                    </div>
                    <div class="card-typical-section">
                        <div class="card-typical-linked"><a href="{{$info->user->facebook}}" target="_blank">Facebook</a></div>
                    </div>
                </article><!--.card-typical-->
            </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
        <section class="widget">
            <header class="widget-header-dark">Mapas del IMSS</header>
            <div class="tab-content widget-tabs-content">
                <div class="tab-pane active" id="w-1-tab-1" role="tabpanel">
                    <center>
                        {!!$subdel->mapa!!}
                    </center>
                </div>
                <div class="tab-pane" id="w-1-tab-2" role="tabpanel">
                    <center>
                        {!!$clinic1->mapa!!}
                    </center>
                </div>
                <div class="tab-pane" id="w-1-tab-3" role="tabpanel">
                    <center>
                        {!!$clinic2->mapa!!}
                    </center>
                </div>
                <div class="tab-pane" id="w-1-tab-4" role="tabpanel">
                    <center>
                        {!!$clinic3->mapa!!}
                    </center>
                </div>
            </div>
            <div class="widget-tabs-nav bordered">
                <ul class="tbl-row" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#w-1-tab-1" role="tab">
                            <i class="font-icon font-icon-map"></i>
                            <div class="hidden-sm-down">Sub Delegación</div>
                            <div class="hidden-md-up">Sub Del.</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-1-tab-2" role="tab">
                            <i class="font-icon font-icon-map"></i>
                            <div class="hidden-sm-down">{{$clinic1->name()}} ({{$clinic1->place->nombre}})</div>
                            <div class="hidden-md-up">{{$clinic1->name()}}</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-1-tab-3" role="tab">
                            <i class="font-icon font-icon-map"></i>
                            <div class="hidden-sm-down">{{$clinic2->name()}} ({{$clinic2->place->nombre}})</div>
                            <div class="hidden-md-up">{{$clinic2->name()}}</div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#w-1-tab-4" role="tab">
                            <i class="font-icon font-icon-map"></i>
                            <div class="hidden-sm-down">{{$clinic3->name()}} ({{$clinic3->place->nombre}})</div>
                            <div class="hidden-md-up">{{$clinic3->name()}}</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section><!--.widget-->
    </div>
    <div class="col-lg-1 col-md-12">
        <p class="color-blue-grey-lighter">*Información de los mapas con sus respectivas rutas desde la escuela</p>
    </div>
</div>

<!-- end content -->
