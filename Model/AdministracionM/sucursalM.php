<?php


class SucursalM{

    public function InsertSucursalM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idSucursal`, `nombreSucursal`, `direccion`,
                                        `telefono`, `correo`, `nit`, `idMunicipio`)
                                        VALUES (:id, :nombre, :direccion, :tel, :correo, :nit, :municipio)");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel", $datosC["tel"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":nit", $datosC["nit"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);

        if($pdo->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;
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

    public function MunicipioM($depart){
        
    require_once "../../../Controller/conexionBD.php";

        $pdo = ConexionBD::cBD()->prepare("SELECT `idMunicipio`, `nombre` 
                                        FROM `medicinaalternativa`.`municipio`  WHERE `idDep`=:id AND `estado`=0");
        
        $pdo -> bindParam(":id",$depart, PDO::PARAM_STR); 
        
        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function ConsultSucursalM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT s.`idSucursal`, s.`nombreSucursal`, s.`direccion`, s.`telefono`, s.`correo`, 
                                            s.`nit`, d.`nombreDepartamento`, m.`nombre` 
                                            FROM `medicinaalternativa`.$tablaBD AS s,
                                                `medicinaalternativa`.`departamento` AS d,
                                                `medicinaalternativa`.`municipio` AS m
                                            WHERE d.`idDepartamento`=m.`idDep`
                                            AND m.`idMunicipio`=s.`idMunicipio`
                                            AND (s.`idSucursal`=:id OR s.`nombreSucursal`=:nombre) LIMIT 1");

        $pdo -> bindParam(":id",$datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre",$datosC["nombre"], PDO::PARAM_STR);

        if($pdo ->execute()){

            return $pdo ->fetch();
        }else{

            return false;
        }

        $pdo ->close;

    }

    public function DelectSucursalM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `idSucursal`=:id, `nombreSucursal`=`nombreSucursal`, `direccion`=`direccion`,
                                        `telefono`=`telefono`, `correo`=`correo`, `nit`=`nit`, 
                                        `idMunicipio`=`idMunicipio`, `estado`=1
                                        WHERE `idSucursal`=:id LIMIT 1");

        $pdo -> bindParam(":id",$datosC, PDO::PARAM_STR);  
        
        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;
    }

    public function UpdateSucursalM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD 
                                            SET `idSucursal`=:id, `nombreSucursal`=:nombre, `direccion`=:direccion,
                                        `telefono`=:tel, `correo`=:correo, `idMunicipio`=:municipio
                                        WHERE `idSucursal`=:id LIMIT 1");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion", $datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":tel", $datosC["tel"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":nit", $datosC["nit"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio", $datosC["municipio"], PDO::PARAM_STR);

        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    public function ConsultInEmpleado($idSucursal){

        $pdo = ConexionBD::cBD()->prepare("SELECT `cedula`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, 
                                            `genero`, `direccion`, `telefono`, `movil`, `correo`, 
                                            `fecha_nacimiento`, `idSucursal`, `estado` 
                                            FROM `medicinaalternativa`.`empleado` 
                                            WHERE `idSucursal`=:id");

        $pdo -> bindParam(":id", $idSucursal, PDO::PARAM_STR);

        if($pdo ->execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

}

?>