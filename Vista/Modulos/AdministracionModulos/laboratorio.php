<script src="Vista/js/municipioDepartamento.js"></script>

<h3>Laboratorio</h3>
<p>Campos con (*) son obligatorios:</p>
                        <div class="cont-derecho">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                                        <?php
                                        
                                        $res = LaboratorioC::ConsultLaboratorioC();
                                        
                                        ?>

                                        <tr>
                                            <td><label for="id">Código: *</label></td>
                                            <td colspan="2"><input type="text" name="codigo" id="number" value="<?php echo $res["idLaboratorio"];?>" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label for="name">Nombre laboratorio:*</label></td>
                                            <td ><input type="text" name="nombre" id="text" value="<?php echo $res["nombreLaboratorio"];?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="correo">Correo:*</label></td>
                                            <td>
                                                <input type="email" name="correo" id="email" value="<?php echo $res["correo"];?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgEmail"></small>
                                            </td>
                                        
                                        </tr>
                                        
                                        <tr>
                                            <td ><label for="name">Telefóno:*</label></td>
                                            <td>
                                                <input type="text" name="tel" id="number" value="<?php echo $res["telefono"];?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td><label for="invima">Invima: *</label></td>
                                            <td>
                                            
                                                <select name="invima" id="select" class="form-select">
                                                    <option value="<?php  
                                                    
                                                    if(isset($_POST['consult'])){
                                                        echo $res['invima'];
                                                    }else{
                                                        echo '';
                                                    }
                                                    
                                                    ?>">
                                                    <?php 
                                                        if(isset($_POST['consult'])){
                                                            echo $res['invima'];
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
                                                <input type="text" name="direccion" value="<?php echo $res["direccion"];?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                    <td><label for="dep">Departamento:*</label></td>
                                    <td>
                                        <select name="dep" id="selectDep" class="form-select">
                                            <option value=""> 
                                            <?php if(isset($_POST["consult"])){
                                                echo $res["nombreDepartamento"];
                                            }else{
                                                echo 'Departamento';
                                            }  ?>
                                            </option>

                                            <?php
                                            
                                            $dep = SucursalC::DepartamentoC();
                                            
                                            foreach ($dep as $key => $value) {
                                                echo '<option 
                                                id="'.$value["idDepartamento"].'" 
                                                value="'.$value["idDepartamento"].'">'
                                                .$value["nombreDepartamento"].
                                                '</option>';
                                            }
                                            
                                            ?>

                                        </select>
                                        <small class="form-text text-danger" id="msgSelect"></small>
                                    </td>
                                    <td><label for="municipio">Municipio:*</label></td>
                                    <td>
                                            <select name="municipio" id="selectMun" class="form-select">
                                            <option value="
                                            <?php 
                                                if(isset($_POST["consult"])){
                                                    echo $res["idMunicipio"];
                                                }else{
                                                    echo '';
                                                }?>
                                            
                                            ">
                                            <?php 
                                                if(isset($_POST["consult"])){
                                                    echo $res["nombreMunicipio"];
                                                }else{
                                                    echo 'Municipio';
                                                }?>
                                            </option>

                                            </select>
                                            <small class="form-text text-danger" id="msgSelect"></small>
                                    </td>
                                </tr>
                                        
                                        <tr class="table" style="color: tomato;">
                                            <td colspan="3">
                                            <?php

                                                $crud = new LaboratorioC(); 
                                                $crud -> InsertLaboratorioC();
                                                $crud -> DeleteLaboratorioC();
                                                $crud -> UpdateLaboratorioC();

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
                            
                        </div>