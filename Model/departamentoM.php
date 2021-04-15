<?php 

class DepartamentoM{

    static public function InsertDepartamentoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idDepartamento`,`nombreDepartamento`)
        VALUES(:codigo, :departamento)");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":departamento", $datosC["departamento"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }


    static public function ConsultDepartamentoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idDepartamento`,`nombreDepartamento`
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE (`idDepartamento`=:codigo OR `nombreDepartamento`=:departamento) 
                                            AND `estado`=0");
    
        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":departamento", $datosC["departamento"], PDO::PARAM_STR);     
        
        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;
    }

    static public function DeleteDepartamentoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `idDepartamento`=`idDepartamento`, 
                                                `nombreDepartamento`=`nombreDepartamento`, `estado`=1
                                            WHERE `idDepartamento`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":departamento", $datosC["departamento"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    static public function UpdateDepartamentoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `idDepartamento`=:codigo, `nombreDepartamento`=:departamento
                                            WHERE `idDepartamento`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":departamento", $datosC["departamento"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

}

?>