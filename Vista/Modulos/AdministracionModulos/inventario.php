<h3>Inventario</h3>
<p>Campos con (*) son obligatorios:</p>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 70%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $res = InventarioC::ConsultInventarioC();
                                        
                                        ?>

                                        <tr>
                                            <td ><label for="id">C&oacute;digo: *</label></td>
                                            <td ><input type="text" name="id" id="number" value="<?php echo $res["idProducto"]; ?>" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td ><label for="name">Nombre: *</label></td>
                                            <td ><input type="text" name="nombre" id="text" value="<?php echo $res["nombre"]; ?>" 
                                                title="solo se permite texto. Ejemplo: Moringa, Ruda, Romero, etc." class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td colspan="1"><label for="desc">Descripci&oacute;n: *</label></td>
                                            <td colspan="3">
                                            <input type="twxt" name="descripcion" id="text" value="<?php echo $res["descripcion"]; ?>"
                                            class="form-control" title="Campo de texto.">
                                            
                                                
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="forma">Forma: *</label></td>
                                            <td>
                                                <select name="forma" id="select" class="form-select">
                                                    <option value="
                                                    
                                                    <?php
                                                    
                                                    if(isset($_POST["consult"])){

                                                        echo $res["formaProducto"];
                                                    }else{

                                                        echo '';
                                                    }
                                                    
                                                    ?>
                                                    
                                                    ">
                                                    <?php
                                                    
                                                    if(isset($_POST["consult"])){

                                                        echo $res["forma"];
                                                    }else{

                                                        echo 'Seleccione...';
                                                    }
                                                    
                                                    ?>
                                                    </option>

                                                    <?php
                                                    
                                                    $forma = InventarioC::FormaC();

                                                    foreach ($forma as $key => $value) {
                                                        echo '<option value="'.$value["idForma"].'">'.$value["forma"].'</option>';
                                                    }
                                                    
                                                    ?>

                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                            <td><label for="costo">Costo: *</label></td>
                                            <td><input type="text" name="costo" id="number" value="<?php echo $res["costo"]; ?>" 
                                                title="Campo numerico, No se permite texto."  class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="medida">Medida: *</label></td>
                                            <td>
                                                <select name="medida" id="select" class="form-select">
                                                    <option value="
                                                    
                                                    <?php 
                                                            if(isset($_POST["consult"])){
                                                                echo $res["medida"];
                                                            }else{
                                                                echo '';
                                                            }
                                                        ?>
                                                    
                                                    ">
                                                        <?php 
                                                            if(isset($_POST["consult"])){
                                                                echo $res["nombreMedida"];
                                                            }else{
                                                                echo 'Seleccione...';
                                                            }
                                                        ?>
                                                    </option> 
                                                    <?php
                                                        $medida = InventarioC::MedidaC();

                                                        foreach ($medida as $key => $value) {
                                                            echo '<option value="'.$value["codigo"].'">'.$value["medida"].'</option>';
                                                        }
                                                    
                                                    ?>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                            <td><label for="cantMedida">Cantidad medida: *</label></td>
                                            <td>
                                                <input type="text" name="cantMedida" id="number" 
                                                value="<?php echo $res["cantidad_medida"]; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="cantidadProd">Cantidad producto: *</label></td>
                                            <td>
                                                <input type="text" name="cantidadProd" id="number" 
                                                    value="<?php echo $res["cantidad_prod"]; ?>"  class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td><label for="porcGanancia">Porcentaje ganacia: *</label></td>
                                            <td>
                                                <input type="text" name="porGanancia" id="number" 
                                                    value="<?php echo $res["porc_ganancia"]; ?>" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="existe">Existe: *</label></td>
                                            <td colspan="2">
                                                <select name="existe" id="select" class="form-select">
                                                    <option value="
                                                    
                                                    <?php
                                                            if(isset($_POST["consult"])){
                                                                echo $res["existe"];
                                                            }else{
                                                                echo '';
                                                            }
                                                        ?>
                                                    
                                                    ">
                                                        <?php
                                                            if(isset($_POST["consult"])){
                                                                echo $res["existe"];
                                                            }else{ 
                                                                echo 'Seleccione...';
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
                                            <td><label for="existe">Imagen: *</label></td>
                                            <td colspan="2">
                                                <input type="file" name="image" value="<?php echo $res["image"]; ?>" require>
                                            </td>
                                        </tr>
                                        <?php  $res = InventarioC::ConsultCompraProdC();  ?>
                                        <tr>
                     
                                            <td ><label for="categ">Categoria: *</label></td>
                                            <td colspan="2">
                                                <select name="categoria" id="select" class="form-select">
                                                    <option value="
                                                    
                                                    <?php
                                                    
                                                    if(isset($_POST['consult'])){

                                                        echo $res['categoriaProd'];
                                                    }else{

                                                        echo '';
                                                    }

                                                    ?>
                                                    
                                                    "> 
                                                    <?php
                                                    
                                                    if(isset($_POST['consult'])){

                                                        echo $res['nombreCategoria'];
                                                    }else{

                                                        echo 'Seleccione...';
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
                                            <td><label for="desc">Fecha f&aacute;brica: *</label></td>
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
                                                    <option value="
                                                    
                                                    <?php
                                                    
                                                    if(isset($_POST["consult"])){

                                                        echo $res['laboratorio'];
                                                    }else{
                                                        echo '';
                                                    }

                                                    ?>
                                                    
                                                    ">
                                                    
                                                    <?php
                                                    
                                                        if(isset($_POST["consult"])){

                                                            echo $res['nombreLaboratorio'];
                                                        }else{
                                                            echo 'Seleccionar...';
                                                        }

                                                    ?>
                                                    
                                                    </option>

                                                    <?php
                                                    
                                                        $laboratorio = InventarioC::LaboratorioC();

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
                                                
                                                $crud = new InventarioC();
                                                $crud -> InsertInventarioC();
                                                $crud -> DeleteInventarioC();
                                                $crud -> UpdateInventarioC();
                                                $crud -> InsertCompraProdC();
                                                //$crud -> DeleteCompraProdC();
                                                $crud -> UpdateCompraProdC();
                                                
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
