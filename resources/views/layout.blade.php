
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="styles/global.css">

        <!-- Title pestaña navegador -->
        <title>Tesoem</title>

        <!-- style icon font awesome -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     
    </head>
    <body>
    	<!-- Cabecera -->
    <header >
    	
    		
    		<nav class="menu-nav">
    			<ul>
    				<li><a href="/">Inicio</a></li>
    				<li><a href="/nosotros">Nosotros</a></li>
    				<li><a href="/contacto">Contacto</a></li>
    				<li><a href="/notificaciones">Notificaciones</a></li>
    				<li><a href="/login">Login</a></li>
    			</ul>
    		</nav>
  
    	
    </header>
<!-- Contenido -->
    <main>

        @yield('content')
    </main>

<!-- Pie de pagina -->
    <footer>

    <div class="content-uno">

    

        <!-- Información de contacto -->
        <div class="informa-contacto-content">
            <p>Información <br/> de contacto</p>
            <br/>
            Paraje San Isidro s/n Barrio
                 de Tecamachalco,
                <br/> La Paz C.P.56400 <br/>
                ( 55 ) 59863497 ext. 118
                 tesoem@tesoem.edu.mx
           
        </div>
        <!-- Siguenos -->
        <div class="siguenos-content">
            <p>Siguenos</p>
            <div>
                <i class="fab fa-facebook"></i>  Facebook
            </div>
            <br/>
            <br/>
            <div>
                <i class="fab fa-twitter-square"></i>  Twitter
            </div>

        </div>
        <!-- Envianos un msnj -->
        <div class="envianos-content">
            <p>
            Envianos un mensaje
            </p>
            <!-- formulario para enviar al correo -->
            <form>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="mail" name="email" placeholder="Email"><br><br>
            <input type="text" name="aunto" placeholder="Asunto"><br><br>
            <textarea name="mnsj" rows="10" cols="50">Escribe tu mensaje aquí...</textarea>
            <br/>
            <br/>
            <input class="btn" type="submit" value="Enviar" />
            </form>

            
        </div>

    </div>
    <!-- Información del pie de página -->
    <div class="info-pie-pagina">
        <hr/>
        <br/>
        <p>Copyright ©2021 Grupo 8S21. All rights reserved</p>      
        <br/>
        <br/>
    </div>
    

        <!-- formato SVG wave -->
        <div class="wave" style="height: 700px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-3.10,21.20 C126.12,88.31 364.27,-75.48 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #686868;"></path></svg></div>
    </footer>
       
    </body>
</html>
