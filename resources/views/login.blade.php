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
	<!-- Loader -->
	<div id="contenedor_carga">
		<div id="carga"></div>
	</div>

	@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/') }}" class="text-sm text-gray-700 underline">Inicio</a>
                    @else
                        <a href="{{ route('/login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('/registro') }}" class="ml-4 text-sm text-gray-700 underline">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif


	<section class="section-login">
		<p class="titles ">Bienvenido</p>
		<div class="content-form">
			<form method="POST" action="{{ route('login') }}">
				{{csrf_field()}}

				<label>Email</label>
				<br />
				<input id="email"  type="email" name="email" :value="old('email')" required autofocus />
				<br />
				<label>Contraseña</label>
				<br />
				<input  id="password" type="password" name="password" required autocomplete="current-password" />
				<br />
				<label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"  name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

				<div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>

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

	<script>
		window.onload = function() {
			var contenedor = document.getElementById("contenedor_carga");
			console.log("hola");
			contenedor.style.visibility = "hidden";
			contenedor.style.opacity = "0";
		}
	</script>
</body>

</html>