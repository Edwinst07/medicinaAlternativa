<?php

require_once "Controller/rutasC.php";
require_once "Controller/conexionBD.php";
require_once "Controller/perfilC.php";
require_once "Controller/accesoUsuarioC.php";
require_once "Controller/departamentoC.php";
require_once "Controller/cargoLaboralC.php";
require_once "Controller/modoPagoC.php";
require_once "Controller/categoriaProductoC.php";
require_once "Controller/productoC.php";
require_once "Controller/municipioC.php";
require_once "Controller/sucursalC.php";
require_once "Controller/clienteC.php";
require_once "Controller/empleadoC.php";

require_once "Model/rutasM.php";
require_once "Model/perfilM.php";
require_once "Model/accesoUsuarioM.php";
require_once "Model/departamentoM.php";
require_once "Model/cargoLaboralM.php";
require_once "Model/modoPagoM.php";
require_once "Model/categoriaProductoM.php";
require_once "Model/productoM.php";
require_once "Model/municipioM.php";
require_once "Model/sucursalM.php";
require_once "Model/clienteM.php";
require_once "Model/empleadoM.php";

$rutas = new RutasController();
$rutas -> Plantilla();

?>