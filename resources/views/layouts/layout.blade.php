<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="{{ asset('images/logo/materialize-logo.png') }}" alt="materialize logo">
                    <span class="logo-text hide-on-med-and-down">Materialize</span>
                  </a>
                </h1>
              </li>
            </ul>
            <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="{{ asset('images/avatar/avatar-7.png') }}" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
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
                      <i class="material-icons">pie_chart_outlined</i>
                      <span class="nav-text">Inicio</span>
                    </a>
                </li>
                <li class="bold">
                  <a href={{ route('listarPersonas') }} class="waves-effect waves-cyan">
                      <i class="material-icons">pie_chart_outlined</i>
                      <span class="nav-text">Personas</span>
                    </a>
                </li>
                <li>
                  <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">pie_chart_outlined</i><span class="nav-text">Administracion</span></a>
                        <div class="collapsible-body">
                          <ul>     
                            <li><a href="#">Categoria</a></li>
                          </ul>
                          <ul>     
                            <li><a href="#">Profesion</a></li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                </li>
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
                  <div id="card-alert" class="card light-blue lighten-5">
                      <div class="card-content light-blue-text">
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
                                            <p><i class="mdi-navigation-check"></i>{{ session('message') }}</p>
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
            <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2" href="https://pixinvent.com/">PIXINVENT</a></span>
          </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/battuta.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/data-tables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendors/data-tables/data-tables-script.js') }}"></script>
  </body>
</html>