<?php

class SucursalC{

    public function InsertSucursalC(){

        if(isset($_POST["insert"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'direccion'=>$_POST["direccion"], 
            'tel'=>$_POST["telefono"], 'correo'=>$_POST["correo"], 'nit'=>$_POST["nit"], 'dep'=>$_POST["dep"],
            'municipio'=>$_POST["municipio"]);

            $tablaBD = "sucursal";

            $res = SucursalM::InsertSucursalM($datosC, $tablaBD);

            if($res){

                echo '<script>alert("Se agrego correctamente sucursal")</script>';
                
            }else{
                echo 'No se agrego Sucursal';
            }
        }
    }

    public function ConsultSucursalC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]);

            $tablaBD = "sucursal";
    
            $res = SucursalM::ConsultSucursalM($datosC,$tablaBD);
    
            if(!$res){
    
                echo 'No se consulto!!';
            }

        }

        echo '<tr>
                <td ><label for="id">C&oacute;digo:</label></td>
                <td ><input type="text" name="id" id="number" value="'.$res["idSucursal"].'" 
                    title="Campo numerico, No se permite texto" class="form-control">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
                <td ><label for="name">Nombre:</label></td>
                <td ><input type="text" name="nombre" id="text" value="'.$res["nombreSucursal"].'" 
                    class="form-control">
                    <small class="form-text text-danger" id="msgText"></small>
                </td>
            </tr>
            <tr>
                <td><label for="dereccion">Direcci&oacute;n:</label></td>
                <td>
                    <input type="text" name="direccion" id="text" value="'.$res["direccion"].'" 
                    title="Campo numerico, No se permite texto."  class="form-control">
                    <small class="form-text text-danger" id="msgText"></small>
                </td>
                <td><label for="tel">Telefono:</label></td>
                <td><input type="text" name="telefono" id="number" value="'.$res["telefono"].'" 
                    title="Campo numerico, No se permite texto."  class="form-control">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
            </tr>
            
            <tr>
                <td><label for="correo">Correo:</label></td>
                <td>
                    <input type="text" name="correo" id="email" value="'.$res["correo"].'" title="" 
                    class="form-control">
                    <small class="form-text text-danger" id="msgEmail"></small>
                </td>
                <td><label for="nit">Nit:</label></td>
                <td>
                    <input type="text" name="nit" id="number" value="'.$res["nit"].'" 
                    title="Campo numerico, Sin puntos ni comas."  class="form-control">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
            </tr>
            
            <tr>
                <td><label for="dep">Departamento:</label></td>
                <td>
                    <select name="dep" id="select" class="form-select">
                        <option value="">'.(isset($_POST["consult"])? $res["nombreDepartamento"] : 'Departamento').'</option>';

                    $dep = SucursalM::DepartamentoM();

                    foreach ($dep as $key => $value) {
                        echo '<option value="'.$value["idDepartamento"].'">'.$value["nombreDepartamento"].'</option>';
                    }

                    echo '</select>
                    <small class="form-text text-danger" id="msgSelect"></small>
                </td>
                <td><label for="municipio">Municipio:</label></td>
                <td>
                    <select name="municipio" id="select" class="form-select">
                    <option value="">'.(isset($_POST["consult"])? $res["nombre"] : 'Municipio').'</option>';
                        
                    $mun = SucursalM::MunicipioM();

                    foreach ($mun as $key => $value) {
                        echo '<option value="'.$value["idMunicipio"].'">'.$value["nombre"].'</option>';
                    }
                    
                    echo '</select>
                    <small class="form-text text-danger" id="msgSelect"></small>
                </td>
            </tr>';

    }

    public function DelectSucursalC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "sucursal";

            $res = SucursalM::DelectSucursalM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se elimino correctamente el registro N.'. $datosC.'")</script>';
            }else{

                echo 'No se elimino registro N.'.$datosC;
            }
        }
    }

    public function UpdateSucursalC(){

        if(isset($_POST["update"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'direccion'=>$_POST["direccion"], 
            'tel'=>$_POST["telefono"], 'correo'=>$_POST["correo"], 'nit'=>$_POST["nit"], 'dep'=>$_POST["dep"],
            'municipio'=>$_POST["municipio"]);

            $tablaBD = "sucursal";

            $res = SucursalM::UpdateSucursalM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizo correctamente el registro N.'. $datosC['id'].'")</script>';
            }else{

                echo 'No se actualizo registro N.'.$datosC;
            }

        }
    }

}

?>