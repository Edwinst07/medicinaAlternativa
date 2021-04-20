
				<h3>Municipio</h3>
                        <div class="cont-der">
                            <form method="POST">

                                <div style="width: 50%;">
                                    <table class="table ">

                                        <?php

                                            $consult = new MunicipioC();
                                            $consult -> ConsultMunicipioC();

                                        ?>
                                        <tr class="table">
                                            <td style="color:tomato;">
                                                <?php

                                                    $crud = new MunicipioC();
                                                    $crud -> InsertMunicipioC();
                                                    $crud -> DeleteMunicipioC();
                                                    $crud -> UpdateMunicipioC();
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
