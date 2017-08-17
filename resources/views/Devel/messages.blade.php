@extends('Devel.layout3')

@section('title')
<title>Mensajes creados</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
Mensajes creados <span class="label label-pill label-default"><strong>{{$messages->count()}}</strong></span>
@stop

@section('content')

@include('shared.messagesView')

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
            document.getElementById('saveButton').setAttribute('formaction', '{{asset("/person/messageEdit")}}/'+id);
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
            document.getElementById('saveButton').setAttribute('formaction', '{{asset("/person/messageDel")}}');
            document.getElementById('saveButton').setAttribute('class', 'btn btn-rounded btn-danger');
            document.getElementById('saveButton').innerHTML = 'Eliminar';
        }
    </script>
@stop
