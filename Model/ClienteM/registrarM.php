<?php

class RegistrarM{

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

    public function RegistrarClienteM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`cedula`, `nombre1`, `nombre2`, `apellido1`, 
                                    `apellido2`, `direccion`, `telefono`, `movil`, `correo`, `idMunicipio`) 
                                    VALUES (:cedula, :nombre1, :nombre2, :apellido1, :apellido2, :direccion,
                                            :telefono, :celular, :correo, :municipio)");

        $pdo -> bindParam(":cedula",$datosC["cedula"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre1",$datosC["nombre1"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre2",$datosC["nombre2"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido1",$datosC["apellido1"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido2",$datosC["apellido2"], PDO::PARAM_STR);
        $pdo -> bindParam(":direccion",$datosC["direccion"], PDO::PARAM_STR);
        $pdo -> bindParam(":telefono",$datosC["telefono"], PDO::PARAM_STR);
        $pdo -> bindParam(":celular",$datosC["celular"], PDO::PARAM_STR);
        $pdo -> bindParam(":correo",$datosC["correo"], PDO::PARAM_STR);
        $pdo -> bindParam(":municipio",$datosC["municipio"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function AccesoUsuarioM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`cedula`, 
                                            `nombre`, `password`, `idPerfil`) 
                                            VALUES (:cedula, :nombre, :pass, 4)");

        $pdo -> bindParam(":cedula",$datosC["cedula"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre",$datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":pass",$datosC["pass"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>