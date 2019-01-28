@extends('layouts.todolayout')
@section('title','Delete')
@section('cssimportados')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection
@section('content')
	<h1>Delete</h1>
	@foreach($listaTareas as $tarea)
	<p>{{$tarea->titulo}}</p>
	<form method="post" action="/Competicions/{{$tarea->id}}">
		@csrf
		@method('delete')
		<button type="submit" class="btn btn-primary">Delete</button>
	</form>
	@endforeach
@endsection