@extends('LayoutCompeticions.mainlayout')
@section('title','Eliminar')
@section('cssimportados')
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection
@section('content')
	<h1>Eliminar</h1>
	@foreach($listaCompeticions as $tarea)
	<p>{{$tarea->competicio}}</p>
	<form method="post" action="/compe/{{$tarea->IDpartit}}">
		@csrf
		@method('delete')
		<button type="submit" class="btn btn-primary">Eliminar</button>
	</form>
	@endforeach
@endsection