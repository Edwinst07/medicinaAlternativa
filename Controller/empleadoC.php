<?php

class EmpleadoC{

    public function InsertEmpleadoC(){

        if(isset($_POST["insert"])){

            $datosC = array('cedula'=>$_POST["cedula"], 'nombre1'=>$_POST["nombre1"], 'nombre2'=>$_POST["nombre2"],
                            'apellido1'=>$_POST["apellido1"], 'apellido2'=>$_POST["apellido2"], 
                            'genero'=>$_POST["genero"], 'direccion'=>$_POST["direccion"], 'tel'=>$_POST["tel"],
                            'movil'=>$_POST["movil"], 'correo'=>$_POST["correo"], 'fechaNacimiento'=>$_POST["fechaNacimiento"],
                        'sucursal'=>$_POST["sucursal"], 'cargoLaboral'=>$_POST["cargoLaboral"]);
            
            $tablaBD = "empleado";

            if(EmpleadoM::ConsultEmpleadoM($datosC["cedula"],$tablaBD)){

                echo 'Cedula ya registrada!!';
            }else{

                $res = EmpleadoM::InsertEmpleadoM($datosC,$tablaBD);

                if($res){
    
                    echo '<script>alert("El empleado se agrego correctamente!!")</script>';
                }else{
    
                    echo 'No se agrego el empleado!!';
                }

            }
    
        }

    }

    public function SucursalC(){

        return EmpleadoM::SucursalM();
    }

    public function CargoLaboralC(){

        return EmpleadoM::CargoLaboralM();
    }

    public function ConsultEmpleadoC(){

        if(isset($_POST["consult"])){

            $datosC = $_POST["cedula"];
            $tablaBD = "empleado";

            return $res = EmpleadoM::ConsultEmpleadoM($datosC,$tablaBD);

            if(!$res){

                echo 'No hay registro!!';
            }
        }
    }

    public function DeleteEmpleadoC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["cedula"];
            $tablaBD = "empleado";

            $res = EmpleadoM::DeleteEmpleadoM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se elimino registro N.'.$datosC.' correctamente!!")</script>';
            }else{

                echo 'No se elimino registro!!';
            }

        }
    }

    public function UpdateEmpleadoC(){

        if(isset($_POST["update"])){

            $datosC = array('cedula'=>$_POST["cedula"], 'nombre1'=>$_POST["nombre1"], 'nombre2'=>$_POST["nombre2"],
                            'apellido1'=>$_POST["apellido1"], 'apellido2'=>$_POST["apellido2"], 
                            'genero'=>$_POST["genero"], 'direccion'=>$_POST["direccion"], 'tel'=>$_POST["tel"],
                            'movil'=>$_POST["movil"], 'correo'=>$_POST["correo"], 'fechaNacimiento'=>$_POST["fechaNacimiento"],
                        'sucursal'=>$_POST["sucursal"], 'cargoLaboral'=>$_POST["cargoLaboral"]);
            
            $tablaBD = "empleado";

            $res = EmpleadoM::UpdateEmpleadoM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizó registro N.'.$datosC["cedula"].' correctamente!!")</script>';
            }else{

                echo 'No se actualiz&oacute; registro!!';
        }
        }

    }

}

?>