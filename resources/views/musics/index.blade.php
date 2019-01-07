@extends('layout')

@section('css')
<link href="{{ asset('css/allmusic.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
@include('/partial/navbar')
@endsection

@section('title','music')

@section('content')

<div class="container">
<a href="/musics/create" class="btn btn-info" role="button">Add music</a>
	<table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">title</th>
        <th scope="col">artist</th>
        <th scope="col">album</th>
        <th scope="col">year</th>
        <th scope="col">genre</th>
        <th scope="col">added</th>
        <th scope="col">updated</th>
      </tr>
    </thead>
    <tbody>

      @foreach($ziks as $zik)
      <tr>
        <td><span class="glyphicon glyphicon-play" ></span></td>
        <td><a href="/musics/{{ $zik['id'] }}">{{ $zik->title }}</a></td>
        <td>{{ $zik->artist->name }}</td>
        <td>{{ $zik->album }}</td>
        <td>{{ $zik->year }}</td>
        <td>{{ $zik->genre }}</td>
        <td>{{ $zik->created_at->format('d/m/Y') }}</td>
        <td>{{ $zik->updated_at->format('d/m/Y') }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
@endsection