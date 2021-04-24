
				<h3>Departamento</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <?php

                                            $res = DepartamentoC::ConsultDepartamentoC();

                                        ?>
                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" name="codigo" value="<?php echo $res["idDepartamento"];?>" id="number" title="Campo numerico"
                                                class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><label for="dep">Descripci&oacute;n:</label></td>
                                        <td><input type="text" name="departamento" value="<?php echo $res["nombreDepartamento"];?>" id="text" title="Campo de texto"
                                            class="form-control">
                                            <small class="form-text text-danger" id="msgText"></small>
                                        </td>
                                        </tr>

                                        <tr class="table">
                                            <td style="color:tomato;" colspan="2">
                                                <?php

                                                    $crud = new DepartamentoC();
                                                    $crud -> InsertDepartamentoC();
                                                    $crud -> DeleteDepartamentoC();
                                                    $crud -> UpdateDepartamentoC();
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
