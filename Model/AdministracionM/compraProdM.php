<?php

class CompraProdM{

    public function ProductoM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idProducto`, `nombre` 
                                            FROM `medicinaalternativa`.`inventario` 
                                            WHERE `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return 'No hay producto';
        }

        $pdo -> close;

    }

    public function CategoriaM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idCategoria`, `nombreCategoria`
                                            FROM `medicinaalternativa`.`categoriaprod` 
                                            WHERE `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return 'No hay categoria';
        }

        $pdo -> close;

    }

    public function InsertCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idProducto`, `categoriaprod`, 
                                        `fecha_fab`, `fecha_venc`, `nombreLaboratorio`, `invima`, `direccion`) 
                                        VALUES (:producto, :categoria, :fecha_fab, :fecha_venc, :laboratorio,
                                                :invima, :direccion)");

        $pdo -> bindParam(":producto", $datosC["producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_fab", $datosC["fecha_fab"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_venc", $datosC["fecha_venc"], PDO::PARAM_STR);
        $pdo -> bindParam(":laboratorio", $datosC["laboratorio"], PDO::PARAM_STR);
        $pdo -> bindParam(":invima", $datosC["invima"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ConsultCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT i.`nombre`, cp.`nombreCategoria`, 
                            c.`fecha_fab`, c.`fecha_venc`, c.`nombreLaboratorio`, c.`invima`, c.`direccion`
                            FROM `medicinaalternativa`.$tablaBD AS c,
                                `medicinaalternativa`.`inventario` AS i,
                                `medicinaalternativa`.`categoriaprod` AS cp
                            WHERE cp.`idCategoria`=c.`categoriaprod`
                            AND i.`idProducto`=c.`idProducto`
                            AND c.`idProducto`=:producto
                            AND i.`estado`=0");

        $pdo -> bindParam(":producto", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    } 

    public function DeleteCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idProducto`=:producto, `categoriaprod`=`categoriaprod`, 
                                        `fecha_fab`=`fecha_fab`, `fecha_venc`=`fecha_venc`, 
                                        `nombreLaboratorio`=`nombreLaboratorio`, `invima`=`invima`, 
                                        `direccion`=`direccion`, `estado`=1
                                        WHERE `idProducto`=:producto");

        $pdo -> bindParam(":producto", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function UpdateCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                    SET `idProducto`=:producto, `categoriaprod`=:categoria, 
                                `fecha_fab`=:fecha_fab, `fecha_venc`=:fecha_venc, 
                                `nombreLaboratorio`=:laboratorio, `invima`=:invima, 
                                `direccion`=:direccion
                                WHERE `idProducto`=:producto LIMIT 1");

        $pdo -> bindParam(":producto", $datosC["producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_fab", $datosC["fecha_fab"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_venc", $datosC["fecha_venc"], PDO::PARAM_STR);
        $pdo -> bindParam(":laboratorio", $datosC["laboratorio"], PDO::PARAM_STR);
        $pdo -> bindParam(":invima", $datosC["invima"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>