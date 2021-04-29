<?php

class CategoriaProductoM{

    static public function InsertCategoriaProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idCategoria`,`nombreCategoria`)
                                            VALUES(:codigo, :catProd)");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":catProd", $datosC["catProd"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    static public function ConsultCategoriaProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idCategoria`,`nombreCategoria`
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE (`idCategoria`=:codigo OR `nombreCategoria`=:catProd) AND `estado`=0");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":catProd", $datosC["catProd"], PDO::PARAM_STR);      

        if($pdo -> execute()){

            return $pdo ->fetch();
        }else{

            return false;
        }

        $pdo ->close;

    }

    static public function DeleteCategoriaProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idCategoria`=`idCategoria`, `nombreCategoria`=`nombreCategoria`, `estado`=1
                                            WHERE `idCategoria`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    static public function UpdateCategoriaProductoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
        SET `idCategoria`=`idCategoria`, `nombreCategoria`=:catProd
        WHERE `idCategoria`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":catProd", $datosC["catProd"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;

        }else{

            return false;
        }

        $pdo ->close;

    }

    public function ConsultInCompraProd($idCP){

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM `medicinaalternativa`.`compra_prod` 
                                            WHERE `categoriaprod`=:id");

        $pdo -> bindParam(":id", $idCP, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;

        }else{

            return false;
        }

        $pdo ->close;

    }

}

?>