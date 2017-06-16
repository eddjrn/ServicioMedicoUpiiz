@extends('Admin.layout2')

@section('title')
<title>Edición del blog</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Edición del blog
@stop

@section('content')

@include('alerts.formError')

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
       

                    	<section class="widget widget-tabs-compact">
						<div class="tab-content widget-tabs-content">
							<div class="tab-pane active " id="w-2-tab-1" role="tabpanel" aria-expanded="false">
								<div class="user-card-row">
									<div class="tbl-row">
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-5">
		<div class="panel-body">
		<div class="panel-heading">
            <h4>Agregar</h4>
        </div>
       {!!Form::open(array('url'=>'/admin/add/info','method'=>'patch'))!!} 
            <form method="post" action="store">
                <p>
                    <input type="text" name="Title" placeholder="Titulo" class="form-control" required>
                </p>
                <p>
                    <textarea rows="4" name="Content"class="form-control" placeholder="Contenido" class="form-control"required></textarea>
                </p>
                <p>
                    <input type="submit" value="Guardar" class="btn btn-success">
                </p>
            </form>
         {!!Form::close()!!}
        </div>
        </div>
        </div>
						</div>
				    </div>
				</div>


							<div class="tab-pane" id="w-2-tab-2" role="tabpanel" aria-expanded="true">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-9">
	<div class="panel panel-success">
        <div class="panel-heading">
            <h4>Lista de Publicaciones</h4>
        </div>

        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($info->sortByDesc('updated_at') as $in)
                        <tr>
                            
                            <td>{{$in->titulo}}</td>
                            <td>{{$in->contenido}}</td>
                            <td>{{$in->FechaCreacion()}}</td>
                            <td>

                          
                    <button type="button" 
                        onclick="verInfo('{{$in->titulo}}','{{$in->contenido}}','{{$in->dia()}}','{{$in->mes()}}','{{$in->hora()}}')" 
                        data-toggle="modal"
                        data-target=".bd-example-modal-lg"
                        data-size="s"
                        class="btn btn-info">Ver</button>

                <div class="modal fade bd-example-modal-lg"
                     tabindex="-1"
                     role="dialog"
                     aria-labelledby="mySmallModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                                    <i class="font-icon-close-2"></i>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Ver</h4>
                            </div>
                            <div class="modal-body">
                        
          <div class="container-fluid">
            <section class="activity-line">
                <article class="activity-line-item box-typical">
                    <div class="activity-line-date border-primary b-a round " id="lineDate">
                        {{$in->dia()}}<br>
                       {{$in->Mes()}}
                    </div>
                    <header class="activity-line-item-header">
                        <div class="activity-line-item-user">
                            <div class="activity-line-item-user-photo">
                                <a href="#">
                                    <img src="/template/img/photo-64-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="activity-line-item-user-name" id="lineUser" >{{$in->user}}</div>
                            <div class="activity-line-item-user-status" id="lineEmail">{{$in->user->email}}</div>
                        </div>
                    </header>
                    <div class="activity-line-action-list">
                        <section class="activity-line-action">
                            <div class="time" id="lineHour" >{{$in->hora()}}</div>
                            <div class="cont">
                                <div class="cont-in">
                                    <div class="activity-line-item-user-name text-shadow " id="lineTitle"><strong>{{$in->titulo}}</strong></div>
                                    <ul class="previews">
                                        <div>
                                           <div class="activity-line-item-user-status" id="lineContent" >{{$in->contenido}}</div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </section><!--.activity-line-action-->
                       
                    </div><!--.activity-line-action-list-->
                </article><!--.activity-line-item-->

                
            </section><!--.activity-line-->
        </div>

                            </div> <!--model boddy-->
                        </div>
                    </div>
                </div><!--.modal-->

                <button type="button" 
                        onclick="editarInfo('{{$in->titulo}}','{{$in->contenido}}',{{$in->id}})" 
                        data-toggle="modal"
                        data-target=".bd-editar-modal-lg"
                        class="btn btn-incline btn-success">Editar</button>

                <div class="modal fade bd-editar-modal-lg"
                     tabindex="-1"
                     role="dialog"
                     aria-labelledby="mySmallModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                                    <i class="font-icon-close-2"></i>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Editar</h4>
                            </div>
                            <div class="modal-body">
        {!!Form::open(array('url'=>'/admin/add/info','method'=>'post'))!!}      
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Titulo</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input name="Titulo" id="editTitle" type="text" class="form-control"  placeholder="Titulo"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Contenido</label>
                        <div class="col-sm-10">
                            <textarea rows="4" id="editContent" name="Contenido" class="form-control" placeholder="Contenido"></textarea>
                        </div>
                    </div>
                            </div>
                            <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-rounded btn-warning">Guardar</button>

                            </div>
                            </div>
             <input type="hidden" name="id_post" id="id_post">
        {!!Form::close()!!}
                            <div class="modal-footer">
                                <div class="text-center">
                                <a onclick="toggle()" id="more">Mostrar Más</a>
                                </div>
                            </div>

                 {!!Form::open(array('url'=>'/admin/add/info','method'=>'delete','class'=>'editTables','style'=>'display:none'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">¿Seguro que quiere eliminar el post?</label>
                                </div>
                            </div>
                <input type="hidden" name="id_delete" id="id_delete">
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" class="btn btn-rounded btn-danger">Eliminar</button>
                            </div>
                            </div>

                 {!!Form::close()!!}
                        </div>
                
                    </div>
                </div><!--.modal-->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

							</div>
						</div>
						<div class="widget-tabs-nav bordered">
							<ul class="tbl-row" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#w-2-tab-1" role="tab" aria-expanded="false">
										<i class="font-icon font-icon-heart"></i>
										Agregar
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#w-2-tab-2" role="tab" aria-expanded="true">
										<i class="font-icon font-icon-users-two"></i>
										Editar
									</a>
								</li>
							</ul>
						</div>
					</section>


                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
                    	
                    	

                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">

                    	

                    </div><!--.tab-pane-->

                </div><!--.tab-content-->


            </section>


@stop

@section('scripts')
<script src="\Template\js\custom\vewInfo.js"></script>
@stop
