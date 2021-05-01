<?php

class PerfilC{

    public function InsertPerfilC(){
        
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
    }

    public function ConsultPerfilC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('idPerfil' => $_POST["id"], 'perfil' => $_POST["perfil"]);
            $tablaBD = "perfil";

            return $res = PerfilM::ConsultPerfilM($datosC,$tablaBD);

            if(!$res){
                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }
                        
    }

    public function DeletePerfilC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "perfil";

            if(PerfilM::ConsultInAccesoUsuario($datosC) == null){

                $res = PerfilM::DeletePerfilM($datosC,$tablaBD);
    
                if ($res) {
                    echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
                }else{
                    echo 'No se elimino el registro N.'.$datosC;
                }

            }else{

                echo 'No se pudo eliminar: Cod.'.$datosC.' se encuentra en uso en "Acceso Usuario".';

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

    public function MostrarPerfilesC(){
        return PerfilM::MostrarPerfilesM();
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