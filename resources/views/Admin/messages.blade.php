@extends('Admin.layout2')

@section('title')
<title>Mensajes creados</title>
@stop

@section('css')
@stop

@section('popUp')
<div class="modal fade"
        id="myModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <i class="font-icon-close-2"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editar mensaje</h4>
            </div>
            {!!Form::open(array('method'=>'post'))!!}
            <div class="modal-body" id="bodyWindow">
                ...
            </div>
            <div class="modal-footer text-center">
                <button type="submit" class="btn btn-rounded btn-primary" formaction="" id="saveButton">Guardar</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div><!--.modal-->
@stop

@section('subHead')
Mensajes creados <span class="label label-pill label-default"><strong>{{$messages->count()}}</strong></span>
@stop

@section('content')

<div class="container">
    <div class="row" >
        @foreach($messages as $message)
        <div class="col-lg-3 col-md-4 tasks-grid-col @unless($message->destino == null) red @else purple @endunless">
            <section class="box-typical task-card task">
                <!--<div class="task-card-photo">
                    <img src="/Template/img/img-task.jpg" alt="">
                </div>-->
                <div class="task-card-in">
                    <div class="task-card-title">
                        {{$message->titulo}}
                        <br/>
                        <span class="task-card-title-label">{{$message->usuario()}}</span>
                        <br/>
                        @unless($message->destino == null)
                        <span class="task-card-title-label"><a href="{{asset('/admin/lists')}}/{{$message->alumnoId()}}" >{{$message->destino()}}</a></span>
                        @else
                        <span class="task-card-title-label">{{$message->destino()}}</span>
                        @endunless
                        <br/>
                        <br/>
                        <div class="progress-compact-style-label">{{$message->contenido}}</div>
                    </div>
                    
                    <div class="task-card-tags">
                        <div class="row text-center">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <a class="label label-light-grey" data-toggle="modal" data-target="#myModal" onclick="deleteInputs('{{$message->titulo}}', {{$message->id}});">Borrar <i class="font-icon font-icon-trash"></i></a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <a class="label label-light-grey" data-toggle="modal" data-target="#myModal" onclick="updateInputs('{{$message->titulo}}', '{{$message->contenido}}', {{$message->id}});">Editar <i class="font-icon font-icon-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="task-card-footer">
                    <div class="task-card-meta-item"><i class="font-icon font-icon-calend"></i>{{$message->dateUpdate()}}</div>
                    
                    <div class="avatar-preview avatar-preview-32">
                        <a href="#">
                            <img src="{{asset($message->user->foto)}}" alt="">
                        </a>
                    </div>
                </div>
            </section><!--.task-card-->
        </div> <!--col-->
        @endforeach
    </div><!--row-->
</div>

@stop

@section('scripts')
    <script>
        function updateInputs(title, content, id){
            document.getElementById('myModalLabel').innerHTML = 'Editar mensaje';
            document.getElementById('bodyWindow').innerHTML = `\
                <input class="form-control" id="tituloMensaje" placeholder="Título" type="text" name="tituloMensaje" value="${title}">\
                <br/>\
                <textarea rows="4" class="form-control" placeholder="Contenido" id="contenidoMensaje" name="contenidoMensaje">${content}</textarea>\
            `;
            document.getElementById('saveButton').setAttribute('formaction', '{{asset("/admin/messageEdit")}}/'+id);
            document.getElementById('saveButton').setAttribute('class', 'btn btn-rounded btn-primary');
            document.getElementById('saveButton').innerHTML = 'Guardar';
        }
        
        function deleteInputs(title, id){
            document.getElementById('myModalLabel').innerHTML = 'Eliminar mensaje';
            document.getElementById('bodyWindow').innerHTML = `\
                ¿Seguro que desea eliminar el mensaje?\
                <br/>\
                <br/>\
                Título:\
                <input class="form-control" id="tituloMensaje" placeholder="Titulo" type="text" name="tituloMensaje" readonly value="${title}">\
                <input type="hidden" value="${id}" name="message">\
            `;
            document.getElementById('saveButton').setAttribute('formaction', '{{asset("/admin/messageDel")}}');
            document.getElementById('saveButton').setAttribute('class', 'btn btn-rounded btn-danger');
            document.getElementById('saveButton').innerHTML = 'Eliminar';
        }
    </script>
@stop
