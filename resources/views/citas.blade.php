@extends('layout')

@section('content')
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/global.css">
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/vistas-style/calendario_style.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="contenedor-calendario">
    <div class="calendario" id="calendar"></div>
</div>


<div class="w3-container">

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-animate-top w3-card-4">
            <div class="barra ">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h2>Agendar citas</h2>
            </div>
            <div class="w3-container">
            <form action="/registro" method="POST">
                {{csrf_field()}}
                <input type="text" name="nombre" placeholder="Nombre"><br><br>
                <input type="text" name="apaterno" placeholder="Apellido Paterno"><br><br>
                <input type="text" name="amaterno" placeholder="Apellido Materno"><br><br>
                <input type="submit" value="Registrarse">

            </form>
            </div>
           
        </div>
    </div>
</div>


<!-- Java Script-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
<script type="text/javascript" src="/js/calendario.js"></script>
<script type="text/javascript">
    let calendar = new Calendar('calendar');
    calendar.getElement().addEventListener('change', e => {
        document.getElementById('id01').style.display='block';
        console.log(calendar.value().format('LLL'));
    });
</script>


@endsection