<?php

class AccesoUsuarioM{

    static public function InsertAccesoUsuarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`cedula`,`nombre`,`password`,`perfil`) 
                                            VALUES (:cedula, :nombre, :pass, :perfil)");

        $pdo -> bindParam(':cedula', $datosC["cedula"], PDO::PARAM_STR);
        $pdo -> bindParam(':nombre', $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(':pass', $datosC["pass"], PDO::PARAM_STR);
        $pdo -> bindParam(':perfil', $datosC["perfil"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function SelectPerfilM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idPerfil`,`nombrePerfil`
                                            FROM `medicinaalternativa`.perfil ");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;
    }

    static public function ConsultAccesoUsuarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT a.`cedula`, a.`nombre`, a.`password`, a.`perfil`, p.`nombrePerfil`  
                                    FROM `medicinaalternativa`.accesousuario AS a, `medicinaalternativa`.perfil AS p  
                                    WHERE a.`perfil` = p.`idPerfil` AND  (a.`cedula`=:cedula OR a.`nombre`=:nombre)
                                    AND a.`estado`=0");

        $pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_STR); 
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR); 

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

    static public function DeleteAccesoUsuarioM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `cedula`=:cedula, `nombre`=`nombre`, 
                                                `password`=`password`, `perfil`=`perfil`, `estado`=1
                                            WHERE `cedula` = :cedula LIMIT 1");

        $pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }else{
            return false;
        }

        $pdo -> close;
    }

    static public function UpdateAccesoUsuarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `cedula`=:cedula, `nombre`=:nombre, `password`=:pass, `perfil`=:perfil
                                            WHERE `cedula`=:cedula LIMIT 1");

        $pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":pass", $datosC["pass"], PDO::PARAM_STR);
        $pdo -> bindParam(":perfil", $datosC["perfil"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>