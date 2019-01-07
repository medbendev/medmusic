@extends('layout')

@section('css')
<link href="{{ asset('css/create.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
@include('/partial/navbar')
@endsection

@section('title','music')

@section('content')

<form class="form-horizontal" method="POST" action="/musics/{{ $music->id }}" enctype="multipart/form-data">

  @method('PATCH')
  @csrf

  <div class="form-group">
    <button type="submit" class="btn btn-info">Save</button>
  </div>
  

  <div class="form-group">
    <label class="control-label col-sm-2" for="title">Title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $music->title }}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="artist">Artist:</label>
    <div class="col-sm-10">

      <select class="form-control" name="artistsel">
        @foreach($artists as $key=>$artist)
        <option name="artist_{{$artist->id}}" value="{{$artist->id}}" 
          {{ ($artist->id == $music->artist_id) ? "selected=true":"" }}
          >{{$artist->name}}</option>
        @endforeach
      </select>

    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="album">Album:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="album" name="album" placeholder="Enter album" value="{{ $music->album }}">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="year">Year:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="year" name="year" placeholder="Enter year" value="{{ $music->year }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="genre">Genre:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter genre" value="{{ $music->genre }}">
    </div>
  </div>

  <div class="form-group">
    <label for="filepath">Choose file</label>
    <input type="file" class="form-control-file" id="filepath"name='filepath' >
  </div>
  
</form> 

<form class="form" method="POST" action="/musics/{{ $music->id }}" enctype="multipart/form-data">

  @method('DELETE')
  @csrf

  <div class="form-group">    
    <button type="submit" class="btn btn-info">Delete</button>
  </div>
</form>

@endsection