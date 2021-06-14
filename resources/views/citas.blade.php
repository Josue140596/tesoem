@extends('layout')

@section('content')
   <!-- Styles -->
   <link rel="stylesheet" type="text/css" href="styles/global.css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="styles/vistas-style/calendario_style.css">

    <div class="contenedor-calendario">
        <div class="calendario" id="calendar"></div>
    </div>
    <!-- Java Script-->
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script  type="text/javascript" src="/js/calendario.js"></script>
    <script type="text/javascript">
        let calendar = new Calendar('calendar');
        calendar.getElement().addEventListener('change', e => {
            console.log(calendar.value().format('LLL'));
        });
    </script>
@endsection