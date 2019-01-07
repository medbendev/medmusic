@extends('layout')

@section('css')
<link href="{{ asset('css/create.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
@include('/partial/navbar')
@endsection

@section('title','Create artist')

@section('content')

<form class="form-horizontal" method="POST" action="/artists" enctype="multipart/form-data">

  {{ csrf_field() }}

  <div class="form-group">
    <label class="control-label col-sm-2" for="title" >Name:</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="name" name="name" placeholder="Enter artist name">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">Save</button>
    </div>
  </div>
</form> 

@endsection