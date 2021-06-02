
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="styles/global.css">

        <title>Tesoem</title>

       

     
    </head>
    <body>
    	<!-- Cabecera -->
    <header>
    	<div class="contenedor">
    		
    		<nav class="menu">
    			<ul>
    				<li><a href="/">Inicio</a></li>
    				<li><a href="/nosotros">Nosotros</a></li>
    				<li><a href="/contacto">Contacto</a></li>
    				<li><a href="/notificaciones">notificaciones</a></li>
    				<li><a href="/login">Login</a></li>
    			</ul>
    		</nav>
  
    	</div>
    </header>
<!-- Contenido -->
    @yield('content')

<!-- Pie de pagina -->
    <footer>
    <div >
        <div >
        <p>Autor: Grupo 8S21</p>
        <p>Carrera: Ingeniria en Sistemas Computacionales</p>
        <p>Materia: Frameworks<a class="secret" href="../admin">.</a></p>

        </div>
    </div>
    </footer>
       
    </body>
</html>
