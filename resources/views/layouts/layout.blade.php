<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>@yield('title')</title>
    <!-- Favicons-->
    <link rel="icon" href="{{ asset('images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png')}}">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/flag-icon/css/flag-icon.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('vendors/data-tables/css/jquery.dataTables.min.css') }}" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo">
                    <img src="{{ asset('images/logo/materialize-logo.png') }}" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Sistema registro de ex-alumnos</span>
                  </a>
                </h1>
              </li>
              <!--<li>
                <a href={{ route('principal') }} class="waves-effect waves-cyan">Inicio</a>
              </li>
              -->
            </ul>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              @guest
              <li>
                <a href={{ route('login') }} class="waves-effect waves-cyan">Login</a>
              </li>
              @endguest
              @auth
              <li>
                <a href="{{ route('logout') }}" class="waves-effect waves-cyan" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Salir
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
              @endauth
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Configuracion</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Cerrar sesion</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="collapsible side-nav fixed leftside-navigation">
            <li class="no-padding">
              <ul class="collapsible" data-collapsible="accordion">
                <li class="bold">
                  <a href={{ route('principal') }} class="waves-effect waves-cyan">
                    <i class="material-icons md-48">home</i>
                      <span class="nav-text">Inicio</span>
                    </a>
                </li>
                @guest
                <li class="bold">
                    <a href={{ route('buscarPersonas') }} class="waves-effect waves-cyan">
                      <i class="material-icons">people</i>
                      <span class="nav-text">Buscar ex-alumnos</span>
                    </a>
                </li>
                <li class="bold">
                    <a href={{ route('cargarVistaRegistrarPersona') }} class="waves-effect waves-cyan">
                      <i class="material-icons">add_circle</i>
                      <span class="nav-text">Registrar ex-alumnos</span>
                    </a>
                </li>
                @endguest
                @auth
                <li class="bold">
                  <a href={{ route('listarPersonas') }} class="waves-effect waves-cyan">
                    <i class="material-icons">people</i>
                      <span class="nav-text">Ex-alumnos</span>
                    </a>
                </li>
                
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">pie_chart_outlined</i><span class="nav-text">Administracion</span></a>
                        <div class="collapsible-body">
                          <ul>     
                            <li><a href="{{ route('listarCategorias') }}" class="waves-effect waves-cyan">Categoria</a></li>
                          </ul>
                          <ul>     
                            <li><a href="{{ route('listarProfesion') }}">Profesion</a></li>
                          </ul>
                          <ul>     
                            <li><a href="{{ route('listarPromociones') }}">Promocion</a></li>
                          </ul>
                          <ul>     
                            <li><a href="{{ route('listarNivelAcademico') }}">Nivel academico</a></li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                </li>
                @endauth
              </ul>
            </li>
          </ul>
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
            <i class="material-icons">menu</i>
          </a>
        </aside>
        
        <!-- END LEFT SIDEBAR NAV-->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <div id="ui-alert" class="section">
              <div class="row">
                @if ($errors->any()) 
                  <div id="card-alert" class="card red accent-1">
                      <div class="card-content red-text text-darken-3">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li><strong>{{ $error }}</strong></li>
                              @endforeach
                          </ul>
                      </div>             
                  </div>    
                @endif
                @if(session('mensaje')) 
                    <div id="card-alert" class="card green">
                        <div class="card-content white-text">
                            <p><i class="mdi-navigation-check"></i>{{ session('mensaje') }}</p>
                        </div>
                        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif
              </div>
            </div>
                @yield('content')
          </div>
        </section>
        <!-- END CONTENT -->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- START FOOTER -->
    <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
            <span class="right hide-on-small-only"> Sistema desarrollado en Laravel por <a class="grey-text text-lighten-2" href="https://linkedin.com/in/svalecillos-93">SAUL VALECILLOS</a></span>
          </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="{{ asset('vendors/jquery-validation/jquery.validate.js') }}"></script>
    <!--Validaciones formularios-->
    <script src="{{ asset('js/validacionFormPersona.js') }}"></script>
    <script src="{{ asset('js/validacionFormAdministracion.js') }}"></script>
    <script src="{{ asset('js/validacionFormLogin.js') }}"></script>
    <script src="{{ asset('js/validacionFormRegistrarUsuario.js') }}"></script>
    <script src="{{ asset('js/validacionFormBuscar.js') }}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/data-tables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/data-tables/data-tables-script.js') }}"></script>
  </body>
</html>