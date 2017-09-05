@unless(isset($edit))
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
              <h4 class="modal-title" id="myModalLabel">¿Desea editar el perfíl de administrador?</h4>
          </div>
          <?php $url = '/person/profile/'.$type; ?>
          {!!Form::open(array('url'=>$url, 'method'=>'post'))!!}
          <div class="modal-body">
              <div class="form-group">
                  <label class="form-label" for="hide-show-password">Contraseña</label>
                  <input id="hide-show-password" type="password" class="form-control" value="" name="clave">
              </div>
          </div>
          <div class="modal-footer">
              <div class="text-center">
                  <button type="submit" class="btn btn-rounded btn-primary btn-danger">Editar datos</button>
              </div>
          </div>
          {!!Form::close()!!}
      </div>
  </div>
</div><!--.modal-->
@else
<div class="modal fade"
      id="photoModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="photoModalLabel"
      aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                  <i class="font-icon-close-2"></i>
              </button>
              <h4 class="modal-title" id="myModalLabel">Cambiar foto de perfil</h4>
          </div>
          <div class="modal-body text-center">
              <div class="widget-user-photo">
				<img src="{{Auth::user()->foto}}" alt="" class="img-size round">
			</div>
          </div>
          <div class="modal-footer text-center">
          	<div class="row">
          		<div class="col-lg-6 col-md-6 col-sm-6">
					<button type="submit" class="btn btn-rounded btn-inline btn-warning" onclick="changeModal();">Cambiar foto</button>
				</div>
                {!!Form::open(array('method'=>'post'))!!}
                <input type="hidden" value="{{$user->id}}" name="user">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<button type="submit" class="btn btn-rounded btn-inline btn-danger" formaction="{{asset('/person/photoDel/'.$type)}}">Eliminar foto</button>
				</div>
                {!!Form::close()!!}
			</div>
		</div>
      </div>
  </div>
</div><!--.modal-->

<div class="modal fade"
      id="myModalFace"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalFaceLabel"
      aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                  <i class="font-icon-close-2"></i>
              </button>
              <h4 class="modal-title" id="myModalLabel">¿Cómo pongo el link de Facebook?</h4>
          </div>
          <div class="modal-body text-center">
              <img src="{{asset('/Template/img/Facebookprocess.gif')}}" class="img-size round">
          </div>
      </div>
  </div>
</div><!--.modal-->

<div class="modal fade"
      id="photoModalEdit"
      tabindex="-1"
      role="dialog"
      aria-labelledby="photoModalEditLabel"
      aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                  <i class="font-icon-close-2"></i>
              </button>
              <h4 class="modal-title" id="myModalLabel">Nueva foto de perfil</h4>
          </div>
          <div class="modal-body text-center">
              <div class="widget-user-photo">
              <img id="image" src="{{asset('/Template/img/pic.jpg')}}" alt="Picture" class="img-size">
             </div>
          </div>
          <div class="modal-footer text-center">
             <input type="hidden" value="{{$user->id}}" name="user">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6">
                   <button id="reset" class="btn btn-rounded btn-inline btn-primary"><span class="fa fa-refresh"></span></button>
                   <button id="rotateRight" class="btn btn-rounded btn-inline btn-primary"><span class="fa fa-rotate-right"></span></button>
                   <button id="rotateLeft" class="btn btn-rounded btn-inline btn-primary"><span class="fa fa-rotate-left"></span></button>

                   <label class="btn btn-rounded btn-inline btn-primary btn-upload" for="inputImage" title="Upload image file">
                     <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif">
                     <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                       <span class="fa fa-upload"></span>
                     </span>
                   </label>
                 </div>
               <div class="col-lg-6 col-md-6 col-sm-6">
                   <button id="crop" class="btn btn-rounded btn-inline btn-success">Guardar <span class="fa fa-crop"></span></button>
               </div>
             </div>
             <small class="text-muted">Utilice los controles para ajustar la imagen, haga doble click sobre la imagen para arrastarla.</small>
          </div>
      </div>
  </div>
</div><!--.modal-->
@endunless

<div class="page-center">
  <div class="page-center-in">
      <div class="container-fluid">
          @if(isset($edit))
          <?php $url = '/person/profile/'.$type; ?>
          {!!Form::model($user, array('url'=>$url, 'method'=>'patch', 'class'=>'sign-box'))!!}
              <div class="sign-avatar">
                  <a data-toggle="modal" data-target="#photoModal"><img src="{{Auth::user()->foto}}" alt=""></a>
              </div>
              <small class="text-muted">Para cambiar foto de perfil haga click sobre la imagen.</small>
              <br/>

              @include('alerts.formError')

              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Nombre(s)</label>
                  {!!Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ej: Nombre1 Nombre2'])!!}
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Apellido paterno</label>
                  {!!Form::text('apellidoPaterno', null, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido'])!!}
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Apellido materno</label>
                  {!!Form::text('apellidoMaterno', null, ['class'=>'form-control', 'placeholder'=>'Ej: Apellido'])!!}
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Correo electrónico</label>
                  {!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ej: ejemplo@correo.com'])!!}
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Facebook</label>
                  <div class="input-group">
                      {!!Form::text('facebook', null, ['class'=>'form-control', 'placeholder'=>'Link de Facebook', 'id'=>'facebook'])!!}
                      <div class="input-group-addon">
                          <a data-toggle="modal" data-target="#myModalFace"><span class="font-icon font-icon-eye"></span></a>
                      </div>
                  </div>
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Identificación</label>
                  {!!Form::text('identificacion', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxxxxxxx'])!!}
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Repetir identificación</label>
                  {!!Form::text('identificacion2', null, ['class'=>'form-control', 'placeholder'=>'Ej: xxxxxxxx'])!!}
              </div>
              <div class="form-group">
                  <label class="form-label" for="hide-show-password">Contraseña</label>
                  <input id="hide-show-password" type="password" class="form-control" value="" name="clave">
              </div>
              <div class="form-group">
                  <label class="form-label" for="hide-show-password">Repetir contraseña</label>
                  <input id="hide-show-password2" type="password" class="form-control" value="" name="clave2">
              </div>

              <button type="submit" class="btn btn-rounded btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm">Actualizar perfíl</button>

              <a href="{{asset($urlToCancel)}}"><button type="button" class="close">
                  <span aria-hidden="true">&times;</span>
              </button></a>
          {!!Form::close()!!}
          @else
           <form class="sign-box">
              <div class="sign-avatar">
                  <img src="{{Auth::user()->foto}}" alt="">
              </div>
              <header class="sign-title">{{$user}}</header>

              @include('alerts.formError')
              @include('alerts.sessionAlert')

              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Tipo de usuario</label>
                  <input type="text" class="form-control" readonly placeholder="" value="{{$user->tipo}}"/>
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Correo electrónico</label>
                  <input type="text" class="form-control" readonly placeholder="" value="{{$user->email}}"/>
              </div>
              <div class="form-group">
                  <label class="form-label" for="exampleInputDisabled2">Identificación</label>
                  <input type="text" class="form-control" readonly placeholder="" value="{{$user->identificacion}}"/>
              </div>

              <header class="sign-title">{{$user->origen}}</header>

              <button type="button" class="btn btn-rounded btn-warning" data-toggle="modal" data-target=".bd-example-modal-sm">Editar perfíl</button>
              @unless($user->facebook == null)
              <p class="sign-note"><a href="{{$user->facebook}}" target="_blank">Facebook</a></p>
              @endunless

              <a href="{{asset($urlToCancel)}}"><button type="button" class="close">
                  <span aria-hidden="true">&times;</span>
              </button></a>
          </form>
          @endif
      </div>
  </div>

</div><!--.page-center-->
