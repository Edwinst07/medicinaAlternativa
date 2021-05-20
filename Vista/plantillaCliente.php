
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	
  <!-- Estilos personalizados para esta plantilla -->
  <link href="Vista/css/simple-sidebar.css" rel="stylesheet">
  <link href="Vista/css/registro.css" rel="stylesheet">
  <link rel="shortcut icon" href="Vista/img/icon.png" />

  <script src="Vista/js/jquery-3.6.0.js"></script>
  <script src="Vista/js/validar.js"></script>
  <script src="Vista/js/municipioDepartamento.js"></script>

</head>
<body>

  <!-- Barra de redes Sociales -->
  <ul class="nav bg-light justify-content-end">
    <nav class="navbar navbar-light bg-light">
      
      <!-- Icono Facebook -->
      <a class="nav-link" href="https://www.facebook.com/">
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
            <a class="nav-link active" aria-current="page" href="medicinaAlternativa.php?dir=index">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Productos">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medicinaAlternativa.php?dir=sucursales">Sucursales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acerca_de.html">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="medicinaAlternativa.php?dir=login">Iniciar sesión</a>
          </li>
        </ul>
      </nav>
      <!-- Barra De Navegacion -->

      <!-- BARRA HORIZONTAL -->
      <!-- VENTANA PRINCIPAL -->
      <div class="container-fluid" style="height: auto; padding-bottom: 50px; margin_botton: 50px;">
        
        <?php

            $rutas = new RutasController();
            $rutas -> Rutas();

        ?>


      </div>

<div class="Container mt-5 mb-5 text-center">
      <h5>
        &copy;2021 - By Edwin Stiven Lozada Mahecha - Jairo Alexander Fernandez Lopez
      </h5>

      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
          <p>
            Ingenieria de software III - Uniremington
          </p>
        </div>
      </div>
    </div>
 
</body>

</html>
