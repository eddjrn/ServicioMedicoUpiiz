<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	@yield('title')

	@yield('css')

	<link href="{{asset('/Template/img/favicon.144x144.png')}}" rel="apple-touch-icon" type="/image/png" sizes="144x144">
	<link href="{{asset('/Template/img/favicon.114x114.png')}}" rel="apple-touch-icon" type="/image/png" sizes="114x114">
	<link href="{{asset('/Template/img/favicon.72x72.png')}}" rel="apple-touch-icon" type="/image/png" sizes="72x72">
	<link href="{{asset('/Template/img/favicon.57x57.png')}}" rel="apple-touch-icon" type="/image/png">
	<link href="{{asset('/Template/img/favicon.png')}}" rel="icon" type="image/png">
	<link href="{{asset('/Template/img/favicon.ico')}}" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="{{asset('/Template/css/lib/font-awesome/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/Template/css/main.css')}}">
</head>

<body class="horizontal-navigation">
@yield('popUp')

<div class="modal fade"
        id="modalMessage"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalMessageLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            	<div class="row">
            		<div class="col-lg-1 col-md-1">
				    	<div class="tbl-cell tbl-cell-photo">
				            <a >
				                <img src="{{asset('/Template/img/avatar.svg')}}" alt="" style="height:50px;width:auto;" id="modalMessagePhoto" class="round">
				            </a>
				        </div>
		            </div>
		            <div class="col-lg-11 col-md-11">
		            	<h4 class="modal-title" id="modalMessageLabel"></h4>
               			 <p class="color-blue-grey-lighter" id="modalMessageUser"> </p>
		            </div>
                </div>
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
            </div>
            <div class="modal-body" id="modalMessageBody"></div>
            <div class="modal-footer">
                <p class="color-blue-grey-lighter" id="modalMessageDate"> </p>
            </div>
        </div>
    </div>
</div><!--.modal-->


@if(Auth::check()) <!--muestra el dialogo de Contraseña solo si esta iniciado sesion-->
<div class="modal fade bd-example-modal-sm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="windowTitle">¿Desea editar?</h4>
            </div>
            {!!Form::open(array('url'=>'/profile/check', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="clave">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-danger" id="formButton">Editar datos</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->
@endif

@if(Auth::check()) <!--muestra el dialogo de Contraseña solo si esta iniciado sesion-->
<div class="modal fade bd-examplee-modal-sm"
        tabindex="-1"
        role="dialog"
        aria-labelledby="mySmallModalLabel"
        aria-hidden="true"
        >
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="windowTitle">¿Desea Cambiar contraseña?</h4>
            </div>
            {!!Form::open(array('url'=>'/profile/check1', 'method'=>'post'))!!}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label" for="hide-show-password">Contraseña</label>
                    <input type="password" class="form-control" value="" name="clave">
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" class="btn btn-rounded btn-primary btn-danger" id="formButton">Cambiar Contraseña</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->
@endif

@unless($index==4) <!--= No se muestra la cabecera-->
    <header class="site-header">
	    <div class="container-fluid">
	        <a class="site-logo">
	            <img class="hidden-md-down" src="{{asset('/Template/img/logo upiiz estilo ipn_small2.png')}}" alt="">
	            <img class="hidden-lg-up" src="{{asset('/Template/img/logo upiiz estilo ipn_small3.png')}}" alt="">
	        </a>

	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>

	        <div  class="site-header-content">

	            <div class="site-header-content-in">
	                <div class="site-header-shown">

                        @if(Auth::check()) <!--=Solo se muestra el menu de perfil si se esta iniciado sesion-->
						<div class="dropdown dropdown-notification messages">

                            <?php
                                $messages = \App\message::all()->where('destino', Auth::user()->student->id)->sortByDesc('updated_at');
                                //$messages = Auth::user()->messages->where('destino', null)->sortByDesc('updated_at');
                            ?>

	                        <a href="#"
	                           class="header-alarm dropdown-toggle @if($messages->count() >= 1) active @endif"
	                           id="dd-messages"
	                           data-toggle="dropdown"
	                           aria-haspopup="true"
	                           aria-expanded="false">
	                            <i class="font-icon-mail"></i>
	                        </a>
	                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
	                            <div class="dropdown-menu-messages-header">
	                                <ul class="nav" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active"
	                                           data-toggle="tab"
	                                           href="#tab-incoming"
	                                           role="tab">
	                                            Avisos
	                                            <span class="label label-pill @if($messages->count() >= 1) label-danger @endif">{{$messages->count()}}</span>
	                                        </a>
	                                    </li>
	                                </ul>
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
                                            @foreach($messages->take(4) as $message)
	                                        <a onclick="updateModalMessage('{{$message->user}}', '{{$message->dateUpdate()}}', '{{$message->titulo}}', '{{$message->contenido}}', '{{$message->user->foto}}');" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32">
	                                            	<img src="{{$message->user->foto}}" alt="">
	                                            </span>
	                                            <span class="mess-item-name">{{$message->titulo}}</span>
	                                            <span class="mess-item-txt">{{$message->contenido}}</span>
	                                        </a>
	                                        @endforeach
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="{{asset('/')}}">Ver más</a>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="{{Auth::user()->foto}}" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="{{asset('/profile')}}"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="font-icon glyphicon glyphicon-cog"></span>Configuración</a>
	                            <a class="dropdown-item" data-toggle="modal" data-target=".bd-examplee-modal-sm"><span class="font-icon font-icon-refresh"></span>Cambiar Contraseña</a>


	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" target="_blank" href="{{config('globalInfo.facebookUpiiz')}}"><span class="font-icon font-icon-share"></span>Facebook</a>
	                            <a class="dropdown-item" target="_blank" href="{{config('globalInfo.webUpiiz')}}"><span class="font-icon font-icon-home"></span>Sitio UPIIZ</a>

	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="{{asset('/logout')}}"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
	                        </div>
	                    </div>
	                    @endif

	                    <a class="site-logo">
                            <img class="hidden-md-down" src="{{asset('/Template/img/escudo ipn negro_small.png')}}" alt="">
                        </a>

	                </div><!--.site-header-shown-->

	                <span class="lbl hidden-md-down" style="font-size:25px;margin: 0 0 10px -150px;">{{config('globalInfo.nombreUpiiz')}}</span>
                    <span class="lbl hidden-lg-up" style="font-size:25px">{{config('globalInfo.nombreUpiiz2')}}</span>

	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay" ></div> <!--=Index en este caso solo sirve para el estilo CSS-->
	<ul class="main-nav nav nav-inline">
		<li class="nav-item">
			<a class="nav-link @if($index==1)active @endif" href="{{asset('/')}}">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==2)active @endif" href="{{asset('/news')}}">Novedades</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==3)active @endif" href="{{asset('/contact')}}">Contactanos</a>
		</li>
        <li class="nav-item">
			<a class="nav-link @if($index==6)active @endif" href="{{asset('/tutorials')}}">Tutoriales</a>
		</li>
        <li class="nav-item">
			<a class="nav-link @if($index==9)active @endif" href="{{asset('/maps')}}">lista de clinicas IMSS</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==12)active @endif" href="{{asset('/credits')}}">Creditos</a>
		</li>
		@if(Auth::check())
        <li class="nav-item">
			<a class="nav-link @if($index==7)active @endif" href="{{asset('/forms')}}">Formularios</a>
		</li>
		<!--<li class="nav-item">
			<a class="nav-link @if($index==8)active @endif" href="/lifeInsurance">Seguro de vida</a>
		</li>-->
		@else
		<li class="nav-item">
			<a class="nav-link @if($index==5)active @endif" href="{{asset('/login')}}">Iniciar sesión</a>
		</li>
		@endif
	</ul>

	<div class="page-content">
		<div class="container-fluid">
            @include('alerts.sessionAlert')
            @include('alerts.formError')
            @include('alerts.sessionMessages')
            <h3 class="with-border text-center">@yield('subHead')</h3>
            @yield('content')
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endunless

	<script src="{{asset('/Template/js/lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('/Template/js/lib/tether/tether.min.js')}}"></script>
	<script src="{{asset('/Template/js/lib/bootstrap/bootstrap.min.js')}}"></script>
	<script src="{{asset('/Template/js/plugins.js')}}"></script>

	@yield('scripts')

    <script src="{{asset('/Template/js/app.js')}}"></script>

	<script>
		function updateModalMessage(user, date,  title, content, photo){
			document.getElementById('modalMessageLabel').innerHTML = title;
			document.getElementById('modalMessageBody').innerHTML = content;
			document.getElementById('modalMessageDate').innerHTML = date;
			document.getElementById('modalMessageUser').innerHTML = 'Autor: '+user;
			document.getElementById('modalMessagePhoto').setAttribute('src', photo);
			$('#modalMessage').modal('show');
		}
	</script>
</body>
</html>
