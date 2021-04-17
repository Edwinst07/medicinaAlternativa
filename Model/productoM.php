<?php

class ProductoM{

    static public function InsertProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO  `medicinaalternativa`.$tablaBD(`idProducto`, `nombre`, `costo`, 
                                            `descripcion`, `categoria`, `uni_medida`, `existe`, `fecha_fab`, `fecha_venc`, 
                                            `invima`, `precio_venta`)
                                            VALUES(:id, :nombre, :costo, :descrip, :categoria, :uniMedida, :existe, :fechaFabrica,
                                            :fechaVenc, :invima, :precioVenta)");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":costo", $datosC["costo"], PDO::PARAM_STR);
        $pdo -> bindParam(":descrip", $datosC["descrip"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":uniMedida", $datosC["uniMedida"], PDO::PARAM_STR);
        $pdo -> bindParam(":existe", $datosC["existe"], PDO::PARAM_STR);
        $pdo -> bindParam(":fechaFabrica", $datosC["fechaFabrica"], PDO::PARAM_STR);
        $pdo -> bindParam(":fechaVenc", $datosC["fechaVenc"], PDO::PARAM_STR);
        $pdo -> bindParam(":invima", $datosC["invima"], PDO::PARAM_STR);
        $pdo -> bindParam(":precioVenta", $datosC["precioVenta"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    public function CategoriaProductoM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idCategoria`, `nombreCategoria` 
                                            FROM `medicinaalternativa`.categoriaprod");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;

    }

    static public function ConsultProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT p.`idProducto`, p.`nombre`, p.`costo`, p.`descripcion`, 
                                            c.`nombreCategoria`, p.`uni_medida`, p.`existe`, p.`fecha_fab`, p.`fecha_venc`, 
                                            p.`invima`, p.`precio_venta` 
                                            FROM `medicinaalternativa`.`productos` AS p, 
                                                 `medicinaalternativa`.`categoriaprod` AS c
                                            WHERE c.`idCategoria` = p.`categoria` 
                                            AND (p.`idProducto`=:id OR p.`nombre`=:nombre) 
                                            AND p.`estado`=0");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;       

    }

    static public function DeleteProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                        SET `idProducto`=:id, `nombre`=`nombre`, `costo`=`costo`, 
                                            `descripcion`=`descripcion`, `categoria`=`categoria`, `uni_medida`=`uni_medida`, 
                                            `existe`=`existe`, `fecha_fab`=`fecha_fab`, `fecha_venc`=`fecha_venc`, 
                                            `invima`=`invima`, `precio_venta`=`precio_venta`, `estado`=1
                                        WHERE `idProducto`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    static public function UpdateProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                        SET `idProducto`=:id, `nombre`=:nombre, `costo`=:costo, 
                                            `descripcion`=:descrip, `categoria`=:categoria, `uni_medida`=:uniMedida, 
                                            `existe`=:existe, `fecha_fab`=:fechaFabrica, `fecha_venc`=:fechaVenc, 
                                            `invima`=:invima, `precio_venta`=:precioVenta
                                        WHERE `idProducto`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":costo", $datosC["costo"], PDO::PARAM_STR);
        $pdo -> bindParam(":descrip", $datosC["descrip"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        $pdo -> bindParam(":uniMedida", $datosC["uniMedida"], PDO::PARAM_STR);
        $pdo -> bindParam(":existe", $datosC["existe"], PDO::PARAM_STR);
        $pdo -> bindParam(":fechaFabrica", $datosC["fechaFabrica"], PDO::PARAM_STR);
        $pdo -> bindParam(":fechaVenc", $datosC["fechaVenc"], PDO::PARAM_STR);
        $pdo -> bindParam(":invima", $datosC["invima"], PDO::PARAM_STR);
        $pdo -> bindParam(":precioVenta", $datosC["precioVenta"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>