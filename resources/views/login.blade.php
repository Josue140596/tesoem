<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/vistas-style/login_style.css">
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/global.css">

<section class="section-login">
	<p class="titles ">Bienvenido</p>
	<div class="content-form">
		<form method="POST">
		{{csrf_field()}}
			<label>Nombre</label>
			<br />
			<input type="text" />
			<br/>
			<label>Matricula</label>
			<br />
			<input type="text" />
			<br />
			<label>Contraseña</label>
			<br/>
			<input type="password" />
			<br/>
			<label>Tipo de usuario</label>
			<br/>
			<select name="semestre">
				<option value="1">Alumno</option>
				<option value="2">Profesor</option>

			</select>
			<br/>
			<input class="btn-login" type="submit" value="Entrar" />
			<br/>
			<p class="text-info-log">
				si aún no estas registrado
				
				<br/>
				<a href="/registro">Click Aquí</a>
			</p>



		</form>

	</div>

</section>