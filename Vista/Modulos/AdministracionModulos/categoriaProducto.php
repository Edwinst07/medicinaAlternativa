
				<h3>Categor&iacute;a de Productos</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <?php
                                        
                                        $res = CategoriaProductoC::ConsultCategoriaProductoC();
                                        
                                        ?>

                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" id="number" name="codigo" class="form-control" value="<?php echo $res["idCategoria"];?>"
                                                        title="Ingresar tipo numerico. Ejemplo: 1,2,3...">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td> 
                                                        
                                        </tr>
                                        <tr>
                                            <td><label for="catProd">Descripci&oacute;n:</label></td>
                                             <td>
                                                <input type="text" id="text" name="catProd" class="form-control" value="<?php echo $res["nombreCategoria"];?>"
                                                    title="Ingresar tipo Texto. Ejemplo: Sedantes, Diur&eacute;tico, ...">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                                        
                                        </tr>

                                        <tr class="table">
                                            <td style="color:tomato;">
                                            
                                            <?php

                                            $crud = new CategoriaProductoC();
                                            $crud -> InsertCategoriaProductoC();
                                            $crud -> DeleteCategoriaProductoC();
                                            $crud -> UpdateCategoriaProductoC();

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
