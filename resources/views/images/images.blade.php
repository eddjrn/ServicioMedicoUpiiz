<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Image</title>
</head>
<body>
<form action="/profile/images" method="POST" enctype="multipart/form-data" id="upload">
	{{csrf_field()}}
	<div class="form-group">
		<input type="file" name="foto" class="form-control" required>
	</div>
	<button type="submit" class="btn btn-primary btn-block btn-sm">
		<span class="glyphicon glyphicon-upload"></span>
		actualizar imagen
	</button>
	<div class="form-group">
		<p class="text-muted"> Sube una Fotografia de tu rostro, sin gajas ni pañuelo</p>
	</div>
</form>
</body>
</html>


<div class="panel panel-default">
<div class="panel-heading">Imagen de perfil</div>
<div class="panel-body">
	<img src="{{asset(Auth::user()->foto_route)}}" alt="Tu imagen de perfil" class="img-responsive">
	
</div>
</div>