<?php

class PerfilM{

    static public function InsertPerfilM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idPerfil`, `nombrePerfil`) 
                                           VALUES(:idPerfil, :perfil)");

        $pdo -> bindParam(":idPerfil", $datosC["idPerfil"], PDO::PARAM_STR);
        $pdo -> bindParam(":perfil", $datosC["perfil"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    static public function ConsultPerfilM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idPerfil`,`nombrePerfil` 
                            FROM `medicinaalternativa`.$tablaBD 
                            WHERE (`idPerfil` = :idPerfil OR `nombrePerfil` = :perfil) AND `estado`=0");

        $pdo -> bindParam(":idPerfil", $datosC["idPerfil"], PDO::PARAM_STR);
        $pdo -> bindParam(":perfil", $datosC["perfil"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return $pdo -> fetch();
        }else{
            return false;
        }

        $pdo -> close;

    }

    static public function DeletePerfilM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `idPerfil`=:idPerfil, `nombrePerfil`=`nombrePerfil`, `estado`=1
                                            WHERE `idPerfil` = :idPerfil LIMIT 1");

        $pdo -> bindParam(":idPerfil", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;

        }else{
            return false;
        }

        $pdo -> close;
    }

    static public function UpdatePerfilM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                           SET `idPerfil`=:idPerfil, `nombrePerfil`=:perfil
                                           WHERE `idPerfil` = :idPerfil LIMIT 1");

        $pdo -> bindParam(":idPerfil", $datosC["idPerfil"], PDO::PARAM_STR);
        $pdo -> bindParam(":perfil", $datosC["perfil"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;

        }else{
            return false;
        }

        $pdo -> close;

    }

    public function ConsultInAccesoUsuario($idAU){

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM `medicinaalternativa`.`accesousuario` 
                                            WHERE `idPerfil`=:id");

        $pdo -> bindParam(":id", $idAU, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;

        }else{
            return false;
        }

        $pdo -> close;


    }

    // static public function ConsultAvancM($datosC,$tablaBD){

    //     $pdo = ConexionBD::cBD()->prepare("SELECT `idPerfil`,`nombrePerfil` 
    //                                        FROM `medicinaalternativa`.$tablaBD 
    //                                        WHERE `nombrePerfil` LIKE \':perfil%\' AND `estado`=0 ");

    //     $pdo -> bindParam(":perfil", $datosC, PDO::PARAM_STR);

    //     if($pdo -> execute()){

    //         return $pdo -> fetchAll();
    //     }else{

    //         return false;
    //     }

    //     $pdo -> close;
    // }

}

?>