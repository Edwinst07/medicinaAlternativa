<script type="text/javascript" src="Vista/js/validar.js"></script>
				<h3>Producto</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $res = ProductoC::ConsultProductoC();
                                        
                                        ?>

                                        <tr>
                                            <td ><label for="id">C&oacute;digo:</label></td>
                                            <td ><input type="text" name="id" id="number" value="<?php echo $res["idProducto"]; ?>" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td ><label for="name">Nombre:</label></td>
                                            <td ><input type="text" name="nombre" id="text" value="<?php echo $res["nombre"]; ?>" 
                                                title="solo se permite texto. Ejemplo: Moringa, Ruda, Romero, etc." class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td colspan="1"><label for="desc">Descripci&oacute;n:</label></td>
                                            <td colspan="3">
                                                <input type="text" name="descripcion" id="text" value="<?php echo $res["descripcion"]; ?>" 
                                                title="Campo de texto." class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="Categoria">Categoria:</label></td>
                                            <td><select name="categoria" class="form-select">
                                                    <option value="">
                                                        <?php 
                                                        
                                                        if(isset($_POST["consult"])){
                                                            echo $res["nombreCategoria"];
                                                        }else{
                                                            echo 'Categoria';
                                                        }

                                                        ?>
                                                    </option>';
                                                
                                                    <?php

                                                    $categoria = ProductoC::CategoriaProductoC();
                                                    
                                                    foreach ($categoria as $key => $value) {
                                                        
                                                        echo '<option value="'.$value["idCategoria"].'">'.$value["nombreCategoria"].'</option>';
                                
                                                    }
                                                    
                                                    ?>

                                                </select>
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="name">Costo:</label></td>
                                            <td><input type="text" name="costo" id="text" value="<?php echo $res["costo"]; ?>" 
                                                title="Campo numerico, No se permite texto."  class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="uniMedida">Unidad medida (Kg):</label></td>
                                            <td>
                                                <input type="text" name="uniMedida" id="text" value="<?php echo $res["uni_medida"]; ?>" title="" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="existe">Existe:</label></td>
                                            <td>
                                                <select name="existe" id="select" class="form-select">
                                                    <option value="">
                                                        <?php 
                                                        if(isset($_POST["consult"])){
                                                            echo $res["existe"];
                                                        }else{
                                                            echo 'Si/No';
                                                        }  
                                                        ?>
                                                    </option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label for="fechaFabrica">Fecha de f&aacute;brica:</label></td>
                                            <td>
                                                <input type="date" name="fechaFabrica" id="date" value="<?php echo $res["fecha_fab"]; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                            <td><label for="fechaVencimiento">Fecha de vencimiento:</label></td>
                                            <td>
                                                <input type="date" name="fechaVenc" id="date" value="<?php echo $res["fecha_venc"]; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="invima">Aprovado por Invima:</label></td>
                                            <td>
                                                <select name="invima" id="select" class="form-select">
                                                    <option value="">
                                                        <?php 
                                                        if(isset($_POST["consult"])){
                                                            echo $res["invima"];
                                                        }else{
                                                            echo 'Si/No';
                                                        } 
                                                        ?>
                                                        </option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                            <td><label for="precioVenta">Precio de Venta:</label></td>
                                            <td>
                                                <input type="text" name="precioVenta" id="number" value="<?php echo $res["precio_venta"]; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>

                                        <tr class="table">
                                            <td style="color:tomato;" colspan="3">
                                                <?php
                                                
                                                $crud = new ProductoC();
                                                $crud -> InsertProductoC();
                                                $crud -> DeleteProductoC();
                                                $crud -> UpdateProductoC();
                                                
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <?php

                                        include "botones.php";

                                        ?>
                                    </table>
                                    
                                </div> 

                            </form>
                            <script type="text/javascript" src="Vista/js/validar.js"></script>
                        </div>
