<?php

class ModoPagoM{

    static public function InsertModoPagoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idModoPago`, `nombrePago`)
                                            VALUES(:codigo, :modoPago)");

        $pdo -> bindParam(":codigo",$datosC["codigo"],PDO::PARAM_STR);
        $pdo -> bindParam(":modoPago",$datosC["modoPago"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    static public function ConsultModoPagoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()-> prepare("SELECT `idModoPago`, `nombrePago`
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE (`idModoPago`=:codigo OR `nombrePago`=:modoPago) AND `estado`=0");

        $pdo -> bindParam(":codigo",$datosC["codigo"],PDO::PARAM_STR);
        $pdo -> bindParam(":modoPago",$datosC["modoPago"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo->fetch();
        }else{

            return false;
        }

        $pdo -> close; 

    }

<<<<<<< HEAD
    static public function DeleteModoPagoM($datosC,$tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idModoPago`=:codigo, `nombrePago`=`nombrePago`, `estado`=1
                                            WHERE `idModoPago`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

    static public function UpdateModoPagoM($datosC,$tablaBD){

        $pdo = COnexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.$tablaBD
                                            SET `idModoPago`=:codigo, `nombrePago`=:modoPago
                                            WHERE `idModoPago`=:codigo LIMIT 1");

        $pdo -> bindParam(":codigo", $datosC["codigo"], PDO::PARAM_STR);
        $pdo -> bindParam(":modoPago", $datosC["modoPago"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo ->close;

    }

=======
>>>>>>> master
}

?>