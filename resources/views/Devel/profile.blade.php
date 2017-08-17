@extends('Devel.layout3')

@section('title')
<title>Perfíl servicio medico</title>
@stop

@section('css')
@stop

@section('popUp')

@include('shared.profileCard')

@stop

@section('subHead')
@stop

@section('content')
Hola
@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/hide-show-password/bootstrap-show-password.min.js')}}"></script>
    <script src="{{asset('/Template/js/lib/hide-show-password/bootstrap-show-password-init.js')}}"></script>

    <script>
    	$(document).ready(function(){
        	checkPosition();
        });

        function checkPosition() {
		    if (window.matchMedia('(max-width: 768px)').matches) {
		        $('.img-size').css({
		            'height':'170px',
		            'width':'auto',
		            'margin':'auto',
		        });
		    } else {
		        $('.img-size').css({
		            'height':'350px',
		            'width':'auto',
		            'margin':'auto',
		        });
		    }
		}
    </script>
@stop
