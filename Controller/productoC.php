<?php

class ProductoC{

    public function InsertProductoC(){

        if(isset($_POST["insert"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'costo'=>$_POST["costo"], 
                            'descrip'=>$_POST["descripcion"], 'categoria'=>$_POST["categoria"], 'uniMedida'=>$_POST["uniMedida"], 
                            'existe'=>$_POST["existe"], 'fechaFabrica'=>$_POST["fechaFabrica"], 'fechaVenc'=>$_POST["fechaVenc"], 
                            'invima'=>$_POST["invima"], 'precioVenta'=>$_POST["precioVenta"]);

            $tablaBD = "productos";

            $consult = ProductoM::ConsultProductoM($datosC,$tablaBD);

            if($consult){

                echo 'El codigo o nombre ya esta en Base de datos!!';
            }else{

                $res = ProductoM::InsertProductoM($datosC,$tablaBD);

                if($res){
    
                    echo "<script>alert('Se agrego producto Correctamente')</script>";
                }else{
    
                    echo 'No se agrego producto';
                }

            }

        }
        
    }

    public function ConsultProductoC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]);
            $tablaBD = "productos";
    
            return $res = ProductoM::ConsultProductoM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }                                      
                
    }

    public function CategoriaProductoC(){

        return ProductoM::CategoriaProductoM();
    }

    public function DeleteProductoC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "productos";
    
            $res = ProductoM::DeleteProductoM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
    
            }else{
    
                echo 'No se elimino el registro N.'.$datosC;
    
            }

        }

    }

    public function UpdateProductoC(){

        if(isset($_POST["update"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'costo'=>$_POST["costo"], 
            'descrip'=>$_POST["descripcion"], 'categoria'=>$_POST["categoria"], 'uniMedida'=>$_POST["uniMedida"], 
            'existe'=>$_POST["existe"], 'fechaFabrica'=>$_POST["fechaFabrica"], 'fechaVenc'=>$_POST["fechaVenc"], 
            'invima'=>$_POST["invima"], 'precioVenta'=>$_POST["precioVenta"]);

            $tablaBD = "productos";

            $res = ProductoM::UpdateProductoM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["id"].'")</script>';

            }else{

                echo 'No se actualizo el registro!!!';

            }

        }

    }

}

?>