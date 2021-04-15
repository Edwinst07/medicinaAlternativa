                                        <tr>
                                            <td colspan="2">
                                                <input type="reset" name="clear" class="btn btn-outline-primary btn-sm" value="Limpiar" >
                                                <input type="submit" name="insert" class="btn btn-outline-success btn-sm" value="Agregar" >
                                                <input type="submit" name="consult" class="btn btn-outline-primary btn-sm" value="Consultar">
                                                
                                        <?php
                                                
                                    if(isset($_POST["consult"])){

                                        echo '<input type="submit" name="delete" class="btn btn-outline-danger btn-sm" value="Eliminar" >
                                              <input type="submit" name="update" class="btn btn-outline-primary btn-sm" value="Actualizar" >';
                                    }
                                                
                                            ?>
                                            </td>
                                        </tr>