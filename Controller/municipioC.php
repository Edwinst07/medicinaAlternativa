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

            $res = MunicipioM::ConsultMunicipioM($datosC,$tablaBD);

            if(!$res){

                echo 'Consulta no encontrada!!';
            }
       }

       echo '<tr>
                    <td><label for="id">C&oacute;digo:</label></td>
                    <td>
                        <input type="text" name="codigo" value="'.$res["idMunicipio"].'" id="number" title="Campo numerico"
                        class="form-control">
                        <small class="form-text text-danger" id="msgNumber"></small>
                    </td>
                </tr>
                <tr>
                    <td><label for="mun">Descripci&oacute;n:</label></td>
                    <td><input type="text" name="municipio" value="'.$res["nombre"].'" id="text" title="Campo de texto"
                        class="form-control">
                        <small class="form-text text-danger" id="msgText"></small>
                    </td>
                </tr>
                <tr>
                    <td><label for="dep">Departamento:</label></td>
                    <td>
                        <select name="dep" id="select" class="form-select">
                            <option value="">'.((isset($_POST["consult"]))?$res["nombreDepartamento"] : 'Departamento').'</option>';
                        
                            $dep = MunicipioM::DepartamentoM();

                            foreach ($dep as $key => $value) {

                                echo '<option value="'.$value["idDepartamento"].'">'.$value["nombreDepartamento"].'</option>';
                                
                            }
                            if(!$dep){
                                    
                                echo '<option value="">No hay Departamentos</option>';
                            }

                    echo '</select>
                        <small class="form-text text-danger" id="msgText"></small>
                    </td>
                </tr>';

        
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