<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	
	@yield('title')
	
	

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
    
    @yield('css')
</head>

<body class="horizontal-navigation">
@yield('popUp')

    @unless($index == -1)
    <header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="/Template/img/logo upiiz estilo ipn_small2.png" alt="">
	            <img class="hidden-lg-up" src="/Template/img/logo upiiz estilo ipn_small3.png" alt="">
	        </a>       
	        
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        
	        <div class="site-header-content">
	        
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
	                
                        <div class="dropdown dropdown-notification messages">
                            
                            <?php
                                //$messages = \App\message::all()->where('destino', null)->sortByDesc('updated_at');
                                $messages = Auth::user()->messages->where('destino', null)->sortByDesc('updated_at');
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
	                                    <li class="nav-item">
	                                        <a class="nav-link"
	                                           data-toggle="tab"
	                                           href="#tab-outgoing"
	                                           role="tab">/ Nuevo
	                                           <i class="font-icon font-icon-pen-square"></i>
	                                           </a>
	                                    </li>
	                                </ul>
	                            </div>
	                            <div class="tab-content">
	                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
                                            @foreach($messages->take(4) as $message)
	                                        <a href="#" class="mess-item">
	                                            <span class="avatar-preview avatar-preview-32"><img src="/Template/img/photo-64-2.jpg" alt=""></span>
	                                            <span class="mess-item-name">{{$message->titulo}}</span>
	                                            <span class="mess-item-txt">{{$message->contenido}}</span>
	                                        </a>
	                                        @endforeach
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
	                                    <div class="dropdown-menu-messages-list">
	                                        <a href="#">
                                                {!!Form::open(array('url'=>'/admin', 'method'=>'post'))!!}
	                                            <input class="form-control" id="titulo" placeholder="Título" type="text" name="titulo">
	                                            <br/>
	                                            <textarea rows="2" class="form-control" placeholder="Contenido" id="contenido" name="contenido"></textarea>
	                                            <br/>
	                                            <div class="text-center">
                                                    <button type="submit" class="btn btn-rounded btn-inline btn-primary btn-sm">Envíar</button>
	                                            </div>
	                                            {!!Form::close()!!}
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="dropdown-menu-notif-more">
	                                <a href="/admin/messages">Ver más</a>
	                            </div>
	                        </div>
	                    </div>
	                
	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="/Template/img/LogoSMadmin.svg" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="/admin/profile"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
	                            <a class="dropdown-item" href="/admin/config"><span class="font-icon glyphicon glyphicon-cog"></span>Configuración</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="/logout"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
	                        </div>
	                    </div>
	                    
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
	
	<div class="mobile-menu-left-overlay"></div> <!--=Index en este caso solo sirve para el estilo CSS-->
	<ul class="main-nav nav nav-inline">
		<li class="nav-item">
			<a class="nav-link @if($index==5)active @endif" href="/admin">Inicio</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==1)active @endif" href="/admin/blog">Blog</a>
		</li>
		<li class="nav-item">
			<a class="nav-link @if($index==2)active @endif" href="/admin/lists">Listado</a>
		</li>
        <li class="nav-item">
			<a class="nav-link @if($index==3)active @endif" href="/admin/add">Agregar</a>
		</li>
        <li class="nav-item">
			<a class="nav-link @if($index==4)active @endif" href="/admin/search">Buscar</a>
		</li>
        <li class="nav-item">
			<a class="nav-link" href="{{Auth::user()->facebook}}" target="_blank">Facebook</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="http://www.zacatecas.ipn.mx/Paginas/Inicio.aspx" target="_blank">UPIIZ</a>
		</li>
	</ul>
	
	<div class="page-content">
		<div class="container-fluid">
            @include('alerts.sessionAlert')
            @include('alerts.formError')
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
