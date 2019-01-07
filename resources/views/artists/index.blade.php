@extends('layout')

@section('css')
<link href="{{ asset('css/allmusic.css') }}" rel="stylesheet"> 
@endsection

@section('navbar')
@include('/partial/navbar')
@endsection

@section('title','Artists')

@section('content')

<div class="container">
<a href="/artists/create" class="btn btn-info" role="button">Add artist</a>
	<table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">added</th>
        <th scope="col">updated</th>
      </tr>
    </thead>
    <tbody>

      @foreach($artists as $artist)
      <tr>
        <td><a href="/artists/{{ $artist['id'] }}">{{ $artist->name }}</a></td>
        <td>{{ $artist->created_at->format('d/m/Y') }}</td>
        <td>{{ $artist->updated_at->format('d/m/Y') }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
@endsection