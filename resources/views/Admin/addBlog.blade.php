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
<div class="row">
<section class="tabs-section">
                <div class="tabs-section-nav tabs-section-nav-icons">
                    <div class="tbl">
                        <ul class="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabs-1-tab-1" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-post"></span>
                                        Noticias
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-2" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-picture"></span>
                                        Imagenes
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-3" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-video-fill"></span>
                                        Videos
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabs-1-tab-4" role="tab" data-toggle="tab">
                                    <span class="nav-link-in">
                                        <span class="font-icon font-icon-play"></span>
                                        Tutoriales
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
            <h4>Agregar Publicacion</h4>
        </div>
       {!!Form::open(array('url'=>'/admin/add/info','method'=>'patch'))!!} 
            <form method="post" action="store">
                <p>
                    <input type="text" name="Title" placeholder="Titulo" class="form-control">
                </p>
                <p>
                    <textarea rows="4" name="Content"class="form-control" placeholder="Contenido" class="form-control"></textarea>
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
    <div class="col-md-1 col-sm-3"></div>
    <div class="col-md-10 col-sm-9">
    <div class="tasks-grid-col purple">
        <div class="panel-heading">
            <h4>Lista de Publicaciones</h4>
        </div>

        <div class="tasks-grid-col purple">
            <table class="table box-typical task-card task">
                <thead>
                    <tr>
                        
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Fecha</th>
                        <th>hace cuanto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

    <style type="text/css">
       .table td.text {
    max-width: 177px;
        }
        .table td.text span {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: inline-block;
    max-width: 100%;
}       
       </style>
                    @foreach($info->sortByDesc('updated_at') as $in)
                        <tr>
                            
                            <td>{{$in->titulo}}</td>
                            <td class="text"><span>{{$in->contenido}}</span></td>
                            <td>{{$in->FechaActualizacion()}}</td>
                            <td>{{$in->created_at->diffForHumans()}}</td>
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
                                    <img src="{{asset('/Template/img/avatar.svg')}}" alt="" style="height:40px;width:auto;" id="modalMessagePhoto" class="round">
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
                                <a onclick="toggleInf()" id="more">Mostrar Más</a>
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


           <!-- SEGUNDO-->         <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-2">
                        
                        
                <section class="widget widget-tabs-compact">
                        <div class="tab-content widget-tabs-content">
                            <div class="tab-pane active " id="w-4-tab-3" role="tabpanel" aria-expanded="false">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
        <div class="panel-body">
        <div class="panel-heading">
            <h4>Agregar Imagenes</h4>
        </div>
       {!!Form::open(array('url'=>'/admin/add/images','method'=>'patch'))!!} 
            <form method="post" action="store">
                <p>
                    <input type="text" name="Titulo_De_La_Imagen" placeholder="Titulo" class="form-control">
                </p>
                <p>
                    <textarea rows="4" name="Link_De_Imagen" class="form-control" placeholder="link de la imagen" class="form-control"></textarea>
                </p>
                <p>
                    <input type="submit" id="guardarImg" value="Guardar" class="btn btn-success">
                </p>
            </form>
         {!!Form::close()!!}
        </div>
        </div>
        </div>
                        </div>
                    </div>
                </div>


                            <div class="tab-pane" id="w-4-tab-4" role="tabpanel" aria-expanded="true">
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="tasks-grid-col purple">
        <div class="panel-heading">
            <h4>Lista de Imagenes</h4>
        </div>

        <div class="tasks-grid-col purple">
            <table class="table box-typical task-card task">
                <thead>
                    <tr>
                        
                        <th>Titulo</th>
                        <th>Link</th>
                        <th>Fecha</th>
                        <th>Hace cuanto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images->sortByDesc('updated_at') as $img)
                        <tr>
                            
                            <td>{{$img->titulo}}</td>
                            <td class="text"><span>{{$img->imagen}}</span></td>
                            <td>{{$img->FechaActualizacion()}}</td>
                            <td>{{$img->created_at->diffForHumans()}}</td>
                         <td>

             <!--               
                    <button type="button" 
                        onclick="verImg('{{$img->imagen}}','{{$img->titulo}}')" 
                        data-toggle="modal"
                        data-target=".bd-img-modal-lg"
                        data-size="s"
                        class="btn btn-info">Ver</button>

                <div class="modal fade bd-img-modal-lg"
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
                        
                        <div class="row ">
                   <p ALIGN="center" ><strong id="linTitle" name="linTitle" >{{$img->titulo}}</strong></p>
                            <div class="col-md-3 col-sm-6"></div>
                                 <div class="col-md-6 col-sm-6 ">
                           <div class="gallery-col">
                            <article class="gallery-item">
                                <img class="gallery-picture" src="{{$img->imagen}}" id="linM" name="linM" alt="" weight="80%" height="80%">
                            </article>

                        </div>
                        </div>
                      
                        </div>

                            </div> <!--model boddy-->
                             <!-- 
                        </div>
                    </div>
                </div><!--.modal-->

                <button type="button" 
                        onclick="editarImg('{{$img->imagen}}','{{$img->titulo}}',{{$img->id}})" 
                        data-toggle="modal"
                        data-target=".bd-editados-modal-lg"
                        class="btn btn-incline btn-success">Editar</button>

                <div class="modal fade bd-editados-modal-lg"
                     tabindex="-1"
                     role="dialog"
                     aria-labelledby="mySmallModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" id="edtImg" class="modal-close" data-dismiss="modal" aria-label="Close">
                                    <i class="font-icon-close-2"></i>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Editar</h4>
                            </div>
                            <div class="modal-body">
        {!!Form::open(array('url'=>'/admin/add/images','method'=>'post'))!!}      
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Titulo</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input name="tituloImg" id="tituloImg" type="text" class="form-control"  placeholder="Titulo"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Link: </label>
                        <div class="col-sm-10">
                            <textarea rows="4" id="contenidoImg" name="contenidoImg" class="form-control" placeholder="Link de imagen"></textarea>
                        </div>
                    </div>
                            </div>
                            <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" id="cambiosImg" class="btn btn-rounded btn-warning">Guardar</button>

                            </div>
                            </div>
             <input type="hidden" name="id_postImg" id="id_postImg">
                 {!!Form::close()!!}
                            <div class="modal-footer">
                                <div class="text-center">
                                <a onclick="toggleim()" id="muchImg">Mostrar Más</a>
                                </div>
                            </div>

                         
                  {!!Form::open(array('url'=>'/admin/add/images','method'=>'delete','class'=>'editTablesImg','style'=>'display:none'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">¿Seguro que quiere eliminar el post?</label>
                                </div>
                            </div>
                <input type="hidden" name="id_deleteImg" id="id_deleteImg">
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" id="deleteImg" class="btn btn-rounded btn-danger">Eliminar</button>
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
                                    <a class="nav-link active" data-toggle="tab" href="#w-4-tab-3" role="tab" aria-expanded="false">
                                        <i class="font-icon font-icon-heart"></i>
                                        Agregar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#w-4-tab-4" role="tab" aria-expanded="true">
                                        <i class="font-icon font-icon-users-two"></i>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>





                    </div><!--.tab-pane-->


          <!--Teercero-->          <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-3">


                        <section class="widget widget-tabs-compact">
                        <div class="tab-content widget-tabs-content">
                            <div class="tab-pane active " id="w-6-tab-5" role="tabpanel" aria-expanded="false">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
        <div class="panel-body">
        <div class="panel-heading">
            <h4>Agregar Videos</h4>
        </div>
       {!!Form::open(array('url'=>'/admin/add/video','method'=>'patch'))!!} 
            <form method="post" action="store">
                <p>
                    <input type="text" name="Titulo_Del_Video" placeholder="Titulo" class="form-control">
                </p>
                <p>
                    <textarea rows="4" name="Link_Del_Video" class="form-control" placeholder="link del Video" class="form-control"></textarea>
                </p>
                <p>
                    <textarea rows="4" name="Link_De_la_imagen" class="form-control" placeholder="link de la imagen" class="form-control"></textarea>
                </p>
                <p>
                    <input type="submit" id="guardarVide" value="Guardar" class="btn btn-success">
                </p>
            </form>
         {!!Form::close()!!}
        </div>
        </div>
        </div>
                        </div>
                    </div>
                </div>


        <div class="tab-pane" id="w-6-tab-6" role="tabpanel" aria-expanded="true">
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="tasks-grid-col purple">
        <div class="panel-heading">
            <h4>Lista de Videos</h4>
        </div>

        <div class="tasks-grid-col purple">
            <table class="table box-typical task-card task">
                <thead>
                    <tr>
                        
                        <th>Titulo</th>
                        <th>Link del Video</th>
                        <th>Link de la Imagen</th>
                        <th>Fecha</th>
                        <th>Hace cuanto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($video->sortByDesc('updated_at') as $vi)
                        <tr>
                            
                            <td>{{$vi->titulo}}</td>
                            <td class="text"><span>{{$vi->link}}</span></td>
                            <td class="text"><span>{{$vi->imagen}}</span></td>
                            <td>{{$vi->FechaActualizacion()}}</td>
                            <td>{{$vi->created_at->diffForHumans()}}</td>
                         <td>

                   <!--         
                    <button type="button" 
                        onclick="verVid('{{$vi->titulo}}','{{$vi->link}}','{{$vi->imagen}}')" 
                        data-toggle="modal"
                        data-target=".bd-vid-modal-lg"
                        data-size="s"
                        id="vides"
                        class="btn btn-info">Ver</button>

                <div class="modal fade bd-vid-modal-lg"
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
                        
                        <div class="row">
                   
                            <div class="col-md-3"></div>
                                 <div class="col-md-6">
                           <div class="gallery-col">
                           <p ALIGN=center ><strong id="tituloVi">{{$vi->titulo}}</strong></p>
                            <article class="gallery-item">
                                <img class="gallery-picture" id="linkVi" src="{{$vi->imagen}}" alt="" height="80%">
                            </article>
                        </div>
                        </div>

                        </div>

                        </div>
                        </div>
                      
                        </div>

                            </div> <!--model boddy-->
                             <!-- 
                        </div>
                    </div>
                </div><!--.modal-->

                <button type="button" 
                        onclick="editarVide('{{$vi->titulo}}','{{$vi->link}}','{{$vi->imagen}}',{{$vi->id}})" 
                        data-toggle="modal"
                        data-target=".bd-editadiss-modal-lg"
                        class="btn btn-incline btn-success">Editar</button>

                <div class="modal fade bd-editadiss-modal-lg"
                     tabindex="-1"
                     role="dialog"
                     aria-labelledby="mySmallModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" id="edtVid" class="modal-close" data-dismiss="modal" aria-label="Close">
                                    <i class="font-icon-close-2"></i>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Editar</h4>
                            </div>
                            <div class="modal-body">
        {!!Form::open(array('url'=>'/admin/add/video','method'=>'post'))!!}      
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Titulo</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input name="eTituloVid" id="eTituloVid" type="text" class="form-control"  placeholder="Titulo"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Link del Video: </label>
                        <div class="col-sm-10">
                            <textarea rows="4" id="eContenidoVid" name="eContenidoVid" class="form-control" placeholder="Link del Video"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Link de imagen: </label>
                        <div class="col-sm-10">
                            <textarea rows="4" id="eContenidoVidImg" name="eContenidoVidImg" class="form-control" placeholder="Link de imagen"></textarea>
                        </div>
                    </div>
                            </div>
                            <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" id="cambiosVid" class="btn btn-rounded btn-warning">Guardar</button>

                            </div>
                            </div>
             <input type="hidden" name="id_postVid" id="id_postVid">
        {!!Form::close()!!}
                            <div class="modal-footer">
                                <div class="text-center">
                                <a onclick="toggle()" id="moreVid">Mostrar Más</a>
                                </div>
                            </div>

                 {!!Form::open(array('url'=>'/admin/add/video','method'=>'delete','class'=>'editTablesVideo','style'=>'display:none'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">¿Seguro que quiere eliminar el post?</label>
                                </div>
                            </div>
                <input type="hidden" name="id_deleteVid" id="id_deleteVid">
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" id="deleteVid" class="btn btn-rounded btn-danger">Eliminar</button>
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
                                    <a class="nav-link active" data-toggle="tab" href="#w-6-tab-5" role="tab" aria-expanded="false">
                                        <i class="font-icon font-icon-heart"></i>
                                        Agregar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#w-6-tab-6" role="tab" aria-expanded="true">
                                        <i class="font-icon font-icon-users-two"></i>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                        

                    </div><!--.tab-pane-->


       <!--Cuarto-->          <div role="tabpanel" class="tab-pane fade" id="tabs-1-tab-4">


                        <section class="widget widget-tabs-compact">
                        <div class="tab-content widget-tabs-content">
                            <div class="tab-pane active " id="w-8-tab-7" role="tabpanel" aria-expanded="false">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
        <div class="panel-body">
        <div class="panel-heading">
            <h4>Agregar Tutorial</h4>
        </div>
       {!!Form::open(array('url'=>'/admin/add/tutorials','method'=>'patch'))!!} 
            <form method="post" action="store">
                <p>
                    <input type="text" name="Titulo_Del_Tutorial" placeholder="Titulo" class="form-control">
                </p>
                <p>
                    <textarea rows="4" name="Link_Del_Tutorial" class="form-control" placeholder="link" class="form-control"></textarea>
                </p>
                <p>
                    <textarea rows="4" name="Link_De_la_imagen_Tutorial" class="form-control" placeholder="link de la imagen" class="form-control"></textarea>
                </p>
                <p>
                    <input type="submit" id="guardarTuto" value="Guardar" class="btn btn-success">
                </p>
            </form>
         {!!Form::close()!!}
        </div>
        </div>
        </div>
                        </div>
                    </div>
                </div>


        <div class="tab-pane" id="w-8-tab-8" role="tabpanel" aria-expanded="true">
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="tasks-grid-col purple">
        <div class="panel-heading">
            <h4>Lista de Tutoriales</h4>
        </div>

         <div class="tasks-grid-col purple">
            <table class="table box-typical task-card task">
                <thead>
                    <tr>
                        
                        <th>Titulo</th>
                        <th>Link del Video</th>
                        <th>Link de la Imagen</th>
                        <th>Fecha</th>
                        <th>Hace cuanto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tutorials->sortByDesc('updated_at') as $tu)
                        <tr>
                            
                            <td>{{$tu->titulo}}</td>
                            <td class="text"><span>{{$tu->link}}</span></td>
                            <td class="text"><span>{{$tu->imagen}}</span></td>
                            <td>{{$tu->FechaActualizacion()}}</td>
                            <td>{{$tu->created_at->diffForHumans()}}</td>
                         <td>

                   

                <button type="button" 
                        onclick="editarTutor('{{$tu->titulo}}','{{$tu->link}}','{{$tu->imagen}}',{{$tu->id}})" 
                        data-toggle="modal"
                        data-target=".bd-editadiss1-modal-lg"
                        class="btn btn-incline btn-success">Editar</button>

                <div class="modal fade bd-editadiss1-modal-lg"
                     tabindex="-1"
                     role="dialog"
                     aria-labelledby="mySmallModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" id="edtTutorial" class="modal-close" data-dismiss="modal" aria-label="Close">
                                    <i class="font-icon-close-2"></i>
                                </button>
                                <h4 class="modal-title" id="MyModalLabel">Editar</h4>
                            </div>
                            <div class="modal-body">
        {!!Form::open(array('url'=>'/admin/add/tutorials','method'=>'post'))!!}      
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Titulo</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input name="eTituloTuto" id="eTituloTuto" type="text" class="form-control"  placeholder="Titulo"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Link: </label>
                        <div class="col-sm-10">
                            <textarea rows="4" id="eContenidoTuto" name="eContenidoTuto" class="form-control" placeholder="Link del Video"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Link: </label>
                        <div class="col-sm-10">
                            <textarea rows="4" id="eContenidoTutoImg" name="eContenidoTutoImg" class="form-control" placeholder="Link de imagen"></textarea>
                        </div>
                    </div>
                            </div>
                            <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" id="cambiosTuto" class="btn btn-rounded btn-warning">Guardar</button>

                            </div>
                            </div>
             <input type="hidden" name="id_postTuto" id="id_postTuto">
        {!!Form::close()!!}
                            <div class="modal-footer">
                                <div class="text-center">
                                <a onclick="toggleTuto()" id="moreTuto">Mostrar Más</a>
                                </div>
                            </div>

                 {!!Form::open(array('url'=>'/admin/add/tutorials','method'=>'delete','class'=>'editTablesTuto','style'=>'display:none'))!!}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">¿Seguro que quiere eliminar el post?</label>
                                </div>
                            </div>
                <input type="hidden" name="id_deleteTuto" id="id_deleteTuto">
                        <div class="modal-footer">
                            <div class="text-center">
                                <button type="submit" id="deleteTuto" class="btn btn-rounded btn-danger">Eliminar</button>
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
                                    <a class="nav-link active" data-toggle="tab" href="#w-8-tab-7" role="tab" aria-expanded="false">
                                        <i class="font-icon font-icon-heart"></i>
                                        Agregar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#w-8-tab-8" role="tab" aria-expanded="true">
                                        <i class="font-icon font-icon-users-two"></i>
                                        Editar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                        

                    </div><!--.tab-pane-->



                </div><!--.tab-content-->


            </section>
</div>

@stop

@section('scripts')
<script src="{{asset('/Template/js/custom/vewInfo.js')}}"></script>
<script src="{{asset('/Template/js/custom/vewImg.js')}}"></script>
<script src="{{asset('/Template/js/custom/vewVide.js')}}"></script>
<script src="{{asset('/Template/js/custom/vewTuto.js')}}"></script>
@stop
