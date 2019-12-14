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
<embed src="{{ asset('files/manual_de_uso.pdf') }}" width=100% height=720 
 type='application/pdf'>
</div>
</div>

<script>
$(document).ready(function(){
    $("#back-icon").attr("href", "{{ url('/web/info-list/'.$userid.'/'.$mode.'/'.$type.'/'.$code) }}");
	$("#exit-icon").attr("href", "{{ url('/web/info-list/'.$userid.'/'.$mode.'/'.$type.'/'.$code) }}");
});
</script>

@stop


