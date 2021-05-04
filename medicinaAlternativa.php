<?php

require_once "Controller/conexionBD.php";
require_once "Controller/ClienteC/rutasC.php";
require_once "Controller/ClienteC/mostrarProductoC.php";


require_once "Model/ClienteM/rutasM.php";
require_once "Model/ClienteM/mostrarProductoM.php";

$rutas = new RutasController();
$rutas -> PlantillaCliente();

?>