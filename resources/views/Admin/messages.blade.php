@extends('Admin.layout2')

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
                        <span class="task-card-title-label">{{$message->destino()}}</span>
                        <br/>
                        <br/>
                        <div class="progress-compact-style-label">{{$message->contenido}}</div>
                    </div>
                </div>
                
                <div class="task-card-footer">
                    <div class="task-card-meta-item"><i class="font-icon font-icon-calend"></i>{{$message->dateUpdate()}}</div>
                    
                    <div class="avatar-preview avatar-preview-32">
                        <a href="#">
                            <img src="/Template/img/photo-64-2.jpg" alt="">
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
@stop
