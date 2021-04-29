

				<h3>Medida</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                    <?php 

                                        $res = MedidaC::ConsultMedidaC();

                                    ?>

                                    <tr>
                                        <td><label for="codigo">Código:</label></td>
                                        <td>
                                            <input type="text" id="number" name="codigo" value="<?php echo $res["codigo"];?>"
                                                pattern="(^(?:\+|-)?\d+$)" title="Campo numerico" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="name">Descripción:</label></td>
                                        <td>
                                            <input type="text" name="nombre" id="text" value="<?php echo $res["medida"];?>" title="solo se permite texto." 
                                                 pattern="(^[a-zA-Z Á]{2,30}$)" class="form-control">
                                            <small class="form-text text-danger" id="msgText"></small>
                                        </td>
                                    </tr>
                                   
                                        <tr class="table">
                                            <td><br></td>
                                            <td style="color:tomato;" colspan="2">
                                            <?php
                                            
                                            $crud = new MedidaC();
                                            $crud -> InsertMedidaC();
                                            $crud -> DeleteMedidaC();
                                            $crud -> UpdateMedidaC();
                                            
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