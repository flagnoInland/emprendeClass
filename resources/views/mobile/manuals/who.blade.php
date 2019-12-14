@extends('layouts.layout01')

@section('header')
<link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/board.min.css')}}" rel="stylesheet" type="text/css">
@stop

@section('content')
@include('toolbars.toolbar-2btn')
<br/>
<div class="manual">
<div class="container manual-wrapper">
	<br/>
	<div class="text-center">
	<h4 id="title"><b>COMITÉ CONSULTIVO</b></h4>
	</div>
	<br/>
	<div id="content">
	EmprendeClass es un esfuerzo conjunto de varios profesionales, representado por la Sociedad del Emprendimiento Co-Innovador S.A.C. , organización debidamente registrada en SUNARP y SUNAT.<br/><br/>

<ul>
<li>Presidente de directorio: Ronnie Guerra Portocarrero</li>
<li>Miembro del directorio: Luis Angel Huamán Salazar (Gerente General)</li>
<li>Miembro del directorio: Carlos Vera Gutiérrez</li>
<li>Miembro del directorio: Wilder Fuertes Vara</li>
</ul>
Web: <a href="https://emprendimientocoinnovador.org">https://emprendimientocoinnovador.org </a>
<br/>
Email: <a href="emprendedor@coinnovador.org"> emprendedor@coinnovador.org</a>
</div>
</div>

<script>
$(document).ready(function(){
    $("#back-icon").attr("href", "{{ url('/web/info-list/'.$userid.'/'.$mode.'/'.$type.'/'.$code) }}");
	$("#exit-icon").attr("href", "{{ url('/web/info-list/'.$userid.'/'.$mode.'/'.$type.'/'.$code) }}");
});
</script>

@stop