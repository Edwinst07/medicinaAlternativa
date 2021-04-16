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

            $res = DepartamentoM::ConsultDepartamentoM($datosC,$tablaBD);

            if(!$res){
                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }

        echo '<tr>
                <td><label for="id">C&oacute;digo:</label></td>
                <td>
                    <input type="text" name="codigo" value="'.$res["idDepartamento"].'" id="number" title="Campo numerico"
                    class="form-control">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
            </tr>
            <tr>
                <td><label for="dep">Descripci&oacute;n:</label></td>
                <td><input type="text" name="departamento" value="'.$res["nombreDepartamento"].'" id="text" title="Campo de texto"
                    class="form-control">
                    <small class="form-text text-danger" id="msgText"></small>
                </td>
            </tr>';

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