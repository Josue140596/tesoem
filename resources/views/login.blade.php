<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="styles/vistas-style/login_style.css">
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="styles/global.css">



	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('/img/logfav.png') }}">


	<!-- Title pestaña navegador -->
	<title>Entrar</title>

	<!-- style icon font awesome -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

	<section class="section-login">
		<p class="titles ">Bienvenido</p>
		<div class="content-form">
			<form method="POST">
				{{csrf_field()}}
				<label>Nombre</label>
				<br />
				<input type="text" />
				<br />
				<label>Matricula</label>
				<br />
				<input type="text" />
				<br />
				<label>Contraseña</label>
				<br />
				<input type="password" />
				<br />
				<label>Tipo de usuario</label>
				<br />
				<select name="semestre">
					<option value="1">Alumno</option>
					<option value="2">Profesor</option>

				</select>
				<br />
				<input class="btn-login" type="submit" value="Entrar" />
				<br />
				<p class="text-info-log">
					si aún no estas registrado

					<br />
					<a href="/registro">Click Aquí</a>
				</p>



			</form>

		</div>

	</section>
</body>
</html>