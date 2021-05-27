<?php 

  if(isset($_POST["close"]) && isset($_SESSION["ingreso"])){

    session_start();
                  
    session_destroy();
    header("location:medicinaAlternativa.php?dir=index");

    exit();
  }
  
  if($_GET["dir"] == "login"){

    $ingresar = new LoginC();
    $ingresar -> IngresoC();

  }

?>
<?php

if($_GET["dir"] == "VentaProducto"){

  session_start();

  if(empty($_SESSION["ingreso"])){

    header("location:medicinaAlternativa.php?dir=index");

    exit();
  }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Venta y domicilio de plantas medicinales">
  <meta name="author" content="Edwin Stiven Lozada Mahecha">
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
    <div class="nombre_entidad"><img class="icon" src="Vista/img/icon.png" alt="icon"><span>Medicina Alternativa Natural S.A.S</span></div>
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
      <a class="navbar-brand" href="https://www.instagram.com/?hl=es-la">
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
      <a class="navbar-brand" href="https://web.whatsapp.com/">
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
      <a class="navbar-brand" href="https://www.youtube.com/">
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
        <?php
        
          if($_GET["dir"] == "VentaProducto"){
              ?>
                <div class="usuario">
                <span>Usuario:</span>
                  <?php
                    echo VentaProductoC::UsuarioC($_SESSION["ingreso"]);
                  ?>
              </div>
            <?php
          }

        ?>  
        <ul class="nav">
            
          <?php
          
          if(!isset($_SESSION["ingreso"])){
          ?>
          
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="medicinaAlternativa.php?dir=index">Inicio</a>
            </li>
          <?php
          }
          
          ?>
           <?php
              
              if($_GET["dir"] != 'VentaProducto'){
                ?>
                  <li class="nav-item">
                    <a class="nav-link" href="medicinaAlternativa.php?dir=sucursales">Sucursales</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="medicinaAlternativa.php?dir=acerca_de">Acerca de</a>
                  </li>
             
              
                  <li class="nav-item">
                    <a class="nav-link" href="medicinaAlternativa.php?dir=login">Iniciar sesión</a>
                  </li>
              <?php
              }
              
              ?>
          <?php

              if(isset($_SESSION["ingreso"])){
          ?>
                <li class="nav-item">
                    <a class="nav-link" href="medicinaAlternativa.php?dir=pedidos">
                      Sus pedidos

                      <img
                          src="https://cdn.glitch.com/fa47d939-4d1c-4764-8b4b-9f22321657df%2Fcarro.png?v=1619541607613"
                          width="30"
                          height="30"
                          class="d-inline-block align-top"
                          alt="icon"
                      />

                    </a>
                </li>
                <li class="nav-item">
                <div class="close_session" style="width: 100%;">
                  <form method="POST">
                  
                      <button type="submit" name="close" style="width: 100%;" class="btn btn-danger">
                          Cerrar sessión <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                          fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 
                          1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                          </svg>
                      </button>
                  </form>
                </div>
              </li>
          <?php
              }
          
          
          ?>
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
            Ingenier&iacute;a de software III - Uniremington
          </p>
        </div>
      </div>
    </div>
 
</body>

</html>
