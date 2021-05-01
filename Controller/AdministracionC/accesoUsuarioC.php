<?php 

class AccesoUsuarioC{

    public function InsertAccesoUsuarioC(){

        if(isset($_POST["insert"])){

            $datosC = array('cedula' => $_POST["cedula"],'nombre' => $_POST["nombre"], 
                            'pass' => $_POST["pass"], 'perfil' => $_POST["perfil"]);
            $tablaBD = "accesousuario";

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

    }

    public function ConsultAccesoUsuarioC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('cedula' => $_POST["cedula"], 'nombre' => $_POST["nombre"]);
            $tablaBD = "accesoUsuario";

            return $res = AccesoUsuarioM::ConsultAccesoUsuarioM($datosC,$tablaBD);

            if(!$res){
                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }

    }

    public function SelectPerfilC(){

        return  $res2 = AccesoUsuarioM::SelectPerfilM(); 
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