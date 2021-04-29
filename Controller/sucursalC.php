<?php

class SucursalC{

    public function InsertSucursalC(){ 

        if(isset($_POST["insert"])){ 

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'direccion'=>$_POST["direccion"], 
            'tel'=>$_POST["telefono"], 'correo'=>$_POST["correo"], 'nit'=>$_POST["nit"],
            'municipio'=>$_POST["municipio"]);

            $tablaBD = "sucursal";

            if(SucursalM::ConsultSucursalM($datosC,$tablaBD)){

                echo '<script>alert("Cod.'.$datosC["id"].' o descripci&oacute;n ya esta registrado!!")</script>';
            }else{

            $res = SucursalM::InsertSucursalM($datosC, $tablaBD);

            if($res){

                echo '<script>alert("Se agrego correctamente sucursal")</script>';
                
            }else{
                echo 'No se agrego Sucursal';
            }

            }


        }
    }

    public function ConsultSucursalC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]); 

            $tablaBD = "sucursal";
    
            return $res = SucursalM::ConsultSucursalM($datosC,$tablaBD);
    
            if(!$res){
    
                echo 'No se consulto!!';
            }

        }

    }

    public function DepartamentoC(){

        return  $dep = SucursalM::DepartamentoM();

    }

    public function DelectSucursalC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "sucursal";

            if(SucursalM::ConsultInEmpleado($datosC)){

                echo 'No se pudo eliminar: Cod.'.$datosC.' se encuentra en uso en "Empleado".';

            }else{

                $res = SucursalM::DelectSucursalM($datosC,$tablaBD);

                if($res){
    
                    echo '<script>alert("Se elimino correctamente el registro N.'. $datosC.'")</script>';
                }else{
    
                    echo 'No se elimino registro N.'.$datosC;
                }

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