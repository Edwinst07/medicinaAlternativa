<?php

class MedidaC{

    public function InsertMedidaC(){

        if(isset($_POST["insert"])){

            $datosC = array('id' =>$_POST["codigo"], 'nombre' =>$_POST["nombre"]);
            $tablaBD = "medida";

            $consult  = MedidaM::ConsultMedidaM($datosC,$tablaBD);

            if($consult){

                echo 'c&oacute;digo o descripci&oacute;n ya se encuentra en la BD';
            }else{

                $res = MedidaM::InsertMedidaC($datosC,$tablaBD);

                if($res){

                    echo '<script>alert("Se registro correctamente")</script>';
                }else{

                    echo 'No se registro!!'; 
                }

            }

        }

    }

    public function ConsultMedidaC(){

        if(isset($_POST["consult"])){

            $datosC = array('id' =>$_POST["codigo"], 'nombre' =>$_POST["nombre"]);
            $tablaBD = "medida";

            return $res = MedidaM::ConsultMedidaM($datosC,$tablaBD);

            if(!res){

                echo '<script>alert("Consulta no encontrada")</script>';
            }
        }
    }

    public function DeleteMedidaC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "medida";

            $res = MedidaM::DeleteMedidaM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se elimino correctamente el registro N.'.$datosC.'")</script>';
            }else{

                echo 'No se elimino!!';
            }

        }

    }

    public function UpdateMedidaC(){

        if(isset($_POST["update"])){

            $datosC = array('id' =>$_POST["codigo"], 'nombre' =>$_POST["nombre"]);
            $tablaBD = "medida";
    
            $res = MedidaM::UpdateMedidaM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["id"].'")</script>';
            }else{
    
                echo 'No se actualiz&ocaute;!!';
            }

        }

    }

    public function MostrarMedidaC(){
        return MedidaM::MostrarMedidaM();
    }

}

?>