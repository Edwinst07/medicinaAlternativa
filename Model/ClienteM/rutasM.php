<?php

class Model{

    static public function RutasModel($rutas){

        if($rutas=='VentaProducto' || $rutas=='login' || $rutas=='pedidos' || $rutas=='acerca_de' || $rutas=='sucursales' || $rutas=='registrar'){

            $pagina = "Vista/Modulos/ClienteModulos/".$rutas.".php";
        }else if($rutas == "index"){
            $pagina = "Vista/Modulos/ClienteModulos/index.php";
        }else{
            $pagina = "Vista/Modulos/ClienteModulos/index.php";
        }

        return $pagina;
    }

}
?>