
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title') | Laravel</title>

    <!-- Materialize core CSS -->
    <link rel="stylesheet" href="{{asset('materialize/iconfont/material-icons.css')}}">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo right">Curso Laravel</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="{{ url('/usuarios') }}" class="active">Usuarios</a></li>
        <li><a href="{{ url('/usuarios/nuevo') }}">Nuevo usuario</a></li>
        <li><a href="collapsible.html">Profesiones</a></li>
        <li><a href="mobile.html">Nueva profesión</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ url('/usuarios') }}" class="active">Usuarios</a></li>
        <li><a href="{{ url('/usuarios/nuevo') }}">Nuevo usuario</a></li>
        <li><a href="#">Profesiones</a></li>
        <li><a href="#">Nueva profesión</a></li>
      </ul>
    </div>
  </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <div class="row">
          @yield('content')
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
    <script src="{{asset('materialize/js/materialize.js')}}"></script>
    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>
