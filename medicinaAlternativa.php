<?php

require_once "Controller/ClienteC/rutasC.php";


require_once "Model/ClienteM/rutasM.php";

$rutas = new RutasController();
$rutas -> PlantillaCliente();

?>