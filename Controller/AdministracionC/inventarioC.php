<?php

class InventarioC{
 
    public function InsertInventarioC(){ 

        if(isset($_POST["insert"])){

            if(isset($_POST["descripcion"]) && isset($_POST["costo"]) && isset($_POST["medida"]) && 
               isset($_POST["cantMedida"]) && isset($_POST["cantidadProd"]) && isset($_POST["porGanancia"]) && isset($_POST["existe"])){

                $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'costo'=>$_POST["costo"], 
                                'descrip'=>$_POST["descripcion"], 'medida'=>$_POST["medida"], 'cantMedida'=>$_POST["cantMedida"],
                                'cantidadProd'=>$_POST["cantidadProd"], 'porGanancia'=>$_POST["porGanancia"], 
                                'existe'=>$_POST["existe"], 'forma'=>$_POST["forma"], 'image'=>$_POST["image"]);

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
            }else{
                echo 'No se agrego: Llenar todos los campos!!';
            }

        }
        
    }

    public function ConsultInventarioC(){

        if(isset($_POST["consult"])){

            $datosC = $_POST["id"];
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
            
            $tablaBD2 = "compra_prod";
    
            $res2 = InventarioM::DeleteCompraProdM($datosC,$tablaBD2);
    
            if($res && $res2){
    
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.' de inventario y compraProd")</script>';
    
            }else{
    
                echo 'No se elimino el registro N.'. $datosC .' de inventario y compraProd' ;
    
            }

        }

    }

    public function UpdateInventarioC(){

        if(isset($_POST["update"])){

            $datosC = array('id'=>$_POST["id"], 'nombre'=>$_POST["nombre"], 'costo'=>$_POST["costo"], 
                            'descrip'=>$_POST["descripcion"], 'medida'=>$_POST["medida"], 'cantMedida'=>$_POST["cantMedida"],
                            'cantidadProd'=>$_POST["cantidadProd"], 'porGanancia'=>$_POST["porGanancia"], 
                            'existe'=>$_POST["existe"], 'forma'=>$_POST["forma"], 'image'=>$_POST["image"]);

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





    public function CategoriaC(){ 

        return InventarioM::CategoriaM();
    }

    public function LaboratorioC(){

        return InventarioM::LaboratorioM();
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

                $datosC = array('producto'=>$_POST["id"], 'categoria'=>$_POST["categoria"], 
                'fecha_fab'=>$_POST["fecha_fab"], 'fecha_venc'=>$_POST["fecha_venc"],
                'laboratorio'=>$_POST["laboratorio"]);

                $tablaBD = "compra_prod";

                $res = InventarioM::InsertCompraProdM($datosC,$tablaBD);

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

            $tablaBD = "compra_prod";

            $datosC = $_POST["id"];
            return $res = InventarioM::ConsultCompraProdM($datosC,$tablaBD);

            if(!$res){

                echo 'No hay registro!!';

            }
        }

    }
    // se reutilizó la función de DeleteInventarioC() para eliminar un compraProd, 
    // ya que solo se requiere el id
    // public function DeleteCompraProdC(){

    //     if(isset($_POST["delete"])){

    //         $datosC = $_POST["id"];
    //         $tablaBD = "compra_prod";

    
    //         $res = InventarioM::DeleteCompraProdM($datosC,$tablaBD);

    //     }

    // }

    public function UpdateCompraProdC(){

        if(isset($_POST["update"])){

       
            $datosC = array('producto'=>$_POST["id"], 'categoria'=>$_POST["categoria"], 
            'fecha_fab'=>$_POST["fecha_fab"], 'fecha_venc'=>$_POST["fecha_venc"],
            'laboratorio'=>$_POST["laboratorio"]);

            $tablaBD = "compra_prod";  
            
            $res = InventarioM::UpdateCompraProdM($datosC,$tablaBD);

            if($res){

                echo '<script>alert("id: '.$_POST["id"].' cat: '.$_POST["categoria"]
                    .'fecha_fab: '.$_POST["fecha_fab"].'fecha_venc: '.$_POST["fecha_venc"]
                    .'laboratorio: '.$_POST["laboratorio"].'")</script>';
            }else{

                echo 'No se actualiz&oacute;';
            }

        }

    }

}

?>