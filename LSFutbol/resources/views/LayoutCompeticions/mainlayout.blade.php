<html>
<head>
    <title>Layout @yield('title')</title>
    @yield('cssimportados')
</head>
<body>
    @yield('content')
</body>
<footer style="align-items: flex-end !important;">
	<table class="table">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">Dragomir</th>
		  <th scope="col">Galinov</th>
		  <th scope="col">d.galinov.d.salle@gmail.com</th>
		  <th scope="col"><?php echo date("D M d");?></th>
		</tr>
		<tr>
		  <th scope="col">Renzo</th>
		  <th scope="col">Luna</th>
		  <th scope="col">renzo.luna.liendo@gmail.com</th>
		  <th scope="col"><?php echo date("D M d");?></th>
		</tr>
	  </thead>
	</table>
</footer>
</html>
