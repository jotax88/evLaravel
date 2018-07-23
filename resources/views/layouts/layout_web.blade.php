<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  @section('title')
    EV Panel-Productos
@endsection

    <!-- BEGIN CSS-->
    <link rel="stylesheet" href="{{asset('css/libs_web.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- END CSS-->

  </head>

  <body>     
                          

                           
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #ffffff!important;">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="https://www.electroventas.cl/public/new_web/svg/logo-blue.svg" width="280" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">VENTA EMPRESAS</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="about.html">Llámanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html"><img src="https://www.electroventas.cl//public/new_web/svg/shopping-bag-blue.svg"  width="40" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#create"><img src="https://www.electroventas.cl//public/new_web/svg/user-blue.svg" width="40" alt=""></a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
               
            </div>
            <div class="container">
          <h3 class="center"><strong>Inicia sesión</strong></h3>

          <form class="" action="" method="post">
            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
  <label class="form-check-label" for="inlineRadio1">Correo</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Rut</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Dni</label>
</div>
               <div class="form-group">
    <label for="inputEmail4">Usuario</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Correo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>

  <button type="submit" class="btn btn-primary">INGRESAR</button>
          </form>
           <p><a href="">¿Olvidaste tu clave?</a><br>
            ¿No tienes clave? <a href="{{ url('cliente/create') }}">Regístrate aquí </a></p>
          
          </div>
            
            
        </div>
    </div>
</div>

    
    
        @yield('content')


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

      <!-- BEGIN JS-->
    <script src="{{asset('js/libs_web.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- END JS-->


  </body>

</html>

