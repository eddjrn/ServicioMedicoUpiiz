@extends('layout')

<?php
	$classSize = "col-lg-4 col-md-4 col-sm-6";
	$classSizeModal = "col-lg-6 col-md-6";
?>

@section('title')
<title>Perfil de usuario</title>
@stop

@section('css')
@stop

@section('popUp')

@stop

@section('subHead')
Perfil de usuario
@stop

@section('content')

@include('shared.userData')

@stop

@section('scripts')
    <script src="{{asset('/Template/js/lib/select2/select2.full.min.js')}}"></script>
@stop 
