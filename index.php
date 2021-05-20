<?php
require_once "Controller/conexionBD.php";
require_once "Controller/AdministracionC/rutasC.php";
require_once "Controller/AdministracionC/perfilC.php";
require_once "Controller/AdministracionC/accesoUsuarioC.php";
require_once "Controller/AdministracionC/departamentoC.php";
require_once "Controller/AdministracionC/cargoLaboralC.php";
require_once "Controller/AdministracionC/modoPagoC.php";
require_once "Controller/AdministracionC/categoriaProductoC.php";
require_once "Controller/AdministracionC/inventarioC.php";
require_once "Controller/AdministracionC/municipioC.php";
require_once "Controller/AdministracionC/sucursalC.php";
require_once "Controller/AdministracionC/clienteC.php";
require_once "Controller/AdministracionC/empleadoC.php";
require_once "Controller/AdministracionC/medidaC.php";
require_once "Controller/AdministracionC/formaC.php";
require_once "Controller/AdministracionC/compraProdC.php";
require_once "Controller/AdministracionC/laboratorioC.php";

require_once "Model/AdministracionM/rutasM.php";
require_once "Model/AdministracionM/perfilM.php";
require_once "Model/AdministracionM/accesoUsuarioM.php";
require_once "Model/AdministracionM/departamentoM.php";
require_once "Model/AdministracionM/cargoLaboralM.php";
require_once "Model/AdministracionM/modoPagoM.php";
require_once "Model/AdministracionM/categoriaProductoM.php";
require_once "Model/AdministracionM/inventarioM.php";
require_once "Model/AdministracionM/municipioM.php";
require_once "Model/AdministracionM/sucursalM.php";
require_once "Model/AdministracionM/clienteM.php";
require_once "Model/AdministracionM/empleadoM.php";
require_once "Model/AdministracionM/medidaM.php";
require_once "Model/AdministracionM/formaM.php";
require_once "Model/AdministracionM/compraProdM.php";
require_once "Model/AdministracionM/laboratorioM.php";

$rutas = new RutasController();
$rutas -> Plantilla();

?>