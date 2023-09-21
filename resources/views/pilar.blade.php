<html>
  <head>
          <title>    
          <img src="{{ asset('imagenes/LOGO.jpeg') }}">      
Vidrio y Alumino RODMAR
          </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{asset ('css/style.css')}}"> 
<link rel="stylesheet" href="{{asset ('css/app.css')}}"> 
<script type="text/javascript" src="js/app.js"></script>
<link rel="stylesheet" href="{{asset ('css/p.css')}}">
    </head>
    <body>
<header>  
<section class="titulo">
<td> <p>RODMAR</p>
</section>
</header> 
<br>
<br><nav class="navbar navbar-default" role="navigation" style="background-color: #87CEFA;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a href="/">Inicio</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-center">
            <li><a href="/puertas">Puertas</a></li>
            <li><a href="/ventanas">Ventanas</a></li>
            <li><a href="/canceles">Canceles</a></li>
            <li><a href="/vitrinas">Vitrinas</a></li>
            <li><a href="/domos">Domos</a></li>
            <li><a href="/barandales">Barandales</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Informacion General</a></li>
        </ul>
    </div>
</nav>

<header>
    <section class="titulo">Vidrio y Aluminio</section>
</header>   
<br>





    <!-- Sidebar -->

    <div id="sideNavigation" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/">Home</a>
  <a href="/vidrios">Vidrios</a>
  <a href="/policarbonatos">Policarbonatos</a>
  <a href="/aluminios">Aluminios</a>
  <a href="/herrajes">Herrajes</a>
  <a href="/presupuesto">Solicitar Presupuestos</a>
</div>
 
<nav class="topnav">
  <a href="#" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  </a>
</nav>
 
<div id="main">
<!-- Add all your websites page content here  -->
</div>


@yield('contenido')

<footer>
    <section class="pie">
    <footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>:</span>
    </div>
    <!-- Left -->
  </section>
  <!-- Section: Social media -->
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Vidrio y Aluminio RODMAR
          </h6>
          <p> A </p>
          <p> B </p>
          <p> C </p>
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Puertas en Aluminio y Cristal</a>
          </p>
          <p>
            <a href="#!" class="text-reset">s</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Peceras</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Arreglos Florales y Coronas</a>
          </p>
        </div>
        <!-- Grid column --> <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->  <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="fas fa-home me-3"></i>AV.Paseo del Bosque No.1500 Villas de los Sauces</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Celaya,Gto,Mexico.
          </p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Rodmar@vidrioyaluminio@gamil.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>     <!-- Grid row -->   </div> </section> <!-- Section: Links  -->
        <!-- Grid column -->
      </div>     <!-- Grid row -->   </div> </section> <!-- Section: Links  -->
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</section>

</footer>

</html>