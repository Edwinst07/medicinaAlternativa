<?php

class EmpleadoM{

    public function InsertEmpleadoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`cedula`, `nombre1`, 
                                        `nombre2`, `apellido1`, `apellido2`, `genero`, `direccion`, `telefono`, 
                                    `movil`, `correo`, `fecha_nacimiento`, `idSucursal`, `idCargoLaboral`) 
                                    VALUES (:cedula, :nombre1, :nombre2, :apellido1, :apellido2, :genero,
                                    :direccion, :tel, :movil, :correo, :fechaNacimiento, :sucursal, :cargoLaboral)");

        $pdo -> bindParam(":cedula",$datosC["cedula"],PDO::PARAM_STR);
        $pdo -> bindParam(":nombre1",$datosC["nombre1"],PDO::PARAM_STR);
        $pdo -> bindParam(":nombre2",$datosC["nombre2"],PDO::PARAM_STR);
        $pdo -> bindParam(":apellido1",$datosC["apellido1"],PDO::PARAM_STR);
        $pdo -> bindParam(":apellido2",$datosC["apellido2"],PDO::PARAM_STR);
        $pdo -> bindParam(":genero",$datosC["genero"],PDO::PARAM_STR);
        $pdo -> bindParam(":direccion",$datosC["direccion"],PDO::PARAM_STR);
        $pdo -> bindParam(":tel",$datosC["tel"],PDO::PARAM_STR);
        $pdo -> bindParam(":movil",$datosC["movil"],PDO::PARAM_STR);
        $pdo -> bindParam(":correo",$datosC["correo"],PDO::PARAM_STR);
        $pdo -> bindParam(":fechaNacimiento",$datosC["fechaNacimiento"],PDO::PARAM_STR);
        $pdo -> bindParam(":sucursal",$datosC["sucursal"],PDO::PARAM_STR);
        $pdo -> bindParam(":cargoLaboral",$datosC["cargoLaboral"],PDO::PARAM_STR);

        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    public function SucursalM(){ 

        $pdo = ConexionBD::cBD()->prepare("SELECT `idSucursal`, `nombreSucursal` 
                                            FROM `medicinaalternativa`.`sucursal` 
                                            WHERE  `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function CargoLaboralM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idCargo`, `nombreCargo` 
                                            FROM `medicinaalternativa`.`cargolaboral` 
                                            WHERE `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;        

    }

    public function ConsultEmpleadoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT e.`cedula`, e.`nombre1`, e.`nombre2`, e.`apellido1`, e.`apellido2`, 
                        e.`genero`, e.`direccion`, e.`telefono`, e.`movil`, e.`correo`, e.`fecha_nacimiento`, 
                        s.`nombreSucursal`, c.`nombreCargo`
                        FROM `medicinaalternativa`.$tablaBD AS e,
                            `medicinaalternativa`.`cargolaboral` AS c,
                            `medicinaalternativa`.`sucursal` AS s
                        WHERE e.`idSucursal`=s.`idSucursal` 
                        AND e.`idCargoLaboral`=c.`idCargo` 
                        AND e.`cedula`=:cedula
                        AND e.`estado`=0 LIMIT 1");

        $pdo -> bindParam(":cedula",$datosC,PDO::PARAM_STR);

        if($pdo ->execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo ->close;
    }

    public function DeleteEmpleadoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                            SET `cedula`=:cedula, `nombre1`=`nombre1`, `nombre2`=`nombre2`, `apellido1`=`apellido1`, 
                            `apellido2`=`apellido2`, `genero`=`genero`, `direccion`=`direccion`, `telefono`=`telefono`, `movil`=`movil`, 
                            `correo`=`correo`, `fecha_nacimiento`=`fecha_nacimiento`, `idSucursal`=`idSucursal`, 
                            `idCargoLaboral`=`idCargoLaboral`, `estado`=1
                            WHERE `cedula`=:cedula LIMIT 1");

        $pdo -> bindParam(":cedula", $datosC, PDO::PARAM_STR);

        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;        

    }

    public function UpdateEmpleadoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                            SET `cedula`=:cedula, `nombre1`=:nombre1, `nombre2`=:nombre2, `apellido1`=:apellido1, 
                            `apellido2`=:apellido2, `genero`=:genero, `direccion`=:direccion, `telefono`=:tel, 
                            `movil`=:movil, `correo`=:correo, `fecha_nacimiento`=:fechaNacimiento, 
                            `idSucursal`=:sucursal, `idCargoLaboral`=:cargoLaboral
                            WHERE `cedula`=:cedula LIMIT 1");

        $pdo -> bindParam(":cedula",$datosC["cedula"],PDO::PARAM_STR);
        $pdo -> bindParam(":nombre1",$datosC["nombre1"],PDO::PARAM_STR);
        $pdo -> bindParam(":nombre2",$datosC["nombre2"],PDO::PARAM_STR);
        $pdo -> bindParam(":apellido1",$datosC["apellido1"],PDO::PARAM_STR);
        $pdo -> bindParam(":apellido2",$datosC["apellido2"],PDO::PARAM_STR);
        $pdo -> bindParam(":genero",$datosC["genero"],PDO::PARAM_STR);
        $pdo -> bindParam(":direccion",$datosC["direccion"],PDO::PARAM_STR);
        $pdo -> bindParam(":tel",$datosC["tel"],PDO::PARAM_STR);
        $pdo -> bindParam(":movil",$datosC["movil"],PDO::PARAM_STR);
        $pdo -> bindParam(":correo",$datosC["correo"],PDO::PARAM_STR);
        $pdo -> bindParam(":fechaNacimiento",$datosC["fechaNacimiento"],PDO::PARAM_STR);
        $pdo -> bindParam(":sucursal",$datosC["sucursal"],PDO::PARAM_STR);
        $pdo -> bindParam(":cargoLaboral",$datosC["cargoLaboral"],PDO::PARAM_STR);

        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

}

?>