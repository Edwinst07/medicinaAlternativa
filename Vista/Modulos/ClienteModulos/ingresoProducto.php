<?php

require_once "../../../Model/ClienteM/mostrarProductoM.php";

$prod = $producto = MostrarProductoC::IngresadoProductosM($_REQUEST['idProd']);

echo json_encode($prod);

?>