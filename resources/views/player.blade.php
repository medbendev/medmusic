@extends('layout')

@section('css')
<!-- <link href="{{ asset('css/allmusic.css') }}" rel="stylesheet">  -->
@endsection

@section('navbar')
	@include('/partial/navbar')
@endsection

@section('title','player')

@section('content')

<div align="center">
   <object class="embed-responsive-item">
     <audio controls autoplay loop >
       <source src="{{route('0lwQTmRlCwJkgAkBx9pqpUrfLC9Gnp9bjR0WP1Vs.mpga')}}" />
     </audio>
   </object>
 </div>

@endsection