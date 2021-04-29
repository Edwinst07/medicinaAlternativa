<?php

class CargoLaboralM{

    static public function InsertCargoLaboralM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idCargo`,`nombreCargo`)
                                            VALUES(:codigo, :descripcion)");

        $pdo -> bindParam(":codigo",$datosC["codigo"],PDO::PARAM_STR);
        $pdo -> bindParam(":descripcion",$datosC["desc"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    static public function ConsultCargoLaboralM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idCargo`, `nombreCargo`
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE (`idCargo`=:codigo OR `nombreCargo`=:descripcion) AND `estado`=0");

        $pdo -> bindParam(":codigo",$datosC["codigo"],PDO::PARAM_STR);
        $pdo -> bindParam(":descripcion",$datosC["desc"],PDO::PARAM_STR);

        if($pdo ->execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;        

    }

    static public function DeleteCargoLaboralM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idCargo`=:codigo, `nombreCargo`=`nombreCargo`, `estado`=1
                                            WHERE `idCargo`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR);

        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close; 

    }

    static public function UpdateCargoLaboralM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idCargo`=:codigo, `nombreCargo`=:cargo
                                            WHERE `idCargo`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":cargo", $datosC["desc"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

    }

    public function ConsultInEmpleado($idCargoLaboral){

        $pdo = ConexionBD::cBD()->prepare("SELECT `cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, 
                                        `genero`, `direccion`, `telefono`, `movil`, `correo`, `fecha_nacimiento`, 
                                        `idSucursal`, `estado` 
                                        FROM `medicinaalternativa`.`empleado` 
                                        WHERE `idCargoLaboral`=:id");

        $pdo -> bindParam(":id", $idCargoLaboral, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

    }

}

?>