<?php

class VentaProductoC{

    public function ProductosC(){

        return VentaProductoM::ProductosM();


    }

    public function factura(){

        if(isset($_POST["comprar"])){
            $idCliente = $_SESSION["ingreso"];
            $idPedido = VentaProductoM::IdPedidoM($idCliente);
            $iva = 19;
            
            echo $idPedido["idPedido"];

                // for ($i=0; $i < count($_POST["idProducto"]); $i++) { 
                    
                //     $idProducto = $_POST["idProducto"][$i];
                //     $precio = $_POST["costo"][$i];
                //     $cantidad = $_POST["cantidad"][$i];
                //     $totalProducto = $_POST["total"][$i];
    
                //     echo $idProducto.'=>'.$idCliente.'=>'.$idPedido.'=>'.$precio.'=>'.$cantidad.'=>'.$iva.'=>'.$totalProducto. '<br>';

                // }
          }

    }

    public function ModoPagoC(){

        return VentaProductoM::ModoPagoM();
    }

    public function AgregarPedidoC(){

        date_default_timezone_set("America/Mexico_City");
        setlocale(LC_ALL,"es_ES");

        $hora = strftime(" %H:%M");
        $fecha = strftime("%Y-%m-%d");
    
        $idCliente = $_SESSION["ingreso"];
        $iva = 19;
        
        if(isset($_POST["comprar"])){

            if( !empty($_POST["totalPagar"])  && $_POST["modoPago"] != null){

                $totalPedido = $_POST["totalPagar"];
    
                $datosC = array('idCliente'=>$idCliente, 'fechaActual'=>$fecha, 'horaActual'=>$hora, 
                                'modoPago'=>$_POST["modoPago"], 'totalPedido'=>$totalPedido);
    
                $tablaBD = "pedido";
    
                $res = VentaProductoM::PedidoM($datosC, $tablaBD);
    
                if($res){
    
                    echo "<script>alert('Se envío el pedido correctamente');</script>";
                }else{
                    echo "<script>alert('No se envío el pedido');</script>";
                }

                $idPedido = VentaProductoM::IdPedidoM($idCliente, $fecha, $hora);

                for ($i=0; $i < count($_POST["idProducto"]); $i++) { 
    
                    $idProducto = $_POST["idProducto"][$i];
                    $precio = $_POST["costo"][$i];
                    $cantidad = $_POST["cantidad"][$i];
                    $totalProducto = $_POST["total"][$i];

                    $res2 = VentaProductoM::PedidoProductoM($idProducto, $idPedido["idPedido"], $precio, $cantidad, $iva, $totalProducto);
                    
                    $cantidadProductoBD = VentaProductoM::ConsultarCantidadProducto($idProducto);
                    $cantidadProductoAct = $cantidadProductoBD["cantidad_prod"] - $cantidad;
                    VentaProductoM::ActualizarCantidadProductoM($idProducto, $cantidadProductoAct);
                }

            }else{

                echo "<script>alert('No se realizó el pedido: Falto seleccionar ´Modo de pago´ o compro con valor de $0 pesos.');</script>";
            }

        }

    }

    public function UsuarioC($cedula){

        $datosC = $cedula;
        $tablaBD = "cliente";

        $res = VentaProductoM::UsuarioM($datosC, $tablaBD);

        echo $res["nombre1"] . ' ' . $res["nombre2"] . ' ' . $res["apellido1"] . ' ' . $res["apellido2"];

    }

}

?>
