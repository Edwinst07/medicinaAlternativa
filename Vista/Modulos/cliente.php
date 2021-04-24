<script type="text/javascript" src="Vista/js/municipioDepartamento.js"></script>

<h3>Cliente</h3>
                        <div class="cont-derecho">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                                        <?php
                                        
                                        $res = ClienteC::ConsultClienteC();
                                        
                                        ?>

                                        <tr>
                                            <td><label for="id">Cedula:</label></td>
                                            <td colspan="2"><input type="text" name="cedula" id="number" value="<?php echo $res['cedula']; ?>" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label for="name">Primer nombre:</label></td>
                                            <td ><input type="text" name="nombre1" id="text" value="<?php echo $res['nombre1']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td ><label for="name">Segundo nombre:</label></td>
                                            <td ><input type="text" name="nombre2" id="text" value="<?php echo $res['nombre2']; ?>" 
                                                 class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td ><label for="name">Primer apellido:</label></td>
                                            <td ><input type="text" name="apellido1" id="text" value="<?php echo $res['apellido1']; ?>" 
                                                 class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="name">Segundo apellido:</label></td>
                                            <td><input type="text" name="apellido2" id="text" value="<?php echo $res['apellido2']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label for="direccion">Direcci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="direccion" id="text" value="<?php echo $res['direccion']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="telefono">Telefono:</label></td>
                                            <td>
                                                <input type="text" name="tel" id="number" value="<?php echo $res['telefono']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="Movil">Movil:</label></td>
                                            <td>
                                                <input type="text" name="movil" id="number" value="<?php echo $res['movil']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td><label for="correo">Correo:</label></td>
                                            <td>
                                                <input type="email" name="correo" id="email" value="<?php echo $res['correo']; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgEmail"></small>
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
                                            <small class="form-text text-danger" id="msgSelect"></small>
                                    </td>
                                </tr>
                                        
                                        <tr class="table" style="color: tomato;">
                                            <td colspan="3">
                                            <?php

                                                $crud = new ClienteC();
                                                $crud -> InsertClienteC();
                                                $crud -> DeleteClienteC();
                                                $crud -> UpdateClienteC();

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
                            <script type="text/javascript" src="js/validar.js"></script>
                        </div>