<?php

require_once "Controller/conexionBD.php";
require_once "Controller/ClienteC/rutasC.php";
require_once "Controller/ClienteC/mostrarProductoC.php";
require_once "Controller/ClienteC/registrarC.php";

require_once "Controller/AdministracionC/sucursalC.php";


require_once "Model/ClienteM/rutasM.php";
require_once "Model/ClienteM/mostrarProductoM.php";
require_once "Model/ClienteM/registrarM.php";

$rutas = new RutasController();
$rutas -> PlantillaCliente();

?>