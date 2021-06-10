@extends('layout')

@section('content')


<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{asset('/js/carrusel.js')}}"></script>
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="styles/vistas-style/inicio_style.css">

<!-- Inicio section -->
<section class="inicio-section">

    <!--Waves background SVG  -->
    <div class="wave-inicio-2" style="height: 280px; overflow: hidden;"><svg viewBox="0 0 1200 400" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0 240.48L37.565 191.788C76.2683 143.096 151.398 45.7112 227.667 13.2496C303.935 -19.2119 379.065 13.2496 455.333 53.8265C531.602 94.4035 606.732 143.096 683 159.327C759.268 175.557 834.398 159.327 910.667 199.903C986.935 240.48 1062.07 337.865 1138.33 378.442C1214.6 419.019 1289.73 402.788 1328.43 394.673L1366 386.557V435.25H1328.43C1289.73 435.25 1214.6 435.25 1138.33 435.25C1062.07 435.25 986.935 435.25 910.667 435.25C834.398 435.25 759.268 435.25 683 435.25C606.732 435.25 531.602 435.25 455.333 435.25C379.065 435.25 303.935 435.25 227.667 435.25C151.398 435.25 76.2683 435.25 37.565 435.25H0V240.48Z" fill="#A3C185" />
        </svg></div>
    <div class="wave-inicio-1" style="height: 280px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-0.84,17.27 C149.99,150.00 252.54,-90.28 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #a3c1857c;"></path>
        </svg></div>
    <div class="content-titles-and-img">
        <h1 class="title-inicio">Tecnológico de Estudios Superiores<br /> del Oriente del Estado de México</h1>

        <svg class="img-inicio" id="b94fe11c-0eb8-406f-a1d9-ebff5bfd142f" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="813.30959" height="791.71631" viewBox="0 0 813.30959 791.71631">
            <path d="M915.60388,754.03231s.62171-13.02673,13.36643-11.51257" transform="translate(-193.3452 -54.14185)" fill="#3f3d56" />
            <circle cx="718.65761" cy="681.11524" r="6.37865" fill="#a3c185" />
            <rect x="717.6197" y="691.85651" width="1.80054" height="12.60376" fill="#3f3d56" />
            <path d="M482.565,371.06183q0,4.785-.31006,9.49a143.75416,143.75416,0,0,1-13.46972,52.19c-.06006.14-.13037.27-.18994.4-.36036.76-.73047,1.52-1.11036,2.27a142.0365,142.0365,0,0,1-7.6499,13.5,144.462,144.462,0,0,1-118.56006,66.72l1.43018,82.24,18.6499-9.82,3.33008,6.33-21.83984,11.5,2.66992,152.74.02978,2.04-14.41992,3.21.02979-2.05,4.54-246.18a144.17479,144.17479,0,0,1-102-44.38c-.90966-.94-1.81-1.91-2.68994-2.87-.04-.04-.06982-.08-.10009-.11a144.76739,144.76739,0,0,1-26.33985-40.76c.14014.16.29.31.43018.47a144.642,144.642,0,0,1,68.57959-186.38c.5-.25,1.01025-.49,1.51025-.74a144.752,144.752,0,0,1,187.52979,56.93c.88037,1.48,1.73047,2.99,2.55029,4.51A143.852,143.852,0,0,1,482.565,371.06183Z" transform="translate(-193.3452 -54.14185)" fill="#e5e5e5" />
            <circle cx="269.75373" cy="189.53941" r="189.53942" fill="#a3c185" />
            <path d="M323.14914,117.08381C281.99762,213.34444,326.67238,324.739,422.933,365.8905a189.55421,189.55421,0,0,0,216.04482-48.20372C597.83077,413.95024,486.43755,458.631,390.1741,417.48388S249.23,264.94364,290.377,168.68016A189.55561,189.55561,0,0,1,323.14914,117.08381Z" transform="translate(-193.3452 -54.14185)" opacity="0.2" style="isolation:isolate" />
            <polygon points="280.01 717.56 260.65 712.13 260.69 710.05 266.49 394.77 266.78 379.05 266.79 378.59 267.8 323.51 269.27 243.67 269.27 243.66 270.27 189.54 270.8 189.54 271.82 248.17 273.15 324.48 274.1 378.63 274.1 379.03 274.14 381.26 274.14 381.27 275.98 486.82 276.17 497.31 279.97 715.46 280.01 717.56" fill="#3f3d56" />
            <rect x="462.57814" y="535.80109" width="35.40849" height="9.37282" transform="translate(-389.83614 231.83478) rotate(-27.76587)" fill="#3f3d56" />
            <rect x="176.6686" y="755.71631" width="89.3717" height="2" fill="#cbcbcb" />
            <rect x="340.66848" y="789.71631" width="89.37183" height="2" fill="#cbcbcb" />
            <rect x="595.66848" y="763.71631" width="89.37183" height="2" fill="#cbcbcb" />
            <path d="M837.565,736.48182V678.308S860.23593,719.55074,837.565,736.48182Z" transform="translate(-193.3452 -54.14185)" fill="#f1f1f1" />
            <path d="M838.96539,736.47159l-42.85408-39.34115S841.82469,708.32094,838.96539,736.47159Z" transform="translate(-193.3452 -54.14185)" fill="#f1f1f1" />
            <path d="M394.565,750.48182V692.308S417.23593,733.55074,394.565,750.48182Z" transform="translate(-193.3452 -54.14185)" fill="#f1f1f1" />
            <path d="M395.96539,750.47159l-42.85408-39.34115S398.82469,722.32094,395.96539,750.47159Z" transform="translate(-193.3452 -54.14185)" fill="#f1f1f1" />
            <path d="M548.565,792.48182v-72.34S576.75662,771.4278,548.565,792.48182Z" transform="translate(-193.3452 -54.14185)" fill="#f1f1f1" />
            <path d="M550.30642,792.4691,497.0168,743.54785S553.862,757.46338,550.30642,792.4691Z" transform="translate(-193.3452 -54.14185)" fill="#f1f1f1" />
            <polygon points="813.31 729.49 812.76 731.42 644.93 683.62 518.5 711.49 356.81 739.11 356.59 739.05 280.01 717.56 260.65 712.13 201.52 695.53 152.2 706.52 137.78 709.73 106.43 716.72 106 714.77 137.81 707.68 152.17 704.48 201.58 693.47 201.82 693.53 260.69 710.05 279.97 715.46 356.91 737.06 518.11 709.53 644.99 681.56 645.24 681.62 813.31 729.49" fill="#cbcbcb" />
            <path d="M706.39641,175.57875l12.79486-10.23341c-9.93975-1.09662-14.0238,4.32429-15.69525,8.615-7.76532-3.22446-16.21881,1.00136-16.21881,1.00136l25.6001,9.29375A19.37195,19.37195,0,0,0,706.39641,175.57875Z" transform="translate(-193.3452 -54.14185)" fill="#3f3d56" />
            <path d="M236.39641,171.57875l12.79486-10.23341c-9.93975-1.09662-14.0238,4.32429-15.69525,8.615-7.76532-3.22446-16.21881,1.00136-16.21881,1.00136l25.6001,9.29375A19.37195,19.37195,0,0,0,236.39641,171.57875Z" transform="translate(-193.3452 -54.14185)" fill="#3f3d56" />
            <path d="M678.39641,366.57875l12.79486-10.23341c-9.93975-1.09662-14.0238,4.32429-15.69525,8.615-7.76532-3.22446-16.21881,1.00136-16.21881,1.00136l25.6001,9.29375A19.37195,19.37195,0,0,0,678.39641,366.57875Z" transform="translate(-193.3452 -54.14185)" fill="#3f3d56" />
            <polygon points="398.156 752.578 407.935 756.211 426.602 720.221 412.169 714.859 398.156 752.578" fill="#ffb7b7" />
            <path d="M590.19264,802.59973l19.25843,7.15521.00077.00029a13.09339,13.09339,0,0,1,7.71251,16.833l-.14819.39882L585.4846,815.27175Z" transform="translate(-193.3452 -54.14185)" fill="#2f2e41" />
            <polygon points="494.392 762.733 504.824 762.732 509.787 722.494 494.39 722.495 494.392 762.733" fill="#ffb7b7" />
            <path d="M685.92675,813.46865l20.54469-.00083h.00083A13.09339,13.09339,0,0,1,719.565,826.5603v.42546l-33.63758.00125Z" transform="translate(-193.3452 -54.14185)" fill="#2f2e41" />
            <path d="M639.97532,537.80543l3.40369-6.80737,28.93133,14.46566-.85092,5.95645,5.531,7.23284s9.36014,5.10553,7.6583,22.124l-1.70185,16.16751-2.1273,20.84758,14.89113,51.48075,7.65829,68.07373L708.9,792.231l-26.804-1.27638-24.67672-89.34677-43.397,96.15414L584.24,790.10367l40.84424-95.30321,5.10553-39.99332s-3.40369-21.273,12.76382-35.7387l-2.55277-7.6583V601.973l-8.50921-45.02179Z" transform="translate(-193.3452 -54.14185)" fill="#2f2e41" />
            <rect x="647.55911" y="633.94132" width="0.99996" height="68.9611" transform="translate(-350.46045 146.88012) rotate(-15.75119)" opacity="0.2" />
            <rect x="640.82625" y="617.79206" width="41.69516" height="4.25461" transform="translate(1130.00244 1185.69687) rotate(-180)" fill="#3f3d56" />
            <ellipse cx="489.1762" cy="566.20297" rx="1.70184" ry="4.25461" fill="#3f3d56" />
            <circle cx="663.71854" cy="506.89834" r="22.68166" transform="translate(-292.76624 792.00009) rotate(-61.33678)" fill="#ffb7b7" />
            <circle cx="435.66495" cy="424.59364" r="20.06577" fill="#2f2e41" />
            <path d="M603.54633,476.58622a20.06688,20.06688,0,1,0,39.1429,8.22881,20.06709,20.06709,0,0,1-39.1429-8.22881Z" transform="translate(-193.3452 -54.14185)" fill="#2f2e41" />
            <path d="M682.81808,500.60116a23.72427,23.72427,0,1,1-14.15694-19.09959c3.9626-3.19569,8.8755-2.20524,12.86956,1.16744,4.51668,3.8135,5.85708,6.4332,9.36,12.70452C687.4463,495.85728,686.26261,500.11741,682.81808,500.60116Z" transform="translate(-193.3452 -54.14185)" fill="#2f2e41" />
            <path d="M599.44407,568.81214c.25385,6.72194.75692,19.95277.75692,20.62813,0,.71163,10.03071,21.48027,14.364,30.41866v.00454c.3083.63.58473,1.20113.82951,1.70428a4.02849,4.02849,0,0,0,3.70315,2.27537l18.93735-.34a4.03609,4.03609,0,0,0,3.96607-3.93434l2.11229-83.31478a2.05974,2.05974,0,0,0-2.05784-2.1122H617.63357a5.49075,5.49075,0,0,0-4.94055,3.10032l-11.72139,24.24972a15.49908,15.49908,0,0,0-1.52756,7.32025Z" transform="translate(-193.3452 -54.14185)" fill="#a3c185" />
            <path d="M642.33058,613.85155A54.23154,54.23154,0,0,0,655.27,602.91607a60.00782,60.00782,0,0,0,14.95545-34.88818c.96285-11.07248-1.2342-19.30275-6.53-24.46263-6.7316-6.55908-15.89441-5.60607-16.28116-5.562l-.41022.04647-6.20762,5.25262,1.75663,2.076,5.55449-4.7c1.70019-.085,8.64149-.10336,13.712,4.85622,4.66722,4.5652,6.58375,12.05382,5.69647,22.25783a57.308,57.308,0,0,1-14.20782,33.23691,52.656,52.656,0,0,1-12.2903,10.44038Z" transform="translate(-193.3452 -54.14185)" fill="#a3c185" />
            <rect x="623.09094" y="569.15092" width="0.90647" height="33.77971" transform="translate(-269.30664 1024.79144) rotate(-78.39377)" fill="#3f3d56" />
            <rect x="601.93088" y="560.01391" width="52.6946" height="0.90663" transform="translate(-150.69212 1111.22225) rotate(-87.66255)" fill="#3f3d56" />
            <path d="M599.44407,568.81214c.25385,6.72194.75692,19.95277.75692,20.62813,0,.71163,10.03071,21.48027,14.364,30.41866l-8.07711-46.8994a10.33774,10.33774,0,0,0-6.7129-7.97295A15.21407,15.21407,0,0,0,599.44407,568.81214Z" transform="translate(-193.3452 -54.14185)" fill="#3f3d56" />
            <path d="M649.0698,667.10044a7.97908,7.97908,0,0,1,2.5951-11.95656l-1.64153-18.1595,10.79217-3.68909,1.958,25.67729a8.02231,8.02231,0,0,1-13.70373,8.12786Z" transform="translate(-193.3452 -54.14185)" fill="#ffb7b7" />
            <path d="M642.00644,557.50044a12.45006,12.45006,0,0,1,8.42155-12.74222,11.30947,11.30947,0,0,1,7.11255.00623,12.44856,12.44856,0,0,1,8.43339,11.84851l.809,92.22236-19.1231.69345Z" transform="translate(-193.3452 -54.14185)" fill="#cbcbcb" />
        </svg>
    </div>
    <img class="img-logo" src="/img/logoteso.png" />
</section>

<!-- Notificaiones section -->
<section class="notificaciones-section">

    <p class="titles">Notificaciones</p>

    <!-- Carrusel -->
    <div id="slider">
        <figure>
            <div class="container-img-text">
                <img src="/img/slide1.jpg" alt/>
                <p>Titulo <br/>fechas</p>
            </div>
            <div class="container-img-text">
                <img src="/img/slide2.jpg" alt/>
                <p>Titulo <br/>fechas</p>
             
               
            </div>
            <div class="container-img-text">
                <img src="/img/slide1.jpg" alt/>
                <p>Titulo <br/>fechas</p>
            </div>
            <div class="container-img-text">
                <img src="/img/slide2.jpg" alt/>
                <p>Titulo <br/>fechas</p>
            </div>
            
           
           
            

        </figure>
    </div>




</section>

<!-- Citas section -->
<section class="citas-section">
    <p class="titles">Citas</p>
    <div class="content-img-text-citas">
        <div class="text-citas">
            <p>A la comunidad estudiantil se le informa que con el fin de atender las recomendaciones y evitar propagacion de COVID-19, hasta nuevo aviso, el horario de Atencion Estudiantil, asi como las Citas sera en un Horario de 8:00 - 18:00 horas.
                <a href="/citas">Agenda una sita aquí..</a>
            </p>
            <svg class="vector-buble" width="584" height="468" viewBox="0 0 584 468" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M576.589 70.8607C603.843 118.089 548.821 189.668 526.194 268.259C503.054 347.218 512.824 433.188 465.001 459.015C417.692 484.843 313.303 450.529 223.827 412.525C134.351 374.153 59.2734 332.828 23.2773 270.104C-12.2046 207.748 -9.63347 124.73 48.4745 72.3365C106.068 20.312 218.171 -0.71922 329.244 0.0187164C440.318 1.12562 549.335 23.6327 576.589 70.8607Z" fill="#83A958" />
            </svg>

        </div>
        <div class="img-citas">

            <svg width="422" height="465" viewBox="0 0 422 465" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M275.807 464.552H101.708C101.52 464.552 101.34 464.47 101.207 464.325C101.075 464.179 101 463.982 101 463.776C101 463.57 101.075 463.373 101.207 463.227C101.34 463.082 101.52 463 101.708 463H275.807C275.994 463 276.174 463.082 276.307 463.227C276.44 463.373 276.515 463.57 276.515 463.776C276.515 463.982 276.44 464.179 276.307 464.325C276.174 464.47 275.994 464.552 275.807 464.552H275.807Z" fill="#CCCCCC" />
                <path d="M286.911 107.174H284.651V39.2898C284.651 28.8695 280.876 18.876 274.155 11.5077C267.435 4.13947 258.32 1.31484e-05 248.815 1.41246e-10H117.636C112.93 -1.38344e-05 108.27 1.01623 103.922 2.99072C99.5739 4.9652 95.6234 7.85926 92.2957 11.5076C88.968 15.156 86.3284 19.4873 84.5274 24.2541C82.7265 29.021 81.7996 34.1301 81.7996 39.2897V411.71C81.7996 416.87 82.7265 421.979 84.5274 426.746C86.3283 431.513 88.968 435.844 92.2957 439.492C95.6233 443.141 99.5739 446.035 103.922 448.009C108.269 449.984 112.929 451 117.635 451H248.815C258.319 451 267.434 446.861 274.155 439.492C280.875 432.124 284.651 422.131 284.651 411.71V155.496H286.911L286.911 107.174Z" fill="#3F3D56" />
                <path d="M250.261 10.2219H233.138C233.925 12.3385 234.226 14.635 234.013 16.909C233.8 19.1831 233.081 21.3648 231.918 23.2621C230.755 25.1594 229.184 26.714 227.344 27.789C225.504 28.864 223.451 29.4263 221.366 29.4265H146.215C144.13 29.4264 142.077 28.864 140.237 27.789C138.397 26.7141 136.826 25.1594 135.663 23.2621C134.5 21.3648 133.78 19.1831 133.568 16.909C133.355 14.635 133.655 12.3385 134.443 10.2219H118.45C111.352 10.2219 104.545 13.3131 99.5263 18.8157C94.5074 24.3182 91.6879 31.7812 91.6879 39.563V411.437C91.6879 415.29 92.3801 419.106 93.725 422.665C95.0699 426.225 97.0412 429.46 99.5262 432.184C102.011 434.909 104.961 437.07 108.208 438.545C111.455 440.019 114.935 440.778 118.45 440.778H250.261C253.776 440.778 257.256 440.019 260.502 438.545C263.749 437.07 266.7 434.909 269.185 432.184C271.67 429.46 273.641 426.225 274.986 422.665C276.331 419.106 277.023 415.29 277.023 411.437V39.563C277.023 35.7098 276.331 31.8944 274.986 28.3346C273.641 24.7748 271.67 21.5402 269.185 18.8157C266.7 16.0911 263.749 13.9298 260.502 12.4553C257.256 10.9808 253.776 10.2219 250.261 10.2219Z" fill="white" />
                <path d="M211.659 171.474C224.77 171.474 235.399 170.365 235.399 168.996C235.399 167.627 224.77 166.517 211.659 166.517C198.549 166.517 187.92 167.627 187.92 168.996C187.92 170.365 198.549 171.474 211.659 171.474Z" fill="#E6E6E6" />
                <path d="M422 61.8876H203.457V140.546H211.735V161.119L230.499 140.546H422V61.8876Z" fill="#83A958" />
                <path d="M327.158 88.5244H227.781V91.8309H327.158V88.5244Z" fill="white" />
                <path d="M400.987 99.9627H227.781V103.269H400.987V99.9627Z" fill="white" />
                <path d="M400.818 111.401H227.781V114.707H400.818V111.401Z" fill="white" />
                <path d="M366.168 299.132H191.72V361.92H198.328V378.341L213.305 361.92H366.168V299.132Z" fill="#83A958" />
                <path d="M290.462 320.394H211.136V323.033H290.462V320.394Z" fill="white" />
                <path d="M349.395 329.524H211.136V332.164H349.395V329.524Z" fill="white" />
                <path d="M349.26 338.655H211.136V341.294H349.26V338.655Z" fill="white" />
                <path d="M198.267 386.607C208.732 386.607 217.216 385.722 217.216 384.629C217.216 383.536 208.732 382.65 198.267 382.65C187.801 382.65 179.318 383.536 179.318 384.629C179.318 385.722 187.801 386.607 198.267 386.607Z" fill="#E6E6E6" />
                <path d="M146.094 263.189C159.205 263.189 169.833 262.079 169.833 260.71C169.833 259.341 159.205 258.232 146.094 258.232C132.983 258.232 122.355 259.341 122.355 260.71C122.355 262.079 132.983 263.189 146.094 263.189Z" fill="#E6E6E6" />
                <path d="M0.593933 185.223H154.281V240.539H148.459V255.006L135.264 240.539H0.593933V185.223Z" fill="#83A958" />
                <path d="M86.4203 203.53H16.535V205.855H86.4203V203.53Z" fill="white" />
                <path d="M138.339 211.573H16.535V213.899H138.339V211.573Z" fill="white" />
            </svg>

        </div>
    </div>
</section>



@endsection