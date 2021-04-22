<h3>Empleado</h3>
                        <div class="cont-derecho">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <tr>
                                            <td><label for="id">Cedula:</label></td>
                                            <td colspan="2"><input type="text" name="cedula" id="number" value="" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label for="name">Primer nombre:</label></td>
                                            <td ><input type="text" name="nombre1" id="text" value="" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td ><label for="name">Segundo nombre:</label></td>
                                            <td ><input type="text" name="nombre2" id="text" value="" 
                                                 class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                       
                                        <tr>
                                            <td ><label for="name">Primer apellido:</label></td>
                                            <td ><input type="text" name="apellido1" id="text" value="" 
                                                 class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="name">Segundo apellido:</label></td>
                                            <td><input type="text" name="apellido2" id="text" value="" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td><label for="genero">Genero:</label></td>
                                            <td>
                                                <select name="genero" id="select" class="form-select">
                                                    <option value="">Genero</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                            <td><label for="direccion">Direcci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="direccion" id="text" value="" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="telefono">Telefono:</label></td>
                                            <td>
                                                <input type="text" name="tel" id="number" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td><label for="Movil">Movil:</label></td>
                                            <td>
                                                <input type="text" name="movil" id="number" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="correo">Correo:</label></td>
                                             <td>
                                                <input type="email" name="correo" id="email" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgEmail"></small>
                                            </td>
                                            <td><label for="fechaNacimiento">Fecha nacimiento:</label></td>
                                            <td>
                                                <input type="date" name="fechaNacimiento" id="date" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="sucursal">Sucursal:</label></td>
                                            <td>
                                                <select name="sucursal" id="select" class="form-select">
                                                    <option value="">Sucursal</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                           </td>
                                           <td><label for="cargoLaboral">Cargo laboral:</label></td>
                                           <td>
                                                <select name="cargoLaboral" id="select" class="form-select">
                                                    <option value="">Cargo laboral</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                           </td>
                                       </tr>
                                        
                                        <tr class="table">
                                            <td><br></td>
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