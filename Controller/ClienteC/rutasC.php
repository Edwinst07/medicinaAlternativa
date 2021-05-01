<?php

class RutasController{

    public function PlantillaCliente(){

        include "Vista/plantillaCliente.php";
    }


    public function Rutas(){

        if(isset($_GET["dir"])){

            $rutas = $_GET["dir"];

        }else{

            $rutas = "index";
        }

        $res = Model::RutasModel($rutas);

        include $res;
    }

}


?>