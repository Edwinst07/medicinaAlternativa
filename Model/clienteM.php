<?php

class ClienteM{

    public function InsertClienteM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`cedula`, `nombre1`, `nombre2`, 
                                    `apellido1`, `apellido2`, `direccion`, `telefono`, `movil`, `correo`, 
                                    `idMunicipio`) 
                                    VALUES (:cedula, :nombre1, :nombre2, :apellido1, :apellido2, :direccion,
                                    :tel, :movil, :correo, :municipio)");

        $pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre1", $datosC["nombre1"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre2", $datosC["nombre2"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido1", $datosC["apellido1"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido2", $datosC["apellido2"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel", $datosC["tel"], PDO::PARAM_STR);
        $pdo -> bindParam(":movil", $datosC["movil"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);

        if($pdo->execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ConsultClienteM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT c.`cedula`, c.`nombre1`, c.`nombre2`, 
                                            c.`apellido1`, c.`apellido2`, c.`direccion`, c.`telefono`, 
                                            c.`movil`, c.`correo`, m.`nombre`, d.`nombreDepartamento`
                                            FROM `medicinaalternativa`.$tablaBD AS c,
                                                 `medicinaalternativa`.`municipio` AS m,
                                                 `medicinaalternativa`.`departamento` AS d
                                            WHERE c.`cedula`=:cedula 
                                            AND c.`idMunicipio`=m.`idMunicipio` 
                                            AND m.`idDep`=d.`idDepartamento` 
                                            AND c.`estado`=0 LIMIT 1");

        $pdo -> bindParam(":cedula", $datosC, PDO::PARAM_STR);

        if($pdo->execute()){

            return $pdo->fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function DeleteClienteM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                        SET `cedula`:cedula, `nombre1`=`nombre1`, `nombre2`=`nombre2`, 
                                    `apellido1`=`apellido1`, `apellido2`=`apellido2`, `direccion`=`direccion`, 
                                    `telefono`=`telefono`, `movil`=`movil`, `correo`=`correo`, 
                                    `idMunicipio`=`idMunicipio`, `estado`=1
                                    WHERE `cedula`:cedula LIMIT 1");

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function UpdateClienteM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                SET `cedula`=:cedula, `nombre1`=:nombre1, `nombre2`=:nombre2, 
                            `apellido1`=:apellido1, `apellido2`=:apellido2, `direccion`=:direccion, 
                            `telefono`=:tel, `movil`=:movil, `correo`=:correo, 
                            `idMunicipio`=:municipio
                            WHERE `cedula`=:cedula LIMIT 1");

        $pdo -> bindParam(":cedula", $datosC["cedula"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre1", $datosC["nombre1"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre2", $datosC["nombre2"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido1", $datosC["apellido1"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido2", $datosC["apellido2"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel", $datosC["tel"], PDO::PARAM_STR);
        $pdo -> bindParam(":movil", $datosC["movil"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);

        if($pdo->execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;        

    }
    
}

?>