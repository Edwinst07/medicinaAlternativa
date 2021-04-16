

				<h3>Acceso usuario</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                               

                                    <?php 

                                        $consult = new AccesoUsuarioC();
                                        $consult -> ConsultAccesoUsuarioC();

                                    ?>
                                            
                                            
                                        <tr class="table">
                                            <td><br></td>
                                            <td style="color:tomato;">
                                            <?php
                                            
                                            $crud = new AccesoUsuarioC();
                                            $crud -> InsertAccesoUsuarioC();
                                            $crud -> DeleteAccesoUsuarioC();
                                            $crud -> UpdateAccesoUsuarioC();
                                            
                                            ?>
                                            </td>
                                        </tr>
                                        <?php

                                        include "botones.php";

                                        ?>
                                    </table>
                                    
                                </div>

                            </form>
                            <!-- <script type="text/javascript" src="Vista/js/validar.js"></script> -->
                        </div>