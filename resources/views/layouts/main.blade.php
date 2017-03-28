<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="{{ elixir('css/app.css') }}">
</head>
<body>
	<header>
		<div class="container">
			Actividad Laravel Alirio, Marin y Lore
		</div>
	</header>
	<div class="container">
        @yield('content')
    </div>
    <footer>
    	<div class="container">
			Copyright © 2017 Alirio, Marin y Lore Todos los derechos reservados | Medellín - Colombia. 
		</div>
    </footer>
</body>
</html>