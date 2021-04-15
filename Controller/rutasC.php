<?php

class RutasController{

    public function Plantilla(){

        include "Vista/plantilla.php";
    }

    public function Rutas(){

        if(isset($_GET["ruta"])){

            $rutas = $_GET["ruta"];

        }else{

            $rutas = "index";
        }

        $res = Model::RutasModel($rutas);

        include $res;
    }

}

?>