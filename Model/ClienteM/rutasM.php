<?php

class Model{

    static public function RutasModel($rutas){

        if($rutas=='VentaProducto'){

            $pagina = "Vista/Modulos/ClienteModulos/".$rutas.".php";
        }else{
            $pagina = "Vista/Modulos/ClienteModulos/index.php";
        }

        return $pagina;
    }

}
?>