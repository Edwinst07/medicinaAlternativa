<?php

class InventarioM{

    static public function InsertInventarioC($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO  `medicinaalternativa`.$tablaBD(`idProducto`, `nombre`, 
                                            `costo`, `descripcion`, `medida`, `cantidad_medida`, `cantidad_prod`, 
                                            `porc_ganancia`, `existe`, `formaProducto`, `image`)
                                            VALUES(:id, :nombre, :costo, :descrip, :medida, :cantMedida, :cantidadProd, 
                                            :porGanancia, :existe, :forma, :imagen)"); 

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":costo", $datosC["costo"], PDO::PARAM_STR);
        $pdo -> bindParam(":descrip", $datosC["descrip"], PDO::PARAM_STR);
        $pdo -> bindParam(":medida", $datosC["medida"], PDO::PARAM_STR);
        $pdo -> bindParam(":cantMedida", $datosC["cantMedida"], PDO::PARAM_STR);
        $pdo -> bindParam(":cantidadProd", $datosC["cantidadProd"], PDO::PARAM_STR);
        $pdo -> bindParam(":porGanancia", $datosC["porGanancia"], PDO::PARAM_STR);
        $pdo -> bindParam(":existe", $datosC["existe"], PDO::PARAM_STR);
        $pdo -> bindParam(":forma", $datosC["forma"], PDO::PARAM_STR);
        $pdo -> bindParam(":imagen", $datosC["image"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    public function CategoriaProductoM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idCategoria`, `nombreCategoria` 
                                            FROM `medicinaalternativa`.categoriaprod WHERE `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;

    }

    static public function ConsultInventarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT i.`idProducto`, i.`nombre`, i.`costo`, i.`descripcion`, i.`formaProducto`, m.`nombreMedida`, 
                                        i.`medida`, i.`cantidad_medida`, i.`cantidad_prod`, i.`porc_ganancia`, i.`existe`, f.`forma`, i.`image`
                                        FROM `medicinaalternativa`.$tablaBD AS i,
                                             `medicinaalternativa`.`medida` AS m,
                                             `medicinaalternativa`.`forma_producto` AS f
                                        WHERE i.`medida`= m.`codigo`
                                        AND i.`formaProducto`= f.`idForma`
                                        AND i.`idProducto`=:id 
                                        AND i.`estado`=0");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false; 
        }

        $pdo -> close;       

    }

    static public function DeleteInventarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                        SET `idProducto`=:id, `nombre`=`nombre`, `costo`=`costo`, `formaProducto`=`formaProducto`, 
                                        `descripcion`=`descripcion`, `medida`=`medida`, `cantidad_medida`=`cantidad_medida`, 
                                        `cantidad_prod`=`cantidad_prod`, `porc_ganancia`=`porc_ganancia`, `existe`=`existe`, 
                                        `image`=`image`,`estado`=1
                                        WHERE `idProducto`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    static public function UpdateInventarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD SET `idProducto`=:id, `nombre`=:nombre,
                                            `costo`=:costo, `descripcion`=:descrip, `formaProducto`=:forma,
                                            `medida`=:medida, `cantidad_medida`=:cantMedida, `cantidad_prod`=:cantidadProd,
                                            `porc_ganancia`=:porGanancia, `existe`=:existe, `image`=`image`
                                            WHERE `idProducto`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":costo", $datosC["costo"], PDO::PARAM_STR);
        $pdo -> bindParam(":descrip", $datosC["descrip"], PDO::PARAM_STR);
        $pdo -> bindParam(":forma", $datosC["forma"], PDO::PARAM_STR);
        $pdo -> bindParam(":medida", $datosC["medida"], PDO::PARAM_STR);
        $pdo -> bindParam(":cantMedida", $datosC["cantMedida"], PDO::PARAM_STR);
        $pdo -> bindParam(":cantidadProd", $datosC["cantidadProd"], PDO::PARAM_STR);
        $pdo -> bindParam(":porGanancia", $datosC["porGanancia"], PDO::PARAM_STR);
        $pdo -> bindParam(":existe", $datosC["existe"], PDO::PARAM_STR);
        $pdo -> bindParam(":imagen", $datosC["image"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function MedidaC(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `codigo`, `medida`
                                        FROM `medicinaalternativa`.`medida`
                                        WHERE `estado`=0");

        if($pdo ->execute()){

            return $pdo ->fetchAll();
        }else{

            return 'No hay medida';
        }

        $pdo ->close;
    }

    public function FormaM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idForma`, `forma` 
                                            FROM `medicinaalternativa`.`forma_producto` 
                                            WHERE `estado`=0");

        if($pdo ->execute()){

            return $pdo ->fetchAll();
        }else{

            return 'No hay forma';
        }

        $pdo ->close;

    }




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

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idProducto`, `categoriaprod`, 
                                        `fecha_fab`, `fecha_venc`, `laboratorio`) 
                                        VALUES (:producto, :categoria, :fecha_fab, :fecha_venc, :laboratorio)");

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

    // public function ConsultarIdProducto($nombre){

    //     $pdo = ConexionBD::cBD()->prepare("SELECT `idProducto` 
    //                                 FROM `medicinaalternativa`.`inventario` 
    //                                 WHERE `nombre`=:nombre");

    //     $pdo -> bindParam(":nombre", $nombre, PDO::PARAM_STR);

    //     if($pdo -> execute()){

    //         return $pdo -> fetch();
    //     }else{

    //         return false;
    //     }

    //     $pdo -> close;

    // }

    public function ConsultCompraProdM($datosC,$tablaBD){ 

        $pdo = ConexionBD::cBD()->prepare("SELECT c.`idProducto`, c.`categoriaprod`, c.`fecha_fab`, c.`fecha_venc`,
                                             c.`laboratorio`, cp.`nombreCategoria`, l.`nombreLaboratorio`
                                            FROM `medicinaalternativa`.`compra_prod` AS c,
                                            `medicinaalternativa`.`laboratorio` AS l,
                                            `medicinaalternativa`.`categoriaprod` AS cp
                                            WHERE  c.`idProducto`=:codigo
                                            AND l.`idLaboratorio` = c.`laboratorio`
                                            AND cp.`idCategoria`=c.`categoriaprod`");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    } 

    public function DeleteCompraProdM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idProducto`=:codigo, `categoriaprod`=`categoriaprod`, 
                                        `fecha_fab`=`fecha_fab`, `fecha_venc`=`fecha_venc`, 
                                        `laboratorio`=`laboratorio`, `estado`=1
                                        WHERE `idProducto`=:codigo");

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
                                            SET `idProducto`=:producto, `categoriaprod`=:categoria, 
                                            `fecha_fab`=:fecha_fab, `fecha_venc`=:fecha_venc, 
                                            `laboratorio`=:laboratorio
                                            WHERE `idProducto`=:producto LIMIT 1");

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