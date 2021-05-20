<?php

class ClienteC{

    public function InsertClienteC(){

        if(isset($_POST["insert"])){

            $datosC = array('cedula'=>$_POST["cedula"], 'nombre1'=>$_POST["nombre1"], 'nombre2'=>$_POST["nombre2"],
                    'apellido1'=>$_POST["apellido1"], 'apellido2'=>$_POST["apellido2"], 'direccion'=>$_POST["direccion"],
                    'tel'=>$_POST["tel"], 'movil'=>$_POST["movil"], 'correo'=>$_POST["correo"], 'municipio'=>$_POST["municipio"]);
        
            $tablaBD = "cliente";

            if(ClienteM::ConsultClienteM($datosC["cedula"], $tablaBD)){

                echo 'Cedula ya se encuentra registrada!!';
            }else{

                $res = ClienteM::InsertClienteM($datosC,$tablaBD);

                if($res){

                    echo '<script>alert("Se agrego cliente correctamente!!")</script>';
                }else{

                    echo 'No se agrego cliente!!';
                }

            }

        }

    }

    public function ConsultClienteC(){

        if(isset($_POST["consult"])){

            $datosC = $_POST["cedula"];

            $tablaBD = "cliente";

            return $res = ClienteM::ConsultClienteM($datosC, $tablaBD);

            if(!$res){

                echo 'No hay registro!!';
            }
        }

    }

    public function DeleteClienteC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["cedula"];
            $tablaBD = "cliente";

            $res = ClienteM::DeleteClienteM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Registro cedula N.'.$datosC.' se elimino correctamente!!!")</script>';
            }else{

                echo 'No se elimino registro!!';
            }
        }

    }

    public function UpdateClienteC(){

        if(isset($_POST["update"])){

            $datosC = array('cedula'=>$_POST["cedula"], 'nombre1'=>$_POST["nombre1"], 'nombre2'=>$_POST["nombre2"],
            'apellido1'=>$_POST["apellido1"], 'apellido2'=>$_POST["apellido2"], 'direccion'=>$_POST["direccion"],
            'tel'=>$_POST["tel"], 'movil'=>$_POST["movil"], 'correo'=>$_POST["correo"], 'municipio'=>$_POST["municipio"]);

            $tablaBD = "cliente";

            $res = ClienteM::UpdateClienteM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Registro cedula N.'.$datosC["cedula"].' se actualizó correctamente!!!")</script>';
            }else{

                echo 'No se actualizó registro!!';
            }

        }

    }

}

?>