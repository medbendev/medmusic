@extends('layout')

@section('css')
<link href="{{ asset('css/create.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
@include('/partial/navbar')
@endsection

@section('title','music')

@section('content')

<form class="form-horizontal" method="GET" action="/musics/{{ $music->id }}/edit" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
    <button type="submit" class="btn btn-info">Edit</button>
  </div>
</form>


<div class="content">
  <div class="form-group">
    <label class="control-label col-sm-2" for="title">Title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" name="title" value="{{ $music->title }}" disabled>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="artist">Artist:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="artist" name="artist" value="{{ $music->artist->name }}" disabled>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="album">Album:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="album" name="album" value="{{ $music->year }}" disabled>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="year">Year:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="year" name="year" value="{{ $music->title }}" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="genre">Genre:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="genre" name="genre" value="{{ $music->genre }}" disabled>
    </div>
  </div>


</div> 

@endsection