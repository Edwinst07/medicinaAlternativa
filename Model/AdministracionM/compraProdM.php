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

    public function LaboratorioM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idLaboratorio`, `nombreLaboratorio`, `correo`, 
                                            `telefono`, `invima`, `direccion`, `idMunicipio`, `estado` 
                                            FROM `medicinaalternativa`.`laboratorio` 
                                            WHERE `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return 'No hay laboratorio';
        }

        $pdo -> close;

    }

    public function InsertCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`id`, `idProducto`, `categoriaprod`, 
                                        `fecha_fab`, `fecha_venc`, `laboratorio`) 
                                        VALUES (:codigo, :producto, :categoria, :fecha_fab, :fecha_venc, :laboratorio)");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":producto", $datosC["producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_fab", $datosC["fecha_fab"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_venc", $datosC["fecha_venc"], PDO::PARAM_STR);
        $pdo -> bindParam(":laboratorio", $datosC["laboratorio"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ConsultCompraProdM($datosC,$tablaBD){ 

        $pdo = ConexionBD::cBD()->prepare("SELECT c.`id`, c.`idProducto`, i.`nombre`, c.`categoriaProd`, cp.`nombreCategoria`, 
                            c.`fecha_fab`, c.`fecha_venc`, c.`laboratorio`, l.`nombreLaboratorio`
                            FROM `medicinaalternativa`.$tablaBD AS c,
                                `medicinaalternativa`.`inventario` AS i,
                                `medicinaalternativa`.`categoriaprod` AS cp,
                                `medicinaalternativa`.`laboratorio` AS l
                            WHERE cp.`idCategoria`=c.`categoriaprod`
                            AND c.`laboratorio`=l.`idLaboratorio`
                            AND i.`idProducto`=c.`idProducto`
                            AND c.`id`=:codigo
                            AND i.`estado`=0");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    } 

    public function listadoM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT c.`id`, i.`nombre`, l.`nombreLaboratorio`
                                            FROM `medicinaalternativa`.`compra_prod` AS c,
                                                `medicinaalternativa`.`inventario` AS i,
                                                `medicinaalternativa`.`laboratorio` AS l
                                            WHERE c.`laboratorio`=l.`idLaboratorio`
                                            AND i.`idProducto`=c.`idProducto`
                                            AND c.`estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function DeleteCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `id`=:codigo,`idProducto`=:producto, `categoriaprod`=`categoriaprod`, 
                                        `fecha_fab`=`fecha_fab`, `fecha_venc`=`fecha_venc`, 
                                        `laboratorio`=`laboratorio`, `estado`=1
                                        WHERE `codigo`=:codigo");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR); 

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function UpdateCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                    SET `id`=:codigo, `idProducto`=:producto, `categoriaprod`=:categoria, 
                                `fecha_fab`=:fecha_fab, `fecha_venc`=:fecha_venc, 
                                `laboratorio`=:laboratorio
                                WHERE `idProducto`=:producto LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":producto", $datosC["producto"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_fab", $datosC["fecha_fab"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha_venc", $datosC["fecha_venc"], PDO::PARAM_STR);
        $pdo -> bindParam(":laboratorio", $datosC["laboratorio"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>