<?php

class ModoPagoC{

    public function InsertModoPagoC(){

        if(!empty($_POST["codigo"]) && !empty($_POST["modoPago"])){

            if(isset($_POST["insert"])){

                $datosC = array('codigo'=>$_POST["codigo"], 'modoPago'=>$_POST["modoPago"]);
                $tablaBD = "modopago";

                $res = ModoPagoM::InsertModoPagoM($datosC,$tablaBD);

                if($res){

                    echo '<script>alert("Se registro correctamente")</script>';

                }else{

                    echo 'No se registro!!';

                }

            }

        }else{

            echo "Llene los campos vacios!!";

        }

    }

    public function ConsultModoPagoC(){

        global $res;

        if(isset($_POST["consult"])){

            $datosC = array('codigo'=>$_POST["codigo"], 'modoPago'=>$_POST["modoPago"]);
            $tablaBD = "modopago";

            $res = ModoPagoM::ConsultModoPagoM($datosC,$tablaBD);

            if(!$res){

                echo '<script>alert("Consulta no encontrada")</script>';
            }

        }

        echo '<tr>
                <td><label for="id">C&oacute;digo:</label></td>
                <td>
                    <input type="text" name="codigo" value="'.$res["idModoPago"].'" id="number" 
                    title="Campo numerico" class="form-control">
                    <small class="form-text text-danger" id="msgNumber"></small>
                </td>
            </tr>
            <tr>
                <td><label for="desc">Descripci&oacute;n:</label></td>
                <td>
                    <input type="text" name="modoPago" id="text" value="'.$res["nombrePago"].'" 
                    title="Campo de texto" class="form-control">
                    <small class="form-text text-danger" id="msgText"></small>
                </td>
            </tr>';

    }

}

?>