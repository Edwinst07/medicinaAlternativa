

				<h3>Acceso usuario</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                    <?php 

                                        $res = AccesoUsuarioC::ConsultAccesoUsuarioC();

                                    ?>

                                    <tr>
                                        <td><label for="cedula">Cedula:</label></td>
                                        <td>
                                            <input type="text" id="number" name="cedula" value="<?php echo $res["cedula"];?>"
                                                pattern="(^(?:\+|-)?\d+$)" title="Campo numerico" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="name">Nombre:</label></td>
                                        <td>
                                            <input type="text" name="nombre" id="text" value="<?php echo $res["nombre"];?>" title="solo se permite texto." 
                                                 pattern="(^[a-zA-Z Á]{3,30}$)" class="form-control">
                                            <small class="form-text text-danger" id="msgText"></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="password">Contraseña:</label></td>
                                        <td>
                                            <input type="password" name="pass" id="pass" value="<?php echo $res["password"];?>" 
                                            title="Minimo 5 caracteres con numeros y letras" class="form-control">
                                                <small class="form-text text-danger" id="msgPass"></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="perfil">Perfil:</label></td>
                                        <td>
                                        <Select id="select" name="perfil" class="form-select">
                                            <option value=""><?php
                                                                if((isset($_POST["consult"]))){
                                                                    echo $res["nombrePerfil"];
                                                                }else{
                                                                    echo 'Perfil';
                                                                } ?>
                                            </option>
                                
                                            <?php 
                                                $res2 = AccesoUsuarioC::SelectPerfilC();
                                            
                                                foreach ($res2 as $key => $value) {
                                    
                                                    echo '<option value="'.$value["idPerfil"].'">'.$value["nombrePerfil"].'</option>';
                                    
                                                }
                                            
                                            ?>
                                
                                        </Select>
                                            <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                        </tr>
                                            
                                        <tr class="table">
                                            <td><br></td>
                                            <td style="color:tomato;" colspan="2">
                                            <?php
                                            
                                            $crud = new AccesoUsuarioC();
                                            $crud -> InsertAccesoUsuarioC();
                                            $crud -> DeleteAccesoUsuarioC();
                                            $crud -> UpdateAccesoUsuarioC();
                                            
                                            ?>
                                            </td>
                                        </tr>
                                        <?php

                                        include "botones.php";

                                        ?>
                                    </table>
                                    
                                </div>

                            </form>
                            <script type="text/javascript" src="Vista/js/validar.js"></script> 
                        </div>