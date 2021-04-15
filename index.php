<?php

require_once "Controller/rutasC.php";
require_once "Controller/conexionBD.php";
require_once "Controller/perfilC.php";
require_once "Controller/accesoUsuarioC.php";
require_once "Controller/departamentoC.php";

require_once "Model/rutasM.php";
require_once "Model/perfilM.php";
require_once "Model/accesoUsuarioM.php";
require_once "Model/departamentoM.php";

$rutas = new RutasController();
$rutas -> Plantilla();

?>