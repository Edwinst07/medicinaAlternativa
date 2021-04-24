<h3>Empleado</h3>
                        <div class="cont-derecho">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                                        <?php
                                        
                                        $res = EmpleadoC::ConsultEmpleadoC();
                                        
                                        ?>

                                        <tr>
                                            <td><label for="id">Cedula:</label></td>
                                            <td colspan="2"><input type="text" name="cedula" id="number" value="<?php echo $res["cedula"]; ?>" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label for="name">Primer nombre:</label></td>
                                            <td ><input type="text" name="nombre1" id="text" value="<?php echo $res["nombre1"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td ><label for="name">Segundo nombre:</label></td>
                                            <td ><input type="text" name="nombre2" id="text" value="<?php echo $res["nombre2"]; ?>" 
                                                 class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td ><label for="name">Primer apellido:</label></td>
                                            <td ><input type="text" name="apellido1" id="text" value="<?php echo $res["apellido1"]; ?>" 
                                                 class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="name">Segundo apellido:</label></td>
                                            <td><input type="text" name="apellido2" id="text" value="<?php echo $res["apellido2"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label for="genero">Genero:</label></td>
                                            <td>
                                                <select name="genero" id="select" class="form-select">
                                                    <option value="">
                                                                    <?php 

                                                                        if(isset($_POST["consult"])){
                                                                            echo $res["genero"];
                                                                        }else{
                                                                            echo 'Genero';
                                                                        }

                                                                    ?>
                                                    </option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                            <td><label for="direccion">Direcci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="direccion" id="text" value="<?php echo $res["direccion"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="telefono">Telefono:</label></td>
                                            <td>
                                                <input type="text" name="tel" id="number" value="<?php echo $res["telefono"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td><label for="Movil">Movil:</label></td>
                                            <td>
                                                <input type="text" name="movil" id="number" value="<?php echo $res["movil"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="correo">Correo:</label></td>
                                             <td>
                                                <input type="email" name="correo" id="email" value="<?php echo $res["correo"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgEmail"></small>
                                            </td>
                                            <td><label for="fechaNacimiento">Fecha nacimiento:</label></td>
                                            <td>
                                                <input type="date" name="fechaNacimiento" id="date" value="<?php echo $res["fecha_nacimiento"]; ?>" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="sucursal">Sucursal:</label></td>
                                            <td>
                                                <select name="sucursal" id="select" class="form-select">
                                                    <option value="">
                                                                    <?php
                                                                    
                                                                    if(isset($_POST["consult"])){
                                                                        echo $res["nombreSucursal"];
                                                                    }else{
                                                                        echo 'Sucursal';
                                                                    }
                                                                    
                                                                    ?>
                                                    </option>
                                                    <?php
                                                    
                                                    $sucursal = EmpleadoM::SucursalM(); 

                                                    foreach ($sucursal as $key => $value) {
                                                        echo '<option value="'.$value["idSucursal"].'">'.$value["nombreSucursal"].'</option>';
                                                    }

                                                    if(!$sucursal){
                                                        echo '<option value="">No hay sucursal</option>';
                                                    }
                                                    
                                                    ?>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                           </td>
                                           <td><label for="cargoLaboral">Cargo laboral:</label></td>
                                           <td>
                                                <select name="cargoLaboral" id="select" class="form-select">
                                                    <option value="">
                                                                    <?php
                                                                    
                                                                    if(isset($_POST["consult"])){
                                                                        echo $res["nombreCargo"];
                                                                    }else{
                                                                        echo 'Cargo laboral';
                                                                    }
                                                                    
                                                                    ?>
                                                    </option>
                                                    <?php
                                                    
                                                    $cargoLaboral = EmpleadoM::CargoLaboralM();

                                                    foreach ($cargoLaboral as $key => $value) {
                                                        echo '<option value="'.$value["idCargo"].'">'.$value["nombreCargo"].'</option>';
                                                    }

                                                    if(!$cargoLaboral){
                                                        echo '<option value="">No hay cargo laboral</option>';
                                                    }
                                                    
                                                    ?>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                           </td>
                                       </tr>
                                        
                                        <tr class="table" style="color: tomato;">
                                            <td colspan="3">
                                            
                                            <?php
                                            
                                            $crud = new EmpleadoC();
                                            $crud -> InsertEmpleadoC();
                                            $crud -> DeleteEmpleadoC();
                                            $crud -> UpdateEmpleadoC();
                                            
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