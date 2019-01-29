@extends('LayoutCompeticions.mainlayout')
@section('title','competicions')
@section('cssimportados')
    <title>Competicions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('content')
    <h3>Competicions</h3>
	<p>Clica els butons per obtenir més informació sobre el tema.</p>
	<form method="get" action="/compe">
		<button type="submit" class="btn btn-primary" name="champions" value="Champ">Champions</button>
	</form>
	<form method="get" action="/compe">
		<button type="submit" class="btn btn-primary" name="lliga" value="Lliga">Lliga</button>
	</form>
	<form method="get" action="/compe">
		<button type="submit" class="btn btn-primary" name="copadelrei" value="Copa del Rei">Copa del Rei</button>
	</form>
	<form method="get" action="/create">
		<input type="submit" class="btn btn-primary" id="create" name="create" value="Create" style="margin-right:10px">
	</form>
	<form method="get" action="/compe/delete">
		<input type="submit" class="btn btn-primary" id="delete" name="delete" value="Delete" style="margin-right:10px">
	</form>
	<form method="get" action="/compe/update">
		<input type="submit" class="btn btn-primary" id="update" name="update" value="Update" style="margin-right:10px">
	</form>
@endsection
