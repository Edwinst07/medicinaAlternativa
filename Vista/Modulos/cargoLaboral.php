
				<h3>Cargo Laboral</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php
                                        
                                        $consult = new CargoLaboralC();
                                        $consult -> ConsultCargoLaboralC();
                                        
                                        ?>

                                        </tr>
                                        <tr class="table">
                                            <td style="color: tomato">
                                            
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
                            <!-- <script type="text/javascript" src="Vista/js/validar.js"></script> -->
                        </div>
			