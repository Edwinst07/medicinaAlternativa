<h3>Sucursal</h3>
                        <div class="cont-derecho">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                                    <?php
                                    
                                    $consult = new SucursalC();
                                    $consult -> ConsultSucursalC();
                                    
                                    ?>
                                        
                                        
                                        <tr class="table">
                                            <td style="color:tomato;">
                                                <?php
                                                
                                                $crud = new SucursalC();
                                                $crud -> InsertSucursalC();
                                                $crud -> DelectSucursalC();
                                                $crud -> UpdateSucursalC();
                                                
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
                            <script type="text/javascript" src="js/validar.js"></script>
                        </div>