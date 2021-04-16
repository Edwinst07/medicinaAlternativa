<?php

class CategoriaProductoC{

    public function InsertCategoriaProductoC(){

        if(!empty($_POST["codigo"]) && !empty($_POST["catProd"])){

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

        }else{

            echo 'Llene los campos vacios!!';
        }

    }

    public function ConsultCategoriaProductoC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'catProd'=>$_POST["catProd"]);
            $tablaBD ="categoriaProd";

            $res = CategoriaProductoM::ConsultCategoriaProductoM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta no encontrada')</script>";
            }

        }

        echo '<tr>
                <td><label for="id">C&oacute;digo:</label></td>
                <td>
                    <input type="text" id="number" name="codigo" class="form-control" value="'.$res["idCategoria"].'"
                    title="Ingresar tipo numerico. Ejemplo: 1,2,3...">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
                
            </tr>
            <tr>
                <td><label for="catProd">Descripci&oacute;n:</label></td>
                <td>
                    <input type="text" id="text" name="catProd" class="form-control" value="'.$res["nombreCategoria"].'"
                    title="Ingresar tipo Texto. Ejemplo: Sedantes, Diur&eacute;tico, ...">
                    <small class="form-text text-danger" id="msgText"></small>
                </td>
                
            </tr>';

    }

    public function DeleteCategoriaProductoC(){

        if(isset($_POST["delete"])){

            $datosC = $_POST["codigo"];
            $tablaBD = "categoriaProd";
    
            $res = CategoriaProductoM::DeleteCategoriaProductoM($datosC,$tablaBD);
    
            if($res){
    
                echo '<script>alert("Se elimino correctamente  el registro N.'.$datosC.'")</script>';
            }else{
    
                echo 'No se elimino el registro Cod.'.$datosC;
    
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