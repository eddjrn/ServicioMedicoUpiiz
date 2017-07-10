<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	@yield('title')
	
	@yield('css')

	<link href="/Template/img/favicon.144x144.png" rel="apple-touch-icon" type="/image/png" sizes="144x144">
	<link href="/Template/img/favicon.114x114.png" rel="apple-touch-icon" type="/image/png" sizes="114x114">
	<link href="/Template/img/favicon.72x72.png" rel="apple-touch-icon" type="/image/png" sizes="72x72">
	<link href="/Template/img/favicon.57x57.png" rel="apple-touch-icon" type="/image/png">
	<link href="/Template/img/favicon.png" rel="icon" type="image/png">
	<link href="/Template/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
    <link rel="stylesheet" href="/Template/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="/Template/css/main.css">
</head>

<body class="horizontal-navigation">
@yield('popUp')

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

@unless($index==4) <!--= No se muestra la cabecera-->
    <header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="/Template/img/logo upiiz estilo ipn_small2.png" alt="">
	            <img class="hidden-lg-up" src="/Template/img/logo upiiz estilo ipn_small3.png" alt="">
	        </a>       
	        
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        
	        <div  class="site-header-content">
	        
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
                        
                        @if(Auth::check()) <!--=Solo se muestra el menu de perfil si se esta iniciado sesion-->
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="/Template/img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="/profile"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" data-toggle="modal" data-target=".bd-example-modal-sm"><span class="font-icon glyphicon glyphicon-cog"></span>Configuración</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="https://www.facebook.com/verodelarosa.medicaupiiz?hc_ref=SEARCH&fref=nf"><span class="font-icon font-icon-share"></span>Facebook</a>
	                            <a class="dropdown-item" href="http://www.zacatecas.ipn.mx/Paginas/Inicio.aspx"><span class="font-icon font-icon-home"></span>Sitio UPIIZ</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="/logout"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
	                        </div>
	                    </div>
	                    @endif
	                    
	                    <a href="#" class="site-logo">
                            <img class="hidden-md-down" src="/Template/img/escudo ipn negro_small.png" alt="">
                        </a>
	                    
	                </div><!--.site-header-shown-->
	                
	                <span class="lbl hidden-md-down" style="font-size:25px">Unidad Profesional Interdisciplinaria de Ingeniería Campus Zacatecas</span>
                    <span class="lbl hidden-lg-up" style="font-size:25px">UPIIZ-IPN</span>
                    
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->
	
	<div class="mobile-menu-left-overlay" ></div> <!--=Index en este caso solo sirve para el estilo CSS-->
	<ul class="main-nav nav nav-inline">
		<li class="nav-item">
			<a class="nav-link @if($index==1)active @endif" href="/">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==2)active @endif" href="/news">Novedades</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==3)active @endif" href="/contact">Contactanos</a>
		</li>
        <li class="nav-item">
			<a class="nav-link @if($index==6)active @endif" href="/tutorials">Tutoriales</a>
		</li>
        <li class="nav-item">
			<a class="nav-link @if($index==9)active @endif" href="/maps">lista de clinicas IMSS</a>
		</li>
		@if(Auth::check())
        <li class="nav-item">
			<a class="nav-link @if($index==7)active @endif" href="/forms">Formularios</a>
		</li>
		<!--<li class="nav-item">
			<a class="nav-link @if($index==8)active @endif" href="/lifeInsurance">Seguro de vida</a>
		</li>-->
		@else
		<li class="nav-item">
			<a class="nav-link @if($index==5)active @endif" href="/login">Iniciar sesión</a>
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

	<script src="/Template/js/lib/jquery/jquery.min.js"></script>
	<script src="/Template/js/lib/tether/tether.min.js"></script>
	<script src="/Template/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/Template/js/plugins.js"></script>
	
	@yield('scripts')

    <script src="/Template/js/app.js"></script>
</body>
</html> 
