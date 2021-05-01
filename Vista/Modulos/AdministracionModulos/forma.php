<script type="text/javascript" src="Vista/js/validar.js"></script>
				<h3>Forma producto</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $res = FormaC::ConsultFormaC();
                                        
                                        ?>

                                        <tr>
                                            <td ><label for="id">C&oacute;digo:</label></td>
                                            <td ><input type="text" name="id" id="number" value="<?php echo $res["idForma"]; ?>" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label for="name">Nombre:</label></td>
                                            <td ><input type="text" name="nombre" id="text" value="<?php echo $res["forma"]; ?>" 
                                                title="solo se permite texto. Ejemplo: Kg, gr, mg etc." class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                     
                                        <tr class="table">
                                            <td style="color:tomato;" colspan="3">
                                                <?php
                                                
                                                $crud = new FormaC();
                                                $crud -> InsertFormaC();
                                                $crud -> DeleteFormaC();
                                                $crud -> UpdateFormaC();
                                                
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <?php

                                        include "botones.php";

                                        ?>
                                    </table>
                                    <br><br><br>

                                    <table class="table table-hover">

                                        <tr><center><b>Listado - Forma producto</b></center></tr>
                                        <tr>
                                        <td><center><b>C&oacute;digo</b></center></td>
                                        <td><center><b>Forma</b></center></td>
                                        </tr>

                                        <?php
                                        
                                        $forma = Formac::MostrarFormaC();

                                        foreach ($forma as $key => $value) {
                                            echo '<tr>
                                                    <td><center>'.$value["idForma"].'</center></td>
                                                    <td><center>'.$value["forma"].'</center></td>
                                                  </tr>';
                                        }
                                        
                                        ?>
                                    </table>
                                    
                                </div> 

                            </form>
                            <script type="text/javascript" src="Vista/js/validar.js"></script>
                        </div>
