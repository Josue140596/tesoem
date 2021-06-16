
@extends('layout')

@section('content')



<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/vistas-style/inicio_style.css">



<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/vistas-style/nosotros_style.css">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<script src="/js/caruseljs.js"></script>
<link rel="stylesheet" type="text/css" href="styles/vistas-style/notificaciones_style.css">


<section class="noti-general">

    <p class="titles title-carousel">General</p>
    <div class="wrapper">



        <div class="carousel">
            @if($notificaciones)
                @forelse($notificaciones as $notificacion)
                    @forelse($catnotificaciones as $catnotificacion)
                        @if($notificacion->id_categoria === $catnotificacion->id_categoria)
                            <div>
                                <div class="card">
                                    <div class="card-header">
                                    <img src="/notificaciones_imagenes/{{ $notificacion->imagen_referencial }}" style="width:480px; height:438px; padding:15px;">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="card-title">{{ $catnotificacion->categoria }}</div>
                                            <div class="card-text">
                                                <h1> Desde: {{ $notificacion->fecha_inicio }}</h1>
                                                <h3> Hasta: {{ $notificacion->fecha_final}}</h3>
                                                <p>{{ $notificacion->descripcion }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </div>                        
                        @endif
                    @empty
                    @endforelse
                @empty
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="/img/logoteso.png">
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="card-title">No existen notificaciones</div>
                                    <div class="card-text">
                                        <h1>No hay notificaciones por el momento</h1>
                                        <h3>Quiza sea un error</h3>
                                        <p>Intenta mas tarde</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            @endif

        </div>

    
    </div>


</section>
<section class="noti-profesores">

    <div class="content-img-title">
        <p class="titles">Alumnos</p>
        <img src="/img/carousel/UsuarioEstudiante.png" width="320px"/>

    </div>

    <div class="wrapper">


      
        <div class="carousel">
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           


        </div>

     
    </div>

</section>
<section class="noti-alumnos">
<div class="content-img-title">
        <p class="titles">Profesores</p>
        <img src="/img/carousel/UsuarioProfesor.png" width="320px"/>

    </div>
    <div class="wrapper">


        <div class="carousel">
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="/img/logoteso.png">
                    </div>
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-title">esta es la primera</div>
                            <div class="card-text">
                                <h1>titulo</h1>
                                <h3>subtitulo</h3>
                                <p>Invitación a cuando menos 3 personas para contratar el servicio integral de limpieza en oficinas del estado de Veracruz. Invitación a cuando menos tres personas para contratar el servicio de vigilancia en oficinas de Baja California Sur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
          


        </div>

      
    </div>


</section>

@endsection


