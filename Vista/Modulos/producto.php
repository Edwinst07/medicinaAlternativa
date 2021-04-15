
				<h3>Producto</h3>
                        <div class="cont-der">
                            <form method="POST" onsubmit="return validar();">

                                <div style="width: 50%;">
                                    <table class="table ">
                                        <tr>
                                            <td><label for="id">C&oacute;digo:</label></td>
                                            <td><input type="text" name="id" id="number" value="" 
                                                title="Campo numerico, No se permite texto" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="name">Nombre:</label></td>
                                            <td><input type="text" name="nombre" id="text" value="" 
                                                title="solo se permite texto. Ejemplo: Moringa, Ruda, Romero, etc." class="form-control">
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="name">Costo:</label></td>
                                            <td><input type="text" name="costo" id="text" value="" 
                                                title="Campo numerico, No se permite texto."  class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="desc">Descripci&oacute;n:</label></td>
                                            <td>
                                                <input type="text" name="descripcion" id="text" value="" 
                                                title="Campo de texto." class="form-control">
                                                <small class="form-text text-danger" id="msgText"></small>
                                            </td>
                                                
                                        </tr>
                                        <tr>
                                            <td><label for="uniMedida">Unidad de medida:</label></td>
                                            <td>
                                                <input type="text" name="uniMedida" id="text" value="" title="" 
                                            class="form-control">
                                            <small class="form-text text-danger" id="msgText"></small>
                                        </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><label for="existe">Existe:</label></td>
                                            <td>
                                                <select name="existe" id="select" class="form-select">
                                                    <option value="">Existe</option>
                                                    <option value="0">Opcion1</option>
                                                    <option value="1">Opcion1</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="fechaFabrica">Fecha de f&aacute;brica:</label></td>
                                            <td>
                                                <input type="date" name="fechaFabrica" id="date" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="fechaVencimiento">Fecha de vencimiento:</label></td>
                                            <td>
                                                <input type="date" name="fechaFabrica" id="date" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgDate"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="invima">Aprovado por el Invima:</label></td>
                                            <td>
                                                <select name="invima" id="select" class="form-select">
                                                    <option value="">Si/No</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Si</option>
                                                </select>
                                                <small class="form-text text-danger" id="msgSelect"></small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label for="precioVenta">Precio de Venta:</label></td>
                                            <td>
                                                <input type="text" name="precioVenta" id="number" value="" class="form-control">
                                                <small class="form-text text-danger" id="msgNumber"></small>
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
