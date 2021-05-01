<?php

class ModoPagoC{

    public function InsertModoPagoC(){ 

        if(isset($_POST["insert"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'modoPago'=>$_POST["modoPago"]);
            $tablaBD = "modopago";

            if(ModoPagoM::ConsultModoPagoM($datosC, $tablaBD)){

                echo '<script>alert("El registro Cod.'.$datosC["codigo"].' ya esta registrado!!")</script>';

            }else{

                $res = ModoPagoM::InsertModoPagoM($datosC,$tablaBD);

                if($res){

                    echo '<script>alert("Se registro correctamente")</script>';

                }else{

                    echo 'No se registro!!';

                }

            }

        }

    }

    public function ConsultModoPagoC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'modoPago'=>$_POST["modoPago"]);
            $tablaBD = "modopago";

            return $res = ModoPagoM::ConsultModoPagoM($datosC,$tablaBD);

            if(!$res){

                echo '<script>alert("Consulta no encontrada")</script>';
            }

        }

    }

    public function DeleteModoPagoC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "modopago";

            $res = ModoPagoM::DeleteModoPagoM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se elimino correctamente el registro N.'.$datosC.'")</script>';
            }else{

                echo 'No se elimino el registro!!';
            }

        }

    }

    public function UpdateModoPagoC(){

        if(isset($_POST["update"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'modoPago'=>$_POST["modoPago"]);
            $tablaBD = "modopago";
    
            $res = ModoPagoM::UpdateModoPagoM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["codigo"].'")</script>';
            }else{
    
                echo 'No se actualiz&oacute; el registro!!';
            }

        }

    }

    public function MostrarMpC(){
        return ModoPagoM:: MostrarMpM();
    }

}

?>