
				<h3>Perfil</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php

                                        $res = PerfilC::ConsultPerfilC();

                                        ?>

                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" name="id" id="number" value="<?php echo $res["idPerfil"]; ?>" 
                                                    pattern="(^(?:\+|-)?\d+$)" title="Campo numerico" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber" ></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="perfil">Descripci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="perfil" id="text" value="<?php echo $res["nombrePerfil"]; ?>"
                                                    pattern="(^[a-zA-Z Á]{3,30}$)" title="Campo de texto, desde 3 caracteres" class="form-control">
                                                <small class="form-text text-danger" id="msgText" ></small>
                                            </td>
                                        </tr>

                                    </table>
                                    <table>
                                        <tr class="table">
                                            <td style="color:tomato;">
                                            <?php 
                        
                                            $crud = new PerfilC();
                                            $crud -> InsertPerfilC();
                                            $crud -> DeletePerfilC();
                                            $crud -> UpdatePerfilC();
                                            
                                            ?>
                                            </td>
                                            <td></td>
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

                            <br>
                            <br>
                            <br>

                            <script type="text/javascript" src="Vista/js/validar.js"></script>
                        </div>

                        
