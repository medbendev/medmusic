@extends('layout')

@section('css')
<link href="{{ asset('css/create.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
@include('/partial/navbar')
@endsection

@section('title','music')

@section('content')

<form class="form-horizontal" method="POST" action="/musics" enctype="multipart/form-data">

  {{ csrf_field() }}

  <div class="form-group">
    <label class="control-label col-sm-2" for="title" >Title:</label>
    <div class="col-sm-10">
      <input required type="text" class="form-control" id="title" name="title" placeholder="Enter title">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="artist">Artist:</label>
    <div class="col-sm-10">
      <select class="form-control" name="artistsel">
         <option value="" selected disabled>Choose an artist</option>
        @foreach($artists as $artist)
        <option name="artist_{{$artist->id}}" value="{{$artist->id}}">{{$artist->name}}</option>
        @endforeach
      </select>

    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="album">Album:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="album" name="album" placeholder="Enter album">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="year">Year:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="year" name="year" placeholder="Enter year">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="genre">Genre:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter genre">
    </div>
  </div>

  <div class="form-group">
    <label for="filepath">Choose file</label>
    <input required type="file" class="form-control-file" id="filepath" name="filepath">
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">Save</button>
    </div>
  </div>
</form> 

@endsection