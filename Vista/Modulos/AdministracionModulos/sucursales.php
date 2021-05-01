<?php
//echo $_SERVER['DOCument_ROot'];
require_once "../../../Model/AdministracionM/sucursalM.php";

$mun = SucursalM::MunicipioM($_REQUEST['idDep']); 
echo json_encode($mun);

?>
