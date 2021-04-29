
				<h3>Compra producto</h3>
                <p style="color:tomato; margin-left:30px">Campos con (*) son obligatorios:</p>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $res = CompraProdC::ConsultCompraProdC();
                                        
                                        ?>

                                        <tr>
                                            <td ><label for="prod">Producto: *</label></td>
                                            <td >
                                                <select name="producto" id="select" class="form-select">
                                                    <option value="">
                                                    <?php
                                                    
                                                    if(isset($_POST["consult"])){

                                                        echo $res["nombre"];
                                                    }else{

                                                        echo 'Producto';
                                                    }

                                                    ?>
                                                    </option>
                                                    <?php
                                                    
                                                    $prod = CompraProdC::ProductoC();

                                                    foreach ($prod as $key => $value) {
                                                        echo '<option value="'.$value["idProducto"].'">'.$value["nombre"].'</option>';
                                                    }

                                                    ?>
                                                </select>
                                                <small class="form-text text-danger" id="msgselect"></small>
                                            </td>
                                            <td ><label for="categ">Categoria: *</label></td>
                                            <td >
                                                <select name="categoria" id="select" class="form-select">
                                                    <option value="">
                                                    <?php
                                                    
                                                    if(isset($_POST["consult"])){

                                                        echo $res["nombreCategoria"];
                                                    }else{

                                                        echo 'Categoria';
                                                    }

                                                    ?>
                                                    </option>

                                                    <?php
                                                    
                                                    $categ = CompraProdC::CategoriaC();

                                                    foreach ($categ as $key => $value) {
                                                        
                                                        echo '<option value="'.$value["idCategoria"].'">'.$value["nombreCategoria"].'</option>';
                                                    }
                                                    
                                                    ?>

                                                </select>
                                                <small class="form-text text-danger" id="msgselect"></small>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td><label for="desc">Fecha fabrica: *</label></td>
                                            <td>
                                                <input type="date" name="fecha_fab" id="date" value="<?php echo $res["fecha_fab"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                            <td><label for="forma">Fecha Vencimiento:*</label></td>
                                            <td>
                                                <input type="date" name="fecha_venc" id="date" 
                                                value="<?php echo $res["fecha_venc"]; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="lab">Nombre laboratorio:*</label></td>
                                            <td><input type="text" name="laboratorio" id="text" value="<?php echo $res["nombreLaboratorio"]; ?>" 
                                                title="Campo de texto."  class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="invima">Invima: *</label></td>
                                            <td>
                                                <select name="invima" id="select" class="form-select">
                                                    <option value="">
                                                    <?php
                                                    
                                                    if(isset($_POST["consult"])){

                                                        echo $res["invima"];
                                                    }else{

                                                        echo 'invima';
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
                                            <td><label for="direccion">Direcci&oacute;n:*</label></td>
                                            <td colspan="3">
                                                <input type="text" name="direccion" id="" 
                                                value="<?php echo $res["direccion"] ?>" class="form-control">
                                                <small class="form-text text-danger" id=""></small>
                                            </td>
                                        </tr>
                     
                                        <tr class="table">
                                            <td style="color:tomato;" colspan="3">
                                                <?php
                                                
                                                $crud = new CompraProdC();
                                                $crud -> InsertCompraProdC();
                                                $crud -> DeleteCompraProdC();
                                                $crud -> UpdateCompraProdC();
                                                
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <input type="reset" name="clear" class="btn btn-outline-primary btn-sm" value="Limpiar" >
                                                <input type="submit" name="insert" class="btn btn-outline-success btn-sm" value="Agregar" onclick="return validar('Agregar');">
                                                <input type="submit" name="consult" class="btn btn-outline-primary btn-sm" value="Consultar" onclick="return validar('Consultar');">
                                         
                                                <?php
                                                
                                                if(isset($_POST["consult"])){

                                                    echo ' <input type="submit" name="update" class="btn btn-outline-primary btn-sm" value="Actualizar" onclick="return validar("Actualizar");">';
                                                }
                                                
                                                ?>

                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div> 

                            </form>
                            <script type="text/javascript" src="Vista/js/validar.js"></script>
                        </div>
