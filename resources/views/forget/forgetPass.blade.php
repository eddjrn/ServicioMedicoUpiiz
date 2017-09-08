@extends('layout')

@section('title')
<title>Olvide mi Contraseña</title>
@stop

@section('css')
@stop

@section('popUp')
@stop

@section('subHead')
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-2">
            <div class="form-group input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button" id="info" placeholder="Ingresa Tu Boleta">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-rounded btn-inline btn-secondary" onclick="identification(2);" >Buscar</button>
                </div>
            </div>
        </div>
    </div>
</div>

{!!Form::open(array('url'=>'/forgetPass', 'method'=>'post', 'id'=>'forms'))!!}
    <input type="hidden" id="opc" name="opc">
    <input type="hidden" id="busqueda" name="busqueda">
{!!Form::close()!!}

@if(isset($user))    
    <div class="container">
        <div class="row">
            <section class="widget widget-activity">
                <header class="widget-header">
                    Resultados
                </header>
                <div>
                @foreach($user as $u)
                    @unless($u->completado() == 0)
                    <div class="widget-activity-item">
                        <div class="user-card-row">
                            <div class="tbl-row">
                                <div class="tbl-cell tbl-cell-photo">
                                    <a href="#">
                                        <img src="{{$u->foto}}" alt="">
                                    </a>
                                </div>
                                <div class="tbl-cell">
                                    <p>
                                        <a href="{{asset('/forget/questionPass')}}/{{$u->student->id}}" class="semibold">{{$u}}</a>
                                    </p>
                                   
                                    <p>
                                        Correo: {{$u->email}}
                                    </p>
                                    <p>
                                        Boleta: {{$u->identificacion}}
                                    </p>
                                    <p>
                                        Carrera: {{$u->student->carrer->nombre}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endunless
                @endforeach
                </div>
            </section><!--.widget-tasks-->
        </div>
    </div>
@endif

@stop

@section('scripts')
<script src="{{asset('/Template/js/custom/search.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@stop
