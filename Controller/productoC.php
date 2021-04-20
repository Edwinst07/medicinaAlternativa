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
    
            $res = ProductoM::ConsultProductoM($datosC,$tablaBD);

            if(!$res){

                echo "<script>alert('Consulta No encontrada!!')</script>";
            }

        }

        echo '<tr>
                    <td ><label for="id">C&oacute;digo:</label></td>
                    <td ><input type="text" name="id" id="number" value="'.$res["idProducto"].'" 
                        title="Campo numerico, No se permite texto" class="form-control">
                        <small class="form-text text-danger" id="msgNumber"></small>
                    </td>
                    <td ><label for="name">Nombre:</label></td>
                    <td ><input type="text" name="nombre" id="text" value="'.$res["nombre"].'" 
                        title="solo se permite texto. Ejemplo: Moringa, Ruda, Romero, etc." class="form-control">
                        <small class="form-text text-danger" id="msgText"></small>
                    </td>
                </tr>
            
                <tr>
                    <td colspan="1"><label for="desc">Descripci&oacute;n:</label></td>
                    <td colspan="3">
                        <input type="text" name="descripcion" id="text" value="'.$res["descripcion"].'" 
                        title="Campo de texto." class="form-control">
                        <small class="form-text text-danger" id="msgText"></small>
                    </td>
                </tr>';

                $categoria = ProductoM::CategoriaProductoM();

                echo '<tr>
                        <td><label for="Categoria">Categoria:</label></td>
                        <td><select name="categoria" class="form-select">
                                <option value="">'.((isset($_POST["consult"]))?$res["nombreCategoria"] : 'Categoria').'</option>';
                            foreach ($categoria as $key => $value) {
                                    
                                echo '<option value="'.$value["idCategoria"].'">'.$value["nombreCategoria"].'</option>';
        
                            }
                        echo '</select>
                            <small class="form-text text-danger" id="msgText"></small>
                        </td>
                        <td><label for="name">Costo:</label></td>
                        <td><input type="text" name="costo" id="text" value="'.$res["costo"].'" 
                            title="Campo numerico, No se permite texto."  class="form-control">
                            <small class="form-text text-danger" id="msgText"></small>
                        </td>
                    </tr>
                    <tr>
                    <td><label for="uniMedida">Unidad medida:</label></td>
                    <td>
                        <input type="text" name="uniMedida" id="text" value="'.$res["uni_medida"].'" title="" 
                        class="form-control">
                        <small class="form-text text-danger" id="msgText"></small>
                    </td>
                    <td><label for="existe">Existe:</label></td>
                    <td>
                        <select name="existe" id="select" class="form-select">
                            <option value="">'.((isset($_POST["consult"]))?$res["existe"] : 'Si/No').'</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <small class="form-text text-danger" id="msgSelect"></small>
                    </td>
                </tr>
                
                <tr>
                    <td><label for="fechaFabrica">Fecha de f&aacute;brica:</label></td>
                    <td>
                        <input type="date" name="fechaFabrica" id="date" value="'.$res["fecha_fab"].'" class="form-control">
                        <small class="form-text text-danger" id="msgDate"></small>
                    </td>
                    <td><label for="fechaVencimiento">Fecha de vencimiento:</label></td>
                    <td>
                        <input type="date" name="fechaVenc" id="date" value="'.$res["fecha_venc"].'" class="form-control">
                        <small class="form-text text-danger" id="msgDate"></small>
                    </td>
                </tr>
                <tr>
                     <td><label for="invima">Aprovado por Invima:</label></td>
                    <td>
                        <select name="invima" id="select" class="form-select">
                            <option value="">'.((isset($_POST["consult"]))?$res["invima"] : 'Si/No').'</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <small class="form-text text-danger" id="msgSelect"></small>
                    </td>
                    <td><label for="precioVenta">Precio de Venta:</label></td>
                    <td>
                        <input type="text" name="precioVenta" id="number" value="'.$res["precio_venta"].'" class="form-control">
                        <small class="form-text text-danger" id="msgNumber"></small>
                    </td>
                </tr>';                                        
                
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