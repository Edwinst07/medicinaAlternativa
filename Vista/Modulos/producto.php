
				<h3>Producto</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $consult = new ProductoC();
                                        $consult -> ConsultProductoC();
                                        
                                        ?>

                                        <tr class="table">
                                            <td style="color:tomato;">
                                                <?php
                                                
                                                $crud = new ProductoC();
                                                $crud -> InsertProductoC();
                                                $crud -> DeleteProductoC();
                                                $crud -> UpdateProductoC();
                                                
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
