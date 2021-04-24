<?php

class DepartamentoC{

    public function InsertDepartamentoC(){

        if(isset($_POST["insert"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'departamento'=>$_POST["departamento"]);
            $tablaBD = "departamento";

            $consult = DepartamentoM::ConsultDepartamentoM($datosC,$tablaBD);

            if($consult){

                echo "El C&oacute;digo o descripci&oacute;n <b>¡ya se encuentra registrado!</b>";
            }else{

                $res = DepartamentoM::InsertDepartamentoM($datosC,$tablaBD);

                if($res){

                    echo "<script>alert('Insertado correctamente!!')</script>";

                }else{

                    echo "No se registro!!";

                }

            }

        }

    }

    public function ConsultDepartamentoC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'departamento'=>$_POST["departamento"]);
            $tablaBD = "departamento";

            return $res = DepartamentoM::ConsultDepartamentoM($datosC,$tablaBD);

            if(!$res){
                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }

    }

    public function DeleteDepartamentoC(){

        if(isset($_POST["delete"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'departamento'=>$_POST["departamento"]);
            $tablaBD = "departamento";

            $res = DepartamentoM::DeleteDepartamentoM($datosC,$tablaBD);

            if($res){
                
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC["codigo"].'")</script>';
            }else{

                    echo 'No se elimino el registro N.'.$datosC["codigo"];
            }   

        }
    }

    public function UpdateDepartamentoC(){

        if(isset($_POST["update"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'departamento'=>$_POST["departamento"]);
            $tablaBD = "departamento";
    
            $res = DepartamentoM::UpdateDepartamentoM($datosC,$tablaBD);
    
            if($res){
                    
                echo '<script>alert("Se Actualizo correctamente  el registro N.'.$datosC["codigo"].'")</script>';
            }else{
    
                    echo 'No se Actualizo el registro N.'.$datosC["codigo"];
            } 

        }  

    }

}

?>