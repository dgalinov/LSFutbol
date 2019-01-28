@extends('LayoutCompeticions.mainlayout')
@section('title','Crear')
@section('cssimportados')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection
@section('content')
    <h1>Crear</h1>
    <form method="get" action="/compe/create">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="temporada" placeholder="Introdueix temporada...">
            <input type="text" class="form-control" name="golslocal" placeholder="Introdueix gols local...">
            <input type="text" class="form-control" name="golsvisitant" placeholder="Introdueix gols visitant...">
            <select name="competicio">
                <option>Champions</option>
                <option>Lliga</option>
                <option>Copa del Gei</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Crear" name="insert">
        </div>
    </form>
    <form method="get" action="/">
        <button type="submit" class="btn btn-primary">Tornar</button>
    </form>
@endsection