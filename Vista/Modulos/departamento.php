
				<h3>Departamento</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <?php

                                            $consult = new DepartamentoC();
                                            $consult -> ConsultDepartamentoC();

                                        ?>
                                        <tr class="table">
                                            <td style="color:tomato;">
                                                <?php

                                                    $crud = new DepartamentoC();
                                                    $crud -> InsertDepartamentoC();
                                                    $crud -> DeleteDepartamentoC();
                                                    $crud -> UpdateDepartamentoC();
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
