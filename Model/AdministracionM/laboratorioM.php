<?php

class LaboratorioM{

    public function InsertLaboratorioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idLaboratorio`, `nombreLaboratorio`, 
                                            `correo`, `telefono`, `invima`, `direccion`, `idMunicipio`) 
                                            VALUES (:codigo, :nombre, :correo, :tel, :invima, :direccion, :municipio)");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel", $datosC["tel"], PDO::PARAM_STR);
        $pdo -> bindParam(":invima", $datosC["invima"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ConsultLaboratorioM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT l.`idLaboratorio`, l.`nombreLaboratorio`, l.`correo`, 
                                            l.`telefono`, l.`invima`, l.`direccion`, l.`idMunicipio`, m.`nombreMunicipio`, d.`nombreDepartamento` 
                                            FROM `medicinaalternativa`.$tablaBD AS l,
                                                 `medicinaalternativa`.`departamento` AS d,
                                                 `medicinaalternativa`.`municipio` AS m
                                            WHERE (`idLaboratorio`=:codigo OR `nombreLaboratorio`=:nombre)
                                            AND l.`idMunicipio`=m.`idMunicipio`
                                            AND d.`idDepartamento`=m.`idDep`
                                            AND l.`estado`=0 LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo ->fetch();
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function DeleteLaboratorioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `idLaboratorio`=`idLaboratorio`,`nombreLaboratorio`=`nombreLaboratorio`,
                                            `correo`=`correo`,`telefono`=`telefono`,`invima`=`invima`,
                                            `direccion`=`direccion`,`idMunicipio`=`idMunicipio`,`estado`=1
                                            WHERE `idLaboratorio`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
        
    }
    
    public function UpdateLaboratorioM($datosC,$tablaBD){
        // $invima = "Si";
        // $municipio = "2";
        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                        SET `idLaboratorio`=:codigo,`nombreLaboratorio`=:nombre,
                                        `correo`=:correo,`telefono`=:tel,`invima`=:invima,
                                        `direccion`=:direccion,`idMunicipio`=:municipio
                                        WHERE `idLaboratorio`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel", $datosC["tel"], PDO::PARAM_STR);
        $pdo -> bindParam(":invima", $datosC["invima"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>