<?php

class InventarioC{

    public function InsertInventarioC(){ 

        if(isset($_POST["insert"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'costo'=>$_POST["costo"], 
                            'descrip'=>$_POST["descripcion"], 'medida'=>$_POST["medida"], 'cantMedida'=>$_POST["cantMedida"],
                            'cantidadProd'=>$_POST["cantidadProd"], 'porGanancia'=>$_POST["porGanancia"], 
                            'existe'=>$_POST["existe"], 'forma'=>$_POST["forma"]);

            $tablaBD = "inventario";

            $consult = InventarioM::ConsultInventarioM($datosC,$tablaBD);

            if($consult){

                echo 'El codigo o nombre ya esta en Base de datos!!';
            }else{

                $res = InventarioM::InsertInventarioC($datosC,$tablaBD);

                if($res){
    
                    echo "<script>alert('Se agrego producto Correctamente')</script>";
                }else{
    
                    echo 'No se agrego producto';
                }

            }

        }
        
    }

    public function ConsultInventarioC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"]);
            $tablaBD = "inventario";
    
            return $res = InventarioM::ConsultInventarioM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }                                      
                
    }

    public function DeleteInventarioC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["id"];
            $tablaBD = "inventario";
    
            $res = InventarioM::DeleteInventarioM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
    
            }else{
    
                echo 'No se elimino el registro N.'.$datosC;
    
            }

        }

    }

    public function UpdateInventarioC(){

        if(isset($_POST["update"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'costo'=>$_POST["costo"], 
                            'descrip'=>$_POST["descripcion"], 'medida'=>$_POST["medida"], 'cantMedida'=>$_POST["cantMedida"],
                            'cantidadProd'=>$_POST["cantidadProd"], 'porGanancia'=>$_POST["porGanancia"], 
                            'existe'=>$_POST["existe"], 'forma'=>$_POST["forma"]);

            $tablaBD = "inventario";

            $res = InventarioM::UpdateInventarioM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("Se actualizó correctamente el registro N.'.$datosC["id"].'")</script>';

            }else{

                echo 'No se actualiz&oacute; el registro!!!';

            }

        }

    }

    public function MedidaC(){

        return InventarioM::MedidaC();
    }

    public function FormaC(){

        return InventarioM::FormaM();

    }

}

?>