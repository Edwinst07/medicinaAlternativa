<?php

class MunicipioC{

    public function InsertMunicipioC(){

        if(isset($_POST["insert"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'municipio'=>$_POST["municipio"], 'dep'=>$_POST["dep"]);
            $tablaBD = "municipio";

            $consult = MunicipioM::ConsultMunicipioM($datosC, $tablaBD);

            if($consult){

                echo 'Nombre o descripci&oacute;n ya encontrado en BD. ';
            }else{

                $res = MunicipioM::InsertMunicipioM($datosC,$tablaBD);

                if($res){
    
                    echo "<script>alert('Se agrego Municipio Correctamente')</script>";
                }else{
    
                    echo 'No se agrego!!';
                }

            }

        }
    }

    public function ConsultMunicipioC(){

        global $res;

       if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'municipio'=>$_POST["municipio"]);
            $tablaBD = "municipio";

            return $res = MunicipioM::ConsultMunicipioM($datosC,$tablaBD);

            if(!$res){

                echo 'Consulta no encontrada!!';
            }
       }
        
    }

    public function DepartamentoC(){

        return MunicipioM::DepartamentoM();
    }

    public function DeleteMunicipioC(){

       if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "municipio";

            $res = MunicipioM::DeleteMunicipioM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se elimino correctamente el registro N.'.$datosC.'")</script>';
            }else{

                echo 'No se elimino el registro!!!';
            }

       }
    }

    public function UpdateMunicipioC(){

        if(isset($_POST["update"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'municipio'=>$_POST["municipio"], 'dep'=>$_POST["dep"]);
            $tablaBD = "municipio";

            $res = MunicipioM::UpdateMunicipioM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se Actualizo correctamente el registro N.'.$datosC["codigo"].'")</script>';
            }else{

                echo 'No se actualiz&oacute; el registro!!!';
            }
        }
    }
}


?>