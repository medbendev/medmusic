@extends('layout')

@section('css')
	<link href="{{ asset('css/home.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
	@include('/partial/navbar')
@endsection

@section('title','home')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 pb-2">
      <div class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" :src="t1.jpg" alt="Un tigre">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" :src="img/t2.jpg" alt="Un tigre">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/t3.jpg" alt="Un tigre">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 text-center">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label id="first" class="btn btn-success">
          <input type="radio"><span class="fa fa-fast-backward"></span>
        </label>
        <label id="previous" class="btn btn-success">
          <input type="radio"><span class="fa fa-step-backward"></span>
        </label>
        <label id="pause" class="btn btn-success">
          <input type="radio"><span class="fa fa-pause"></span>
        </label>
        <label id="play" class="btn btn-success active">
          <input type="radio" checked><span class="fa fa-play"></span>
        </label>
        <label id="next" class="btn btn-success">
          <input type="radio"><span class="fa fa-step-forward"></span>
        </label>
        <label id="last" class="btn btn-success">
          <input type="radio"><span class="fa fa-fast-forward"></span>
        </label>
      </div>
    </div>
  </div>
</div>

@endsection
