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
                                        Subir
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
       				<div class="row">
       					<section class="widget widget-accordion" id="accordion" role="tablist" aria-multiselectable="true">
						<article class="panel">
							<div class="panel-heading" role="tab" id="headingOne">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
									Informacion
									<i class="font-icon font-icon-arrow-down"></i>
								</a>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-collapse-in">
									<div class="user-card-row">
									<form class="form-horizontal">
 
    <div class="form-group">
        <label class="control-label col-xs-3">Titulo:</label>
        <div class="col-xs-9">
    <form action="{{route('guardar')}} method="POST">
            <input type="text" class="form-control" placeholder="Titulo" name="titulo" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Texto:</label>
        <div class="col-xs-9">
            <textarea rows="5" class="form-control" placeholder="Contenido" name="contenido" ></textarea>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
           <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="hidden" name="_token" value="{{Session::token()}}"></input>
            <input type="reset" class="btn btn-default" value="Limpiar"></form>
            </form>
            

        </div>
    </div>
</form>


									</div>
								</div>
							</div>
						</article>
						<article class="panel">
							<div class="panel-heading" role="tab" id="headingTwo">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Imagenes
									<i class="font-icon font-icon-arrow-down"></i>
								</a>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
								<div class="panel-collapse-in">
									<div class="user-card-row">
									<form class="form-horizontal">

    <div class="form-group">
        <label class="control-label col-xs-3">Titulo:</label>
        <div class="col-xs-9">
    <form action="{{route('Iguardar')}} method="POST"> 
            <input type="text" class="form-control" placeholder="Titulo" name="titulo" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Link de la Imagen:</label>
        <div class="col-xs-9">
            <textarea rows="5" class="form-control" placeholder="Link" name="imagen" ></textarea>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
           <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="hidden" name="_token" value="{{Session::token()}}"></input>
            <input type="reset" class="btn btn-default" value="Limpiar">
            </form>
        </div>
    </div>
</form>

									</div>
								</div>
							</div>
						</article>
						<article class="panel">
							<div class="panel-heading" role="tab" id="headingThree">
								<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Collapsible Group Item #3
									<i class="font-icon font-icon-arrow-down"></i>
								</a>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
								<div class="panel-collapse-in">
									<div class="user-card-row">
										<div class="tbl-row">
											<div class="tbl-cell tbl-cell-photo">
												<a href="#">
													<img src="img/avatar-2-64.png" alt="">
												</a>
											</div>
											<div class="tbl-cell">
												<p class="user-card-row-name"><a href="#">Maurico Estrella</a></p>
												<p class="user-card-row-location">Associate Creative Director @EF</p>
											</div>
										</div>
									</div>
									<header class="title">How a password changed my life</header>
									<p>«How could she do something like this to me?» said a voice in my head. All the time. Every day... <a href="#">More</a></p>
								</div>
							</div>
						</article>
					</section>
       				</div>
                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">

                    </div><!--.tab-pane-->


                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">

                    </div><!--.tab-pane-->

                </div><!--.tab-content-->



           
	<!--id : </br>
	<input type="text" name="usuario_id" value=""><br>
	Titulo : </br>
	<input type="text" name="titulo" value=""><br>
	contenido: </br>
	<input type="text" name="contenido" value=""><br>
	<input type="submit" value="Ingresar"></input>
	<input type="hidden" name="_token" value="{{Session::token()}}"></input>
	-->


@stop

@section('scripts')
@stop
