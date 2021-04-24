
				<h3>Municipio</h3>
                        <div class="cont-der"> 
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                                        <?php

                                            $res = MunicipioC::ConsultMunicipioC();

                                        ?>

                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" name="codigo" value="<?php echo $res["idMunicipio"];?>" 
                                                id="number" title="Campo numerico" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="mun">Descripci&oacute;n:</label></td>
                                            <td><input type="text" name="municipio" value="<?php echo $res["nombre"]; ?>" 
                                                id="text" title="Campo de texto" class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="dep">Departamento:</label></td>
                                            <td>
                                                <select name="dep" id="select" class="form-select">
                                                    <option value="">
                                                        <?php 
                                                        if(isset($_POST["consult"])){
                                                            echo $res["nombreDepartamento"];
                                                        }else{
                                                            echo 'Departamento';
                                                        } 
                                                                               
                                                        ?>
                                                    </option>';

                                                    <?php
                                                    
                                                    $dep = MunicipioC::DepartamentoC();

                                                    foreach ($dep as $key => $value) {

                                                        echo '<option value="'.$value["idDepartamento"].'">'.$value["nombreDepartamento"].'</option>';
                                                        
                                                    }
                                                    if(!$dep){
                                                            
                                                        echo '<option value="">No hay Departamentos</option>';
                                                    }
                                                    
                                                    ?>
                                                </select>
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>

                                        <tr class="table">
                                            <td style="color:tomato;">
                                                <?php

                                                    $crud = new MunicipioC();
                                                    $crud -> InsertMunicipioC();
                                                    $crud -> DeleteMunicipioC();
                                                    $crud -> UpdateMunicipioC();
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
