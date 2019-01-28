@extends('LayoutCompeticions.mainlayout')
@section('title','competicions')
@section('cssimportados')
    <title>Competicions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
@endsection
@section('content')
    <h3>Competicions</h3>
	<p>Clica els butons per obtenir més informació sobre el tema.</p>
	<form method="get" action="Champions">
		<button type="submit" class="btn btn-primary" name="champions" id="champions">Champions</button>
	</form>
	<form method="get" action="Lliga">
		<button type="submit" class="btn btn-primary" name="lliga" id="lliga">Lliga</button>
	</form>
	<form method="get" action="CopaDelRei">
		<button type="submit" class="btn btn-primary" name="copadelrei" id="copadelrei">Copa del Rei</button>
	</form>
@endsection
