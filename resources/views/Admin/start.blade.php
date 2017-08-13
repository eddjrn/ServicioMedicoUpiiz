@extends('Admin.layout2')

@section('title')
<title>Inicio Servicio Médico</title>
@stop

@section('css')
@stop

@section('popUp')

@stop

@section('subHead')
<div class="sign-avatar">
    <img src="{{asset('/Template/img/LogoSMadmin.svg')}}" alt="" style="height:120px;width:auto;">
</div>
Bienvenido al servicio médico
@stop

@section('content')

@include('shared.startPanel')

@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/salvattore/salvattore.min.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            checkPosition();
        });
        
        function checkPosition() {
            if (window.matchMedia('(max-width: 768px)').matches) {
                $('.img-size').css({
                    'height':'180px',
                    'width':'auto',
                    'margin':'auto',
                });
            } else {
                $('.img-size').css({
                    'height':'400px',
                    'width':'auto',
                    'margin':'auto',
                });
            }
        }
        
        function update(user, date,  title, content, photo){
            document.getElementById('myModalLabel').innerHTML = title;
            document.getElementById('bodyModal').innerHTML = content;
            document.getElementById('dateModal').innerHTML = date;
            document.getElementById('userModal').innerHTML = 'Autor: '+user;
            document.getElementById('photoUser').setAttribute('src', photo);
        }
    </script>
@stop
