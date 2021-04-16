
				<h3>Perfil</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        
                                        <?php

                                        $consult = new PerfilC();
                                        $consult -> ConsultPerfilC();

                                        ?>

                                    </table>
                                    <table>
                                        <tr class="table">
                                            <td style="color:tomato;">
                                            <?php 
                        
                                            $crud = new PerfilC();
                                            $crud -> InsertPerfilC();
                                            $crud -> DeletePerfilC();
                                            $crud -> UpdatePerfilC();
                                            
                                            ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr class="table">
                                            <td><br></td>
                                            <td></td>
                                        </tr>
                                        <?php

                                        include "botones.php";

                                        ?>
                                    </table>
                                    
                                </div>

                            </form>

                            <br>
                            <br>
                            <br>
                            <!-- <form method="POST">

                                <table class="table ">
                                <tr>
                                    <td><b><label for="desc" style="float:right;">Consulta avanzada:</label></b></td>
                                    <td>
                                        <input type="text" name="desc" class="form-control"
                                        pattern="(^[a-zA-Z Á]{1,30}$)" title="Ingrese las iniciales de la descripción">
                                     </td>
                                </tr>
                                </table>
                                <table class="table table-success">

                                    <?php

                                        // $consultAvanc = new PerfilC();
                                        // $consultAvanc -> ConsultAvancC();

                                    ?>

                                </table>

                            </form> -->

                            <script type="text/javascript" src="Vista/js/validar.js"></script>
                        </div>

                        
