
				<h3>Categor&iacute;a de Productos</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <?php
                                        
                                        $consult = new CategoriaProductoC();
                                        $consult -> ConsultCategoriaProductoC();
                                        
                                        ?>
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
                            <!-- <script type="text/javascript" src="Vista/js/validar.js"></script> -->
                        </div>
