<?php

class CompraProdC{

    public function ProductoC(){

        return CompraProdM::ProductoM();
    }

    public function CategoriaC(){

        return CompraProdM::CategoriaM();
    }

    public function InsertCompraProdC(){

        if(isset($_POST["insert"])){

            date_default_timezone_set("America/Mexico_City");
        
            $fecha_actual = strtotime(date("Y-m-d H:i:s"));
            $fechaMenorActual = strtotime($_POST["fecha_fab"]);
            $fechaMayorActual = strtotime($_POST["fecha_venc"]);

            if($fecha_actual < $fechaMenorActual || $fecha_actual > $fechaMayorActual){

                echo 'Verificar Fechas!!';
            }else{

                $datosC = array('producto'=>$_POST["producto"], 'categoria'=>$_POST["categoria"], 
                'fecha_fab'=>$_POST["fecha_fab"], 'fecha_venc'=>$_POST["fecha_venc"],
                'laboratorio'=>$_POST["laboratorio"], 'invima'=>$_POST["invima"],
                'direccion'=>$_POST["direccion"]);

                $tablaBD = "compra_prod";

                $res = CompraProdM::InsertCompraProdM($datosC,$tablaBD);

                if($res){

                    echo '<script>alert("Se agrego correctamente!!!")</script>';
                }else{

                    echo 'No se agrego compra!!';
                }

            }

        }

    }

    public function ConsultCompraProdC(){

        if(isset($_POST["consult"])){

            $datosC = $_POST["producto"];
            $tablaBD = "compra_prod";

            return $res = CompraProdM::ConsultCompraProdM($datosC,$tablaBD);

            if(!$res){

                echo 'No hay registro!!';

            }
        }

    }

    public function DeleteCompraProdC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["producto"];
            $tablaBD = "compra_prod";
    
            $res = CompraProdM::DeleteCompraProdM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se elimino Correctamente")</script>';
            }else{
    
                echo 'No se elimino!!';
            }

        }

    }

    public function UpdateCompraProdC(){

        if(isset($_POST["update"])){

            $datosC = array('producto'=>$_POST["producto"], 'categoria'=>$_POST["categoria"], 
            'fecha_fab'=>$_POST["fecha_fab"], 'fecha_venc'=>$_POST["fecha_venc"],
            'laboratorio'=>$_POST["laboratorio"], 'invima'=>$_POST["invima"],
            'direccion'=>$_POST["direccion"]);

            $tablaBD = "compra_prod";  
            
            $res = CompraProdM::UpdateCompraProdM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizó correctamente")</script>';
            }else{

                echo 'No se actualiz&oacute;';
            }

        }

    }

}

?>