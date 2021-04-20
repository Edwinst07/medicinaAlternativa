                                        <tr>
                                            <td colspan="3">
                                            <input type="reset" name="clear" class="btn btn-outline-primary btn-sm" value="Limpiar" >
                                                <input type="submit" name="insert" class="btn btn-outline-success btn-sm" value="Agregar" onclick="return validar('Agregar');">
                                                <input type="submit" name="consult" class="btn btn-outline-primary btn-sm" value="Consultar" onclick="return validar('Consultar');">
                                         <?php
                                                
                                    if(isset($_POST["consult"])){

                                        echo '<input type="submit" name="delete" class="btn btn-outline-danger btn-sm" value="Eliminar" onclick="return validar("Eliminar");">
                                              <input type="submit" name="update" class="btn btn-outline-primary btn-sm" value="Actualizar" onclick="return validar("Actualizar");">';
                                    }
                                                
                                            ?>
                                            </td>
                                        </tr>