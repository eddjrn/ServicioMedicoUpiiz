@extends('Devel.layout3')

@section('title')
<title>Perfíl servicio medico</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> <!--cabecera para que se puedan enviar peticiones POST desde javascript-->
@stop

@section('css')
<link rel="stylesheet" href="{{asset('/Template/css/lib/bootstrap-sweetalert/sweetalert.css')}}"/>
<link  href="{{asset('/Template/css/lib/cropper/cropper.css')}}" rel="stylesheet">
<style>
  img {
    max-width: 100%;
  }
</style>
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
    <script src="{{asset('/Template/js/lib/bootstrap-sweetalert/sweetalert.min.js')}}"></script>

    <script>
        var UrlToPostForm = "{{asset('/person/photoUp/3')}}";
        var UrlToRedirectPage = "{{asset('/person/profile/3')}}";
    </script>

    <script src="{{asset('/Template/js/lib/cropper/cropper.js')}}"></script>
    <script src="{{asset('/Template/js/custom/shared.js')}}"></script>


    <script> /*script para que se puedan enviar peticiones POST desde javascript*/
        $(document).ready(function(){
            checkPosition();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function changeModal(){
            //alert('x');
            $('#photoModal').modal('hide');
            $('#photoModalEdit').modal('show');
        }
    </script>
@stop
