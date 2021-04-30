<?php

class MedidaM{

    public function InsertMedidaC($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`codigo`, `medida`)
                                            VALUES (:id, :nombre)");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function ConsultMedidaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `codigo`, `medida`
                                        FROM `medicinaalternativa`.$tablaBD
                                        WHERE (`codigo`=:id OR `medida`=:nombre)
                                        AND `estado`=0");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo->fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function DeleteMedidaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `codigo`=:id, `medida`=`medida`, `estado`=1
                                            WHERE `codigo`=:id LIMIT 1");
        
        $pdo -> bindParam(":id", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function UpdateMedidaM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `codigo`=:id, `medida`=:nombre
                                            WHERE `codigo`=:id");
        
        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function MostrarMedidaM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM `medicinaalternativa`.`medida` 
                                            WHERE `estado`=0");

        if($pdo ->execute()){

            return $pdo -> fetchAll();
        }else{

            return 'No hay Medida';
        }

        $pdo -> close;
    }

}

?>