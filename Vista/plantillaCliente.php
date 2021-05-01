
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- TITULO_PESTAÑA NAVEGADOR -->
  <title>Medicina Alternativa</title>
  <!-- TITULO_PESTAÑA NAVEGADOR -->

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	

  <!-- Estilos personalizados para esta plantilla -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- Estilos personalizados para esta plantilla -->

</head>
<body>
  <!-- Barra de redes Sociales -->
  <ul class="nav bg-light justify-content-end">
    <nav class="navbar navbar-light bg-light">
      
      <!-- Icono Facebook -->
      <a class="nav-link" href="www.facebook.com">
        <img
          src="https://cdn.glitch.com/fa47d939-4d1c-4764-8b4b-9f22321657df%2Ffacebook.png?v=1616520201531"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt="Facebook"
        />
        <!-- Icono Facebook -->
        <!-- Icono Instagram -->
      </a>
      <a class="navbar-brand" href="#">
        <img
          src="https://cdn.glitch.com/fa47d939-4d1c-4764-8b4b-9f22321657df%2Finstagram.png?v=1616520130964"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt="Instagram"
        />
      </a>
      <!-- Icono Instagram -->
      <!-- Icono whatsapp -->
      <a class="navbar-brand" href="#">
        <img
          src="https://cdn.glitch.com/fa47d939-4d1c-4764-8b4b-9f22321657df%2Fwhatsapp.png?v=1616520201531"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt="Whatsapp"
        />
      </a>
      <!-- Icono whatsapp -->
      <!-- Icono youtube -->
      <a class="navbar-brand" href="#">
        <img
          src="https://cdn.glitch.com/fa47d939-4d1c-4764-8b4b-9f22321657df%2Fyoutube.png?v=1616520201531"
          width="30"
          height="30"
          class="d-inline-block align-top"
          alt="youtube"
        />
      </a>
      <!-- Icono youtube -->
    </nav>
  </ul>
  <!-- Barra de redes Sociales -->    
      <!-- Barra De Navegacion -->
      <nav class="nav justify-content-end navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav">
            <!-- Icono carrito -->
          <a class="navbar-brand" href="#">
            <img
              src="https://cdn.glitch.com/fa47d939-4d1c-4764-8b4b-9f22321657df%2Fcarro.png?v=1619541607613"
              width="30"
              height="30"
              class="d-inline-block align-top"
              alt="youtube"
            />
          </a>
          <!-- Icono carrito -->  
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Productos">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mapa">Sucursales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acerca_de.html">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Iniciar sesión</a>
          </li>
        </ul>
      </nav>
      <!-- Barra De Navegacion -->

      <!-- BARRA HORIZONTAL -->
      <!-- VENTANA PRINCIPAL -->
      <div class="container-fluid">
        <h1 class="mt-4">VENTANA PRINCIPAL</h1>
        <p>En esta ventana se pondra los cuadros de texto.</p>       
        <p>y los botones</p>


        <?php

            $rutas = new RutasController();
            $rutas -> Rutas();

        ?>


      </div>
      <!-- VENTANA PRINCIPAL -->    

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
