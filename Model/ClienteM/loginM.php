<?php

class LoginM{

    public function IngresoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `cedula`, `nombre`, `password`, `estado`, `idPerfil` 
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE `cedula`=:user AND `estado`=0 ");

        $pdo -> bindParam(":user",$datosC["user"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo ->fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>