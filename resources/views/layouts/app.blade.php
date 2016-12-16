<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Laravel 5.3, PHP, HTML, Java script, .CSS, Botstrap, flash de laracast,  RabbitMQ is 3.6.6. (para mensajes entre aplicaciones con bajo acoplamiento)  -->
    <!--  PENDIENTES: 

        Falta que la migración de temas especifique que la tabla de temas acepte en id_tema_padre valor null.
        Falta que la migración de temasdealle especifique que la tabla  temasdetalle acepte en id_practica valor null

    -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    VERSION DE PHP ACTUAL 5.6.24   -->
    <!--    SRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles Autentificación-->
    <link href="/css/app.css" rel="stylesheet"> 
    
    <!-- Styles aspecto menu de la izquierda -->
    <link href="/css/menutemas.css" rel="stylesheet">

    <!-- Styles Area de Lucy Tutor-->
    <link href="/css/menuLucy.css" rel="stylesheet">
    
    <!-- Styles Area de Temas   -->
    <link href="/css/temas.css" rel="stylesheet">

    <!-- Styles Fuentes del menu de la izquierda-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Styles para Flash messages-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!--  Icono de pestaña del navegador -->        
    <link href="favicon3.ico" rel="shortcut icon">

    <!-- CodeMirror -->
    <link rel="stylesheet" type="text/css" href="/plugins/codemirror/lib/codemirror.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div class="container-fluid">   
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-temas">

                    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
                    -->

                    <div>
                        <nav class="navbar navbar-inverse">
                            <div class="navbar-header">
                                <!-- Collapsed Hamburger -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Branding Image -->
                                <a class="navbar-brand" href="{{ url('/home') }}">
                                    LTJ
                                </a>
                            </div>


                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                <!-- Left Side Of Navbar -->
                                <ul class="nav navbar-nav">
                                    &nbsp;
                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())


                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> 
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ url('/logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        Cerrar sesión
                                                    </a>

                                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                               

                            <div class="nav-side-menu">
                                <div class="brand">CONTENIDO DEL CURSO</div>
                                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                              
                                    <div class="menu-list">
                              
                                        <ul id="menu-content" class="menu-content collapse out">

                                            <!--  HACE FALTA MEJORAR ESTO PARA QUE NO RECORRA TODOS LOS REGISTROS DOS VECES -->

                                            <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                                                @foreach($temas as $tema)
                                                    @if ($tema->id_tema_padre==null)
                                                        <a href="#"> {{ $tema->titulo}}
                                                        <span class="arrow"></span></a>
                                                    @endif
                                                @endforeach
                                              
                                            </li>       
                                            <ul class="sub-menu collapse" id="products">
                                                @foreach($temas as $tema)
                                                    @if ($tema->id_tema_padre==null)
                                                    @else
                                                        <!--  <li><a href="/tema/{{$tema->id}}">{{ $tema->titulo}}</a></li> -->
                                                        <li><a href="/tema/{{$tema->id}}">{{ $tema->titulo}}</a></li> 
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </ul>
                                 </div>
                            </div> <!-- Fin de menú de temas -->


                           <div class="page-header">
                                <div class="nav-side-menuLucy">
                                    <div class="col-md-3">
                                            <img src="/avatarg.gif" class="img-responsive img-circle" height="42px" width="42px" align="center">                            
                                    </div>
                                    <div class="col-md-9" >
                                        <div class="container-fluid" >
                                            <br>Lucy (Mensajes o hints)
                                        </div>
                                    </div>
                                </div>
                                <div class="nav-side-menuMsg">
                                    <div class="container-fluid">
                                        <br>
                                        @include('flash::message')
                                    </div>  
                                </div>
                            </div>
                        </nav>
                    </div> <!-- fin div-->
                    
                    <!--
                    <div>
                        <div class="nav-side-menuLucy">
                            <div class="row">
                                <div class="col-md-3">                            
                                    <img src="/avatarg.gif" class="img-responsive img-circle" height="42px" width="42px">      
                                </div>
                                <div class="col-md-9">
                                    Mensajes o hints
                                </div>
                            </div>
                            <div class="nav-side-menuMsg">
                                @include('flash::message')
                            </div>
                            -->
                            <!-- FIN DE TITULO DE ÁREA DE MSGS DE LUCY-->
                       <!-- </div>--> <!-- FIN DE TITULO DE ÁREA DE MSGS DE LUCY-->
                   <!-- </div>-->
                </div> <!-- Fin div panel temas-->
            </div> <!-- fin panel default-->
        </div> <!--Fin col 3-->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>       
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/plugins/botstrap/js/botstrap.js"></script>
    <!-- <script src="/plugins/jquery/jquery-3.1.1.js"></script> -->
    
    <!--  condemirror -->
    <script type="text/javascript" src="/js/jquery.min.js"> </script>
    <script type="text/javascript" src="/plugins/codemirror/lib/codemirror.js"></script>
    <script type="text/javascript" src="/js/default.js"></script>
    
</body>
</html>


















