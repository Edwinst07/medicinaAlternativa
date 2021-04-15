
				<h3>Modo de pago</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                
                                        <?php
                                        
                                        $consult = new ModoPagoC();
                                        $consult -> ConsultModoPagoC();
                                        
                                        ?>

                                        <tr class="table">
                                            <td style="color:tomato;">
                                            
                                            <?php
                                            
                                            $crud = new ModoPagoC();
                                            $crud -> InsertModoPagoC();
                                            $crud -> DeleteModoPagoC();
                                            $crud -> UpdateModoPagoC();
                                            
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
