<?php

class RegistrarC{

    public function DepartamentoC(){

        if(RegistrarM::DepartamentoM()){

            return RegistrarM::DepartamentoM();
        }else{

            return 'No hay departamentos registrados';
        }

    }

    public function RegistrarClienteC(){

        if(isset($_POST["registrar"])){

            $datosC = array('cedula'=>$_POST["cedula"], 'nombre1'=>$_POST["nombre1"], 'nombre2'=>$_POST["nombre2"],
                            'apellido1'=>$_POST["apellido1"], 'apellido2'=>$_POST["apellido2"], 'direccion'=>$_POST["direccion"],
                            'telefono'=>$_POST["telefono"], 'celular'=>$_POST["celular"], 'municipio'=>$_POST["municipio"],
                            'correo'=>$_POST["correo"]);

            $tablaBD = "cliente";

            $res = RegistrarM::RegistrarClienteM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se registro correctamente!!!... puede ingresar al login.")</script>';
            }else{

                echo '<script>alert("No se registro!!!... Ingrese nuevamente sus datos.")</script>';
            }

        }

    }

    public function AccesoUsuarioC(){

        if(isset($_POST["registrar"])){

            $datosC = array('cedula'=>$_POST["cedula"], 'nombre'=>$_POST["nombre1"]." ".$_POST["apellido1"], 'pass'=>$_POST["pass"]);
            $tablaBD ="accesousuario";
    
            $res = RegistrarM::AccesoUsuarioM($datosC,$tablaBD);
    
            // if($res){
    
            //     echo '<script>alert("usuario: '.$datosC["cedula"].' \n contraseña: '.$datosC["pass"].'")</script>';
            // }else{
    
            //     echo 'No tiene acceso';
            // }
        }

    }

}

?>