<?php

class MunicipioM{

    public function InsertMunicipioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idMunicipio`, `nombre`, `idDep`) 
                                            VALUES (:id, :municipio, :dep)");

        $pdo -> bindParam(":id",$datosC["codigo"],PDO::PARAM_STR);
        $pdo -> bindParam(":municipio",$datosC["municipio"],PDO::PARAM_STR);
        $pdo -> bindParam(":dep",$datosC["dep"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{
            
            return false;
        }

        $pdo -> close;
    }

    public function DepartamentoM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idDepartamento`, `nombreDepartamento`
                                            FROM `medicinaalternativa`.`departamento` WHERE `estado`=0");
        
        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function ConsultMunicipioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT m.`idMunicipio`, m.`nombre`, d.`nombreDepartamento`
                                            FROM `medicinaalternativa`.$tablaBD AS m,
                                                `medicinaalternativa`.`departamento` AS d
                                            WHERE m.`idDep` = d.`idDepartamento`
                                            AND(m.`idMunicipio`=:id OR m.`nombre`=:municipio)
                                            AND m.`estado`=0");

        $pdo -> bindParam(":id",$datosC["codigo"],PDO::PARAM_STR);
        $pdo -> bindParam(":municipio",$datosC["municipio"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function DeleteMunicipioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idMunicipio`=:id, `nombre`=`nombre`, `idDep`=`idDep`, `estado`=1
                                            WHERE `idMunicipio`=:id LIMIT 1");

        $pdo ->bindParam(":id",$datosC,PDO::PARAM_STR);
    
        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function UpdateMunicipioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idMunicipio`=:id, `nombre`=:municipio, `idDep`=:dep
                                            WHERE `idMunicipio`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);
        $pdo -> bindParam(":dep", $datosC["dep"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{
            
            return false;
        }

        $pdo -> close;
             
    }

}

?>