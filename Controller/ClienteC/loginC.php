<?php

    class LoginC{
        

        public function IngresoC(){

            if(isset($_POST["usuario"])){

                $datosC = array('user'=>$_POST["usuario"], 'password'=>$_POST["password"]);
                $tablaBD = "accesousuario";

                $res = LoginM::IngresoM($datosC, $tablaBD);

                if($res["cedula"] == $datosC["user"] && $res["password"] == $datosC["password"]){

                    if($res["idPerfil"] == 4){

                        session_start();

                        $_SESSION["ingreso"] = $res["cedula"];
                        header("location:medicinaAlternativa.php?dir=VentaProducto");

                    }else if($res["idPerfil"] == 3){

                        session_start();

                        $_SESSION["admin"] = $res["cedula"];
                        header("location:index.php?ruta=index");
                    }

                }else{

                    echo "<script>alert('No se encuentra registrado');</script>";
                }

            }

        }

    }

?>