<?php

require_once "Controller/conexionBD.php";
require_once "Controller/ClienteC/rutasC.php";
require_once "Controller/ClienteC/ventaProductoC.php";
require_once "Controller/ClienteC/registrarC.php";
require_once "Controller/ClienteC/loginC.php";

require_once "Controller/AdministracionC/sucursalC.php";

require_once "Model/ClienteM/rutasM.php";
require_once "Model/ClienteM/VentaProductoM.php";
require_once "Model/ClienteM/registrarM.php";
require_once "Model/ClienteM/loginM.php";

$rutas = new RutasController();
$rutas -> PlantillaCliente();

?>