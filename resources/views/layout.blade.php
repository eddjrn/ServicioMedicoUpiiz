<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	@yield('title')
	
	@yield('css')

	<link href="Template/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="Template/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="Template/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="Template/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="Template/img/favicon.png" rel="icon" type="image/png">
	<link href="Template/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
    <link rel="stylesheet" href="Template/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="Template/css/main.css">
</head>

<body class="horizontal-navigation">
@yield('popUp')

@unless($index==4)
    <header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="Template/img/logo upiiz estilo ipn_small2.png" alt="">
	            <img class="hidden-lg-up" src="Template/img/logo upiiz estilo ipn_small3.png" alt="">
	        </a>       
	        
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        
	        <div class="site-header-content">
	        
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
                        
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="Template/img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Configuración</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-share"></span>Facebook</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Sitio UPIIZ</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
	                        </div>
	                    </div>
	                    
	                    <a href="#" class="site-logo">
                            <img class="hidden-md-down" src="Template/img/escudo ipn negro_small.png" alt="">
                        </a>
	                    
	                </div><!--.site-header-shown-->
	                
	                <span class="lbl hidden-md-down" style="font-size:25px">Unidad Profesional Interdisciplinaria de Ingeniería Campus Zacatecas</span>
                    <span class="lbl hidden-lg-up" style="font-size:25px">UPIIZ-IPN</span>
                    
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->
	
	<div class="mobile-menu-left-overlay"></div>
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
			<a class="nav-link @if($index==4)active @endif" href="/login">Iniciar sesión</a>
		</li>
	</ul>
	
	<div class="page-content">
		<div class="container-fluid">
            <h3 class="with-border text-center">@yield('subHead')</h3>
            
            @yield('content')
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endUnless

	<script src="Template/js/lib/jquery/jquery.min.js"></script>
	<script src="Template/js/lib/tether/tether.min.js"></script>
	<script src="Template/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="Template/js/plugins.js"></script>
	
	@yield('scripts')

<script src="Template/js/app.js"></script>
</body>
</html> 
