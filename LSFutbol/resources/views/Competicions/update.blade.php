@extends('layouts.todolayout')
@section('title','Update')
@section('cssimportados')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection
@section('content')
	<h1>Change It</h1>
	@foreach($listaTareas as $tarea)
	<p>{{$tarea->titulo}}</p>
	<form method="post" action="/todolist/update">
		@csrf
		<input type="text" class="btn btn-primary" name="titulo" id="titulo" placeholder="Introduce un titulo para cambiarlo...">
		<button type="submit" class="btn btn-primary">Volver</button>
	</form>
	@endforeach
@endsection