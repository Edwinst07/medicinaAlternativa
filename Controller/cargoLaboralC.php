<?php

class CargoLaboralC{

    public function InsertCargoLaboralC(){  

        if(!empty($_POST["codigo"]) && !empty($_POST["descripcion"])){

            if(isset($_POST["insert"])){

                $datosC = array('codigo'=>$_POST["codigo"], 'desc'=>$_POST["descripcion"]);
                $tablaBD = "cargolaboral";

                $res = CargoLaboralM::InsertCargoLaboralM($datosC,$tablaBD);

                if($res){

                    echo "<script>alert('Se registro correctamente!!')</script>";
                }else{

                    echo "No se registro!!";
                }

            }
            
        }else{

            echo "Llene los campos vacios!!";
        }
    }

    public function ConsultCargoLaboralC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'desc'=>$_POST["descripcion"]);
            $tablaBD = "cargolaboral";

            $res = CargoLaboralM::ConsultCargoLaboralM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta no encontrada')</script>";
            }

        }

        echo '<tr>
                    <td><label for="id">C&oacute;digo:</label></td>
                    <td>
                        <input type="text" name="codigo" id="number" value="'.$res["idCargo"].'" title="Campo numerico."
                        class="form-control">
                        <small class="form-text text-danger" id="msgNumber"></small>
                    </td>
                </tr>
                <tr>
                    <td><label for="cl">Descripci&oacute;n:</label></td>
                    <td>
                        <input type="text" name="descripcion" id="text" value="'.$res["nombreCargo"].'" title="solo se permite texto." 
                        class="form-control">
                        <small class="form-text text-danger" id="msgText"></small>
                    </td>
                </tr>';
                    
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