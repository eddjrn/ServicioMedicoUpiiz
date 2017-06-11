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
            <form method="post" action="store">
                <p>
                    <input type="text" name="name" placeholder="Titulo" class="form-control" required>
                </p>
                <p>
                    <textarea rows="4" name="informacion"class="form-control" placeholder="Contenido" class="form-control"required></textarea>
                </p>
                <p>
                    <input type="submit" value="Guardar" class="btn btn-success">
                </p>
            </form>
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
                        <th>No</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>
                                <a href=""><span class="label label-info">Ver</span></a>
                                <a href=""><span class="label label-success">Editar</span></a>
                                <a href=""><span class="label label-danger">Eliminar</span></a>
                            </td>
                        </tr>
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
@stop
