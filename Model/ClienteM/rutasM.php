<?php

class Model{

    static public function RutasModel($rutas){

        if($rutas=='VentaProducto' || $rutas=='login' || $rutas=='sucursales' || $rutas=='registrar'){

            $pagina = "Vista/Modulos/ClienteModulos/".$rutas.".php";
        }else if("index"){
            $pagina = "Vista/Modulos/ClienteModulos/index.php";
        }

        return $pagina;
    }

}
?>