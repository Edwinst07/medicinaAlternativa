<?php 
require_once "conexionBD.php";

class AccesoUsuarioC{

    public function InsertAccesoUsuarioC(){

        if(!empty($_POST["cedula"]) && !empty($_POST["nombre"]) && !empty($_POST["pass"]) && !empty($_POST["perfil"])){

            if(isset($_POST["insert"])){

                $datosC = array('cedula' => $_POST["cedula"],'nombre' => $_POST["nombre"], 'pass' => $_POST["pass"], 'perfil' => $_POST["perfil"]);
                $tablaBD = "accesoUsuario";

                $consult = AccesoUsuarioM::ConsultAccesoUsuarioM($datosC,$tablaBD);

                if($consult){

                    echo "El C&oacute;digo o descripci&oacute;n <b>¡ya se encuentra registrado!</b>";

                }else{

                    $res = AccesoUsuarioM::InsertAccesoUsuarioM($datosC,$tablaBD);
    
                    if($res){
    
                        echo "<script>alert('Se agrego Perfil Correctamente')</script>";
                    }else{
    
                        echo "Error al agregar empleado";
                    }

                }   
    
            }

        }else{

            echo "Llene los campos vacios!";
        }

    }

    public function ConsultAccesoUsuarioC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('cedula' => $_POST["cedula"],'nombre' => $_POST["nombre"]);
            $tablaBD = "accesoUsuario";

            $res = AccesoUsuarioM::ConsultAccesoUsuarioM($datosC,$tablaBD);

            if(!$res){
                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }

        echo '<tr>
                <td><label for="cedula">Cedula:</label></td>
                <td>
                    <input type="text" id="number" name="cedula" value="'.$res["cedula"].'"
                    pattern="(^(?:\+|-)?\d+$)" title="Campo numerico" class="form-control">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
            </tr>
            <tr>
                <td><label for="name">Nombre:</label></td>
                <td>
                    <input type="text" name="nombre" id="text" value="'.$res["nombre"].'" title="solo se permite texto." 
                    pattern="(^[a-zA-Z Á]{3,30}$)" class="form-control">
                    <small class="form-text text-danger" id="msgText"></small>
                </td>
            </tr>
            <tr>
                <td><label for="password">Contraseña:</label></td>
                <td>
                    <input type="password" name="pass" id="pass" value="'.$res["password"].'" title="Minimo 3 caracteres"
                    class="form-control">
                    <small class="form-text text-danger" id="msgPass"></small>
                </td>
            </tr>
            <tr>
                <td><label for="perfil">Perfil:</label></td>';

                $res2 = AccesoUsuarioM::SelectPerfilM();
        
        echo '<td>
            <Select id="select" name="perfil" class="form-select">
                <option value="">'.((isset($_POST["consult"]))?$res["nombrePerfil"] : 'Perfil').'</option>';
    
                foreach ($res2 as $key => $value) {
    
                    echo '<option value="'.$value["idPerfil"].'">'.$value["nombrePerfil"].'</option>';
    
                }
    
          echo '</Select>
                <small class="form-text text-danger" id="msgSelect"></small>
                </td>
            </tr>';


        if(!$res2){

            echo '<td>
                    <Select id="select" name="perfil" class="form-select">
                        <option value="">Perfil</option>
                        <option value="">No hay registro</option>
                    </Select>
                    <small class="form-text text-danger" id="msgSelect"></small>
                   </td>
                   </tr>';

        }
    

    }

    public function DeleteAccesoUsuarioC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["cedula"];
            $tablaBD = "accesoUsuario";

            $res = AccesoUsuarioM::DeleteAccesoUsuarioM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("El registro se elimino correctamente")</script>';
            }else{

                echo 'el registro de la c&eacute;dula No.'.$datosC.' No se elimin&oacute;';
            }

        }

    }

    public function UpdateAccesoUsuarioC(){

        if(isset($_POST["update"])){

            $datosC = array('cedula' => $_POST["cedula"], 'nombre' => $_POST["nombre"], 
            'pass' => $_POST["pass"], 'perfil' => $_POST["perfil"]);
            $tablaBD = "accesoUsuario";

            $res = AccesoUsuarioM::UpdateAccesoUsuarioM($datosC,$tablaBD);

            if($res){

                echo "<script>alert('Se actualizó el registro correctamente!!')</script>";

            }else{

                echo "No se actualiz&oacute; el registro!!";

            }


        }
    }

}


?>