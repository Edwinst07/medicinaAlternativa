<?php

class CargoLaboralC{

    public function InsertCargoLaboralC(){  


        if(isset($_POST["insert"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'desc'=>$_POST["descripcion"]);
            $tablaBD = "cargolaboral";

            if(CargoLaboralM::ConsultCargoLaboralM($datosC,$tablaBD)){

                echo '<script>alert("El registro Cod.'.$datosC["codigo"].' ya esta registrado!!")</script>';

            }else{

                $res = CargoLaboralM::InsertCargoLaboralM($datosC,$tablaBD);

                if($res){

                    echo "<script>alert('Se registro correctamente!!')</script>";
                }else{

                    echo "No se registro!!";
                }

            }

        }

    }

    public function ConsultCargoLaboralC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'desc'=>$_POST["descripcion"]);
            $tablaBD = "cargolaboral";

            return $res = CargoLaboralM::ConsultCargoLaboralM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta no encontrada')</script>";
            }

        }
                    
    }

    public function DeleteCargoLaboralC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "cargolaboral"; 

            $res = CargoLaboralM::DeleteCargoLaboralM($datosC,$tablaBD);

            if ($res) {
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
            }else{
                echo 'No se elimino el registro N.'.$datosC;
            }

        }

    }

    public function UpdateCargoLaboralC(){

        if(isset($_POST["update"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'desc'=>$_POST["descripcion"]);
            $tablaBD = "cargolaboral";

            $res = CargoLaboralM::UpdateCargoLaboralM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["codigo"].'")</script>';
            }else{

                echo 'No se actualizo';
            }

        }

    }

}

?>