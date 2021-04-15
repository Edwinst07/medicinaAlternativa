<?php

require_once "conexionBD.php";

class PerfilC{

    public function InsertPerfilC(){
        
        if (!empty($_POST["id"]) && !empty($_POST["perfil"])) {  

            if(isset($_POST["insert"])){

                $datosC = array('idPerfil' => $_POST["id"], 'perfil' => $_POST["perfil"]);
                $tablaBD = "perfil";
    
                $consult = PerfilM::ConsultPerfilM($datosC,$tablaBD);
    
                if($consult){
    
                    echo "El C&oacute;digo o descripci&oacute;n <b>¡ya se encuentra registrado!</b>";
                }else{
    
                    $res = PerfilM::InsertPerfilM($datosC,$tablaBD);
    
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

    public function ConsultPerfilC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('idPerfil' => $_POST["id"], 'perfil' => $_POST["perfil"]);
            $tablaBD = "perfil";

            $res = PerfilM::ConsultPerfilM($datosC,$tablaBD);

            if(!$res){
                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }

        echo '  <tr>
                    <td><label for="id">C&oacute;digo:</label></td>
                    <td>
                        <input type="text" name="id" id="number" value="'. $res["idPerfil"].'" 
                        pattern="(^(?:\+|-)?\d+$)" title="Campo numerico" class="form-control">
                        <small class="form-text text-danger" id="msgNumber" ></small>
                    </td>
                </tr>
                <tr>
                    <td><label for="perfil">Descripci&oacute;n:</label></td>
                    <td>
                        <input type="text" name="perfil" id="text" value="'. $res["nombrePerfil"].'"
                        pattern="(^[a-zA-Z Á]{3,30}$)" title="Campo de texto, desde 3 caracteres" class="form-control">
                        <small class="form-text text-danger" id="msgText" ></small>
                    </td>
                </tr>';
                        
    }

    public function DeletePerfilC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "perfil";
    
            $res = PerfilM::DeletePerfilM($datosC,$tablaBD);
    
            if ($res) {
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
            }else{
                echo 'No se elimino el registro N.'.$datosC;
            }

        }

    }

    public function UpdatePerfilC(){

        if (isset($_POST["update"])) {
            
            $datosC = array('idPerfil' => $_POST["id"], 'perfil' => $_POST["perfil"]);
            $tablaBD = "perfil";

            $res = PerfilM::UpdatePerfilM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["idPerfil"].'")</script>';
            }else{
                echo "No actualiz&oacute; el registro";
            }
            
        }
    }

    // public function ConsultAvancC(){

    //     if(isset($_POST["desc"])){

    //         $datosC = $_POST["desc"];
    //         $tablaBD = "perfil";

    //         $res = PerfilM::ConsultAvancM($datosC,$tablaBD);

    //         if($res == false){

    //             echo '<tr>
    //                     <td"> - </td>
    //                     <td style="color:tomato;"> No hay registro </td>
                        
    //                   </tr>';

    //         }else{

    //             echo '<tr>
    //                     <th>C&oacute;digo</th>
    //                     <th>Descripci&oacute;n</th>
    //                   </tr>';

    //                   foreach ($res as $key => $value) {
                          
    //                     echo '<tr>
    //                             <td>'.$value["idPerfil"].'</td>
    //                             <td>'.$value["nombrePerfil"].'</td>
    //                         </tr>';
    //                   }

    //         }
    //     }
    //}
    
}

?>