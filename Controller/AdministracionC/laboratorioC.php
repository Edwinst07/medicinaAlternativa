<?php

class LaboratorioC{

    public function InsertLaboratorioC(){

        if(isset($_POST["insert"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'nombre'=>$_POST["nombre"], 'correo'=>$_POST["correo"],
                            'tel'=>$_POST["tel"], 'invima'=>$_POST["invima"], 'direccion'=>$_POST["direccion"],
                            'municipio'=>$_POST["municipio"]);

            $tablaBD = "laboratorio";

            if(LaboratorioM::ConsultLaboratorioM($datosC, $tablaBD)){

                echo 'C&eacute;dula o nombre laboratorio ya se encuentra registrada!!';
            }else{

                $res = LaboratorioM::InsertLaboratorioM($datosC,$tablaBD);

                if($res){
    
                    echo '<script>alert("Se agrego laboratorio correctamente!!!")</script>';
                }else{
    
                    echo 'No se agreg&oacute; laboratorio!!';
                }

            }

        }

    }

    public function ConsultLaboratorioC(){

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'nombre'=>$_POST["nombre"]);

            $tablaBD = "laboratorio";
    
            return $res = LaboratorioM::ConsultLaboratorioM($datosC, $tablaBD);
    
            if(!$res){
    
                echo 'No se encuentra en la Base de datos!!';
            }
            
        }

    }

    public function DeleteLaboratorioC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "laboratorio";

            $res = LaboratorioM::DeleteLaboratorioM($datosC,$tablaBD);

            if($res){

                echo "<script>alert('Se eliminó correctamente!!')</script>";

            }else{

                echo "No se elimin&oacute; registro!!";

            }

        }   

    }

    public function UpdateLaboratorioC(){

      if(isset($_POST["update"])){

        $datosC = array('codigo'=>$_POST["codigo"], 'nombre'=>$_POST["nombre"], 'correo'=>$_POST["correo"],
        'tel'=>$_POST["tel"], 'invima'=>$_POST["invima"], 'direccion'=>$_POST["direccion"],
        'municipio'=>$_POST["municipio"]);

        $tablaBD = "laboratorio";

        $res = LaboratorioM::UpdateLaboratorioM($datosC,$tablaBD);

        if($res){

            echo "<script>alert('Se actualizó correctamente!!')</script>";
        }else{

            echo "No se actualiz&oacute; el registro!!";
        }

      }

    }


}


?>