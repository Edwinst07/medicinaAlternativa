
				<h3>Cargo Laboral</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $res = CargoLaboralC::ConsultCargoLaboralC();
                                        
                                        ?>

                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" name="codigo" id="number" value="<?php echo $res["idCargo"]; ?>" title="Campo numerico."
                                                    class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="cl">Descripci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="descripcion" id="text" value="<?php echo $res["nombreCargo"]; ?>" title="solo se permite texto." 
                                                    class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>

                                        </tr>
                                        <tr class="table">
                                            <td style="color: tomato" colspan="2">
                                            
                                            <?php
                                            
                                            $crud = new CargoLaboralC(); 
                                            $crud -> InsertCargoLaboralC();
                                            $crud -> DeleteCargoLaboralC();
                                            $crud -> UpdateCargoLaboralC();
                                            
                                            ?>
                                            
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
			