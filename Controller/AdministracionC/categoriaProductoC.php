<?php

class CategoriaProductoC{

    public function InsertCategoriaProductoC(){

        if(isset($_POST["insert"])){


            $datosC = array('codigo'=>$_POST["codigo"], 'catProd'=>$_POST["catProd"]);
            $tablaBD = "categoriaprod";

            $res = CategoriaProductoM::InsertCategoriaProductoM($datosC,$tablaBD);

            if($res){

                echo "<script>alert('Se registro correctamente!!')</script>";
            }else{

                echo 'No se registro!!';
            }

        }

    }

    public function ConsultCategoriaProductoC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'catProd'=>$_POST["catProd"]);
            $tablaBD ="categoriaProd";

            return $res = CategoriaProductoM::ConsultCategoriaProductoM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta no encontrada')</script>";
            }

        }

    }

    public function DeleteCategoriaProductoC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "categoriaProd";

            if(CategoriaProductoM::ConsultInCompraProd($datosC)){

                echo 'No se pudo eliminar: Cod.'.$datosC.' se encuentra en uso en "Compra Producto".';
            }else{

                $res = CategoriaProductoM::DeleteCategoriaProductoM($datosC,$tablaBD);
    
                if($res){
        
                    echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
                }else{
        
                    echo 'No se elimino el registro Cod.'.$datosC;
        
                }

            }

        }

    }

    public function UpdateCategoriaProductoC(){

        if(isset($_POST["update"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'catProd'=>$_POST["catProd"]);
            $tablaBD ="categoriaProd";
    
            $res = CategoriaProductoM::UpdateCategoriaProductoM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["codigo"].'")</script>';
            }else{
    
                echo 'No se actualizo';
            }

        }

    }

}

?>