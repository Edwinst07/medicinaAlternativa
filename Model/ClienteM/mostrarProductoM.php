<?php

class MostrarProductoM{

    public function ProductosM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idProducto`, `nombre`, `costo`, `descripcion`, 
                                            `formaProducto`, `image` 
                                            FROM `medicinaalternativa`.`inventario`
                                            WHERE `estado`=0 ");

        if($pdo -> execute()){

            return $pdo -> fetchAll(); 
        }else{

            return 'No hay producto';
        }

        $pdo -> close;

    }

    public function IngresadoProductosM($id){

        require_once "../../../Controller/conexionBD.php";

        $pdo = ConexionBD::cBD()->prepare("SELECT `idProducto`, `nombre`, `costo`, `descripcion`, 
                                            `formaProducto`, `image`, `cantidad_prod` 
                                            FROM `medicinaalternativa`.`inventario`
                                            WHERE `idProducto`=:id, `estado`=0 ");

        $pdo -> bindParam(":id", $id, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetchAll(); 
        }else{

            return 'No hay producto';
        }

        $pdo -> close;

    }

}

?>