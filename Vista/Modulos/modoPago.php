
				<h3>Modo de pago</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td>
                                                <input type="text" name="codigo" value="" id="number" 
                                                title="Campo numerico" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="desc">Descripci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="modoPago" id="text" value="" 
                                                title="Campo de texto" class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
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
                            <script type="text/javascript" src="Vista/js/validar.js"></script>
                        </div>
