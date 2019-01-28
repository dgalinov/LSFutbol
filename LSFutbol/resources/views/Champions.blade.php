@extends('layouts.mainlayout')
@section('title','competicions')
@section('cssimportados')
    <title>Competicions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('content')
    <h3>Competicions</h3>
	<table class="table">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Equip - 1</th>
		  <th scope="col">Gols Equip - 1</th>
		  <th scope="col">Equip - 2</th>
		  <th scope="col">Gols Equip - 2</th>
		  <th scope="col">Competició</th>
		  <th scope="col">Temporada</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		@foreach($listaCompeticions as $competicions)
			<th>{{$competicions->competicions}}</th>
		@endforeach
		</tr>
	  </tbody>
	</table>
	
@endsection
