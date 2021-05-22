<?php

class VentaProductoM{

    public function ProductosM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT i.`idProducto`, i.`nombre`, i.`costo`, i.`descripcion`,
                                                    m.`nombreMedida`, i.`cantidad_medida`, i.`cantidad_prod`,
                                                    i.`porc_ganancia`, f.`forma`, i.`image` 
                                            FROM `medicinaalternativa`.`inventario` AS i,
                                                `medicinaalternativa`.`forma_producto` AS f,
                                                `medicinaalternativa`.`medida` AS m
                                            WHERE i.`medida`=m.`codigo` 
                                            AND  i.`formaProducto`=f.`idForma`
                                            AND i.`estado`=0 ");

        if($pdo -> execute()){

            return $pdo -> fetchAll(); 
        }else{

            return 'No hay producto';
        }

        $pdo -> close;

    }

    public function IngresadoProductosM($id){

        require_once "../../../Controller/conexionBD.php";

        $pdo = ConexionBD::cBD()->prepare("SELECT `idProducto`, `nombre`, `costo`, `descripcion`, 
                                            `formaProducto`, `image`, `cantidad_prod` 
                                            FROM `medicinaalternativa`.`inventario`
                                            WHERE `idProducto`=:id, `estado`=0 ");

        $pdo -> bindParam(":id", $id, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetchAll(); 
        }else{

            return 'No hay producto';
        }

        $pdo -> close;

    }

    public function PedidoProducto(){
        
        $pdo = ConexionBD::cBD()->prepare(
            "SELECT pp.`IdpedidoProducto`, pp.`idProducto`, pp.`idPedido`, pp.`cantidad`, pp.`valorIva`,
             pp.`subTotal`,
            i.`nombre`, i.`costo`, i.`descripcion`, i.`formaProducto`, i.`medida`, i.`cantidad_medida`, 
            i.`porc_ganancia`, i.`existe`, i.`image`,
            p.`fechaPedido`, p.`horaPedido`, p.`fechaEntrega`, p.`modoPago`, p.`totalPedido`
            FROM `medicinaalternativa`.`pedidoproducto`AS pp,
                 `medicinaalternativa`.`inventario` AS i,
                 `medicinaalternativa`.`pedido` AS p
            WHERE i.`idProducto`=pp.`idProducto`
            AND p.`idPedido`=pp.`idPedido`
            AND i.`estado`=0"
        );

        if($pdo -> execute()){

            return $pdo -> fetchAll(); 
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ModoPagoM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idModoPago`, `nombrePago`, `estado` 
                                            FROM `medicinaalternativa`.`modopago` 
                                            WHERE `estado`=0");

        if($pdo -> execute()){

            return $pdo -> fetchAll();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function PedidoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.$tablaBD(`idEmpleado`,`idCliente`, `fechaPedido`, `horaPedido`, 
                                            `modoPago`, `totalPedido`) 
                                            VALUES (1234,:idCliente, :fechaActual, :horaActual, :modoPago, :totalPedido)");

        $pdo -> bindParam(":idCliente", $datosC["idCliente"], PDO::PARAM_STR);
        $pdo -> bindParam(":fechaActual", $datosC["fechaActual"], PDO::PARAM_STR);
        $pdo -> bindParam(":horaActual", $datosC["horaActual"], PDO::PARAM_STR);
        $pdo -> bindParam(":modoPago", $datosC["modoPago"], PDO::PARAM_STR);
        $pdo -> bindParam(":totalPedido", $datosC["totalPedido"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;
    }

    public function IdPedidoM($idCliente, $fecha, $hora){

        $pdo = ConexionBD::cBD()->prepare("SELECT `idPedido`  FROM `medicinaalternativa`.`pedido` 
                                            WHERE `idCliente`=:idCliente 
                                            AND `fechaPedido`=:fecha
                                            AND `horaPedido`=:hora LIMIT 1");

        $pdo -> bindParam(":idCliente", $idCliente, PDO::PARAM_STR);
        $pdo -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
        $pdo -> bindParam(":hora", $hora, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function PedidoProductoM($idProducto, $idPedido, $precio, $cantidad, $iva, $totalProducto){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO `medicinaalternativa`.`pedidoproducto`(`idProducto`, `idPedido`, `precio`, 
                                            `cantidad`, `valorIva`, `subTotal`) 
                                            VALUES (:idProducto, :idPedido, :precio, :cantidad, :iva, :subtotal)");

        $pdo -> bindParam(":idProducto", $idProducto, PDO::PARAM_STR);
        $pdo -> bindParam(":idPedido", $idPedido, PDO::PARAM_STR);
        $pdo -> bindParam(":precio", $precio, PDO::PARAM_STR);
        $pdo -> bindParam(":cantidad", $cantidad, PDO::PARAM_STR);
        $pdo -> bindParam(":iva", $iva, PDO::PARAM_STR);
        $pdo -> bindParam(":subtotal", $totalProducto, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ConsultarCantidadProducto($idProducto){

        $pdo = ConexionBD::cBD()->prepare("SELECT `cantidad_prod` 
                                            FROM `medicinaalternativa`.`inventario` 
                                            WHERE `idProducto`=:idProducto");

        $pdo -> bindParam(":idProducto", $idProducto, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

    public function ActualizarCantidadProductoM($idProducto, $cantidad){

        $pdo = ConexionBD::cBD()->prepare("UPDATE `medicinaalternativa`.`inventario` 
                                            SET `idProducto`=:idProducto,`nombre`=`nombre`,`costo`=`costo`,
                                            `descripcion`=`descripcion`,`formaProducto`=`formaProducto`,
                                            `medida`=`medida`,`cantidad_medida`=`cantidad_medida`,
                                            `cantidad_prod`=:cantidadProducto,`porc_ganancia`=`porc_ganancia`,
                                            `existe`=`existe`,`image`=`image` WHERE `idProducto`=:idProducto LIMIT 1");

        $pdo -> bindParam(":idProducto", $idProducto, PDO::PARAM_STR);
        $pdo -> bindParam(":cantidadProducto", $cantidad, PDO::PARAM_STR);

        if($pdo -> execute()){

            return true;
        }else{

            return false;
        }

        $pdo -> close;


    }

    public function UsuarioM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT `nombre1`, `nombre2`, `apellido1`, `apellido2`
                                            FROM `medicinaalternativa`.$tablaBD
                                            WHERE `cedula`=:cedula");

        $pdo -> bindParam(":cedula", $datosC, PDO::PARAM_STR);

        if($pdo -> execute()){

            return $pdo -> fetch();
        }else{

            return false;
        }

        $pdo -> close;

    }

}

?>