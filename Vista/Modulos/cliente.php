<h3>Cliente</h3>
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
                                            <td><label for="direccion">Direcci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="direccion" id="text" value="" 
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                            <td><label for="telefono">Telefono:</label></td>
                                            <td>
                                                <input type="text" name="tel" id="number" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="Movil">Movil:</label></td>
                                            <td>
                                                <input type="text" name="movil" id="number" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                            <td><label for="correo">Correo:</label></td>
                                            <td>
                                                <input type="email" name="correo" id="email" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgEmail"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="departamento">Departamento:</label></td>
                                            <td>
                                                <select name="departamento" id="select" class="form-select">
                                                    <option value="">Departamento</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                           </td>
                                           <td><label for="municipio">Municipio:</label></td>
                                           <td>
                                                <select name="municipio" id="select" class="form-select">
                                                    <option value="">Municipio</option>
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