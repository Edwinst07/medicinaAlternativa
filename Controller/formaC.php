<?php

class FormaC{

    public function InsertFormaC(){

        if(isset($_POST["insert"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]);
            $tablaBD = "forma_producto";

            if(FormaM::ConsultFormaM($datosC,$tablaBD)){

                echo 'C&oacute;digo o descripci&oacuten Ya esta en la BD!!';
            }else{

                $res = FormaM::InsertFormaM($datosC,$tablaBD);

                if($res){
    
                    echo "<script>alert('Se agrego forma_producto Correctamente')</script>";
                }else{
    
                    echo 'No se registro!!';
                }

            }

        }

    }

    public function ConsultFormaC(){

        if(isset($_POST["consult"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]);
            $tablaBD = "forma_producto";

            return $res = FormaM::ConsultFormaM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta No encontrada!!')</script>";
            }
        }
    }

    public function DeleteFormaC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "forma_producto";

            $res = FormaM::DeleteFormaM($datosC,$tablaBD);

            if($res){
    
                echo "<script>alert('Se elimino forma_producto N.".$datosC."')</script>";
            }else{

                echo 'No se Elimino!!';
            }

        }

    }

    public function UpdateFormaC(){
 
      if(isset($_POST["update"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]);
            $tablaBD = "forma_producto";

            $res = FormaM::UpdateFormaM($datosC,$tablaBD);

            if($res){

                echo "<script>alert('Se actualizó forma_producto N.".$datosC["id"]."')</script>";
            }else{

                echo 'No se actualiz&oacute;!!';
            }

      }

    }

    public function MostrarFormaC(){

        return FormaM::MostrarFromaM();
    }

}

?>