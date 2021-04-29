<?php

class FormaM{

    public function InsertFormaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idForma`, `forma`) 
                                            VALUES (:id, :nombre)");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam("nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ConsultFormaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idForma`, `forma`
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE (`idForma`=:id OR `forma`=:nombre) AND `estado`=0");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam("nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function DeleteFormaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idForma`=:id, `forma`=`forma`, `estado`=1
                                            WHERE `idForma`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function UpdateFormaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idForma`=:id, `forma`=:nombre
                                            WHERE `idForma`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>