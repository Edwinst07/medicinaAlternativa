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

        $pdo = ConexionBD::cBD()->prepare("SELECT i.`idProducto`, i.`nombre`, i.`costo`, i.`descripcion`, m.`medida`, 
                                        i.`cantidad_medida`, i.`cantidad_prod`, i.`porc_ganancia`, i.`existe`, f.`forma`
                                        FROM `medicinaalternativa`.$tablaBD AS i,
                                             `medicinaalternativa`.`medida` AS m,
                                             `medicinaalternativa`.`forma_producto` AS f
                                        WHERE i.`medida`= m.`codigo`
                                        AND i.`formaProducto`= f.`idForma`
                                        AND (i.`idProducto`=:id OR i.`nombre`=:nombre) 
                                        AND i.`estado`=0");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

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
                                            `porc_ganancia`=:porGanancia, `existe`=:existe, `image`=:imagen
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

}

?>