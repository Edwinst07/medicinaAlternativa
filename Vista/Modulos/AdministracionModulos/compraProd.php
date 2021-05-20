
				
                <h3>Compra producto</h3>
                <p>Campos con (*) son obligatorios:</p>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $res = CompraProdC::ConsultCompraProdC();
                                        
                                        ?>
                                        <tr>
                                            <td><label for="codigo">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" id="number" name="codigo" value="<?php echo $res["id"]; ?>"
                                                    pattern="(^(?:\+|-)?\d+$)" title="Campo numerico" class="form-control">
                                                    <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label for="prod">Producto: *</label></td>
                                            <td >
                                                <select name="producto" id="select" class="form-select">
                                                    <option value="">
                                                    <?php
                                                    
                                                    if(isset($_POST['consult'])){

                                                        echo $res['nombre'];
                                                    }else{

                                                        echo 'Producto';
                                                    }

                                                    ?>
                                                    </option>
                                                    <?php
                                                    
                                                    $prod = CompraProdC::ProductoC();

                                                    foreach ($prod as $key => $value) {
                                                        echo '<option value="'.$value['idProducto'].'">'.$value['nombre'].'</option>';
                                                    }

                                                    ?>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                            <td ><label for="categ">Categoria: *</label></td>
                                            <td >
                                                <select name="categoria" id="select" class="form-select">
                                                    <option value="">
                                                    <?php
                                                    
                                                    if(isset($_POST['consult'])){

                                                        echo $res['nombreCategoria'];
                                                    }else{

                                                        echo 'Categoria';
                                                    }

                                                    ?>
                                                    </option>

                                                    <?php
                                                    
                                                    $categ = CompraProdC::CategoriaC();

                                                    foreach ($categ as $key => $value) {
                                                        
                                                        echo '<option value="'.$value['idCategoria'].'">'.$value['nombreCategoria'].'</option>';
                                                    }
                                                    
                                                    ?>

                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td><label for="desc">Fecha fabrica: *</label></td>
                                            <td>
                                                <input type="date" id="date" name="fecha_fab" value="<?php echo $res['fecha_fab']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                            <td><label for="forma">Fecha Vencimiento:*</label></td>
                                            <td>
                                                <input type="date" name="fecha_venc" id="date" 
                                                value="<?php echo $res['fecha_venc']; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="lab">Laboratorio:*</label></td>
                                            <td>
                                                <select name="laboratorio" id="select" class="form-select">
                                                    <option value="">
                                                    
                                                    <?php
                                                    
                                                        if(isset($_POST["consult"])){

                                                            echo $res['nombreLaboratorio'];
                                                        }else{
                                                            echo 'Seleccionar...';
                                                        }

                                                    ?>
                                                    
                                                    </option>

                                                    <?php
                                                    
                                                        $laboratorio = CompraProdC::LaboratorioC();

                                                        foreach ($laboratorio as $key => $value) {
                                                            echo '<option value="'.$value["idLaboratorio"].'">'.$value["nombreLaboratorio"].'</option>';
                                                        }
                                                    
                                                    ?>

                                                </select>
                                            
                                                <small class="form-text text-danger" id="msgSelect"></small>
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
                                               
                                                <?php
                                                
                                                

                                                    include "botones.php";

                                                
                                                
                                                ?>

                                            </td>
                                        </tr>
                                    </table>
                                    <br><br><br>

                                    <table class="table table-hover">

                                    <tr>
                                    
                                        <td><label for="desc">Agregados: </label></td>
                                        <td>
                                        
                                            <select name="" id="" class="form-select">
                                                <option value="">Listado...</option>

                                                <?php
                                                
                                                    $listado = CompraProdC::listadoC();

                                                    foreach ($listado as $key => $value) {
                                                        echo '<option value="">Código: '
                                                            .$value["id"].'- Producto: '.$value["nombre"].'- Laboratorio: '.$value["nombreLaboratorio"]
                                                            .'</option>';
                                                    }
                                                
                                                ?>

                                            </select>
                                        
                                        </td>
                                    
                                    </tr>

                                    </table>
                                    
                                </div> 

                            </form>
                            
                        </div>
