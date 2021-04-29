<script type="text/javascript" src="Vista/js/municipioDepartamento.js"></script>

<h3>Sucursal</h3> 
                        <div class="cont-derecho">
                            <form method="POST">

                                <div style="width: 55%;">
                                    <table class="table ">

                                    <?php
                                    
                                    $res = SucursalC::ConsultSucursalC();
                                    
                                    ?>

<tr>
                                    <td ><label for="id">C&oacute;digo:</label></td>
                                    <td ><input type="text" name="id" id="number" value="<?php echo $res["idSucursal"];?>" 
                                        title="Campo numerico, No se permite texto" class="form-control">
                                        <small class="form-text text-danger" id="msgNumber"></small>
                                    </td>
                                    <td ><label for="name">Nombre:</label></td>
                                    <td ><input type="text" name="nombre" id="text" value="<?php echo $res["nombreSucursal"];?>" 
                                        class="form-control">
                                        <small class="form-text text-danger" id="msgText"></small>
                                    </td>
                                </tr>
                                <tr>
                                <td><label for="dereccion">Direcci&oacute;n:</label></td>
                                    <td>
                                        <input type="text" name="direccion" require value="<?php echo $res["direccion"];?>" 
                                        title="Campo numerico, No se permite texto."  class="form-control">
                                        <small class="form-text text-danger" id="msgText"></small>
                                    </td>
                                    <td><label for="tel">Telefono:</label></td>
                                    <td><input type="text" name="telefono" id="number" value="<?php echo $res["telefono"];?>" 
                                        title="Campo numerico, No se permite texto."  class="form-control">
                                        <small class="form-text text-danger" id="msgNumber"></small>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="correo">Correo:</label></td>
                                    <td>
                                        <input type="text" name="correo" id="email" value="<?php echo $res["correo"];?>" title="" 
                                        class="form-control">
                                        <small class="form-text text-danger" id="msgEmail"></small>
                                    </td>
                                    <td><label for="nit">Nit:</label></td>
                                    <td>
                                        <input type="text" name="nit" id="number" value="<?php echo $res["nit"];?>" 
                                        title="Campo numerico, Sin puntos ni comas."  class="form-control">
                                        <small class="form-text text-danger" id="msgNumber"></small>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="dep">Departamento:</label></td>
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
                                               echo '<option value="'.$value["idDepartamento"].'">'.$value["nombreDepartamento"].'</option>';
                                           }
                                           
                                           ?>
                                        </select>
                                    </td>
                                    <td><label for="municipio">Municipio:</label></td>
                                    <td>
                                            <select name="municipio" id="selectMun" class="form-select">
                                            <option value=""><?php 
                                                if(isset($_POST["consult"])){
                                                    echo $res["nombre"];
                                                }else{
                                                    echo 'Municipio';
                                                }?>
                                            </option>

                                            </select>
                                    </td>
                                </tr>

                                        <tr class="table">
                                            <td style="color:tomato;" colspan="3">
                                                <?php
                                                
                                                $crud = new SucursalC();
                                                $crud -> InsertSucursalC();
                                                $crud -> DelectSucursalC();
                                                $crud -> UpdateSucursalC();
                                                
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
                        <script>
                        

                        
                        </script>