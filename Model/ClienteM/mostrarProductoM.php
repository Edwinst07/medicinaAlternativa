<?php

class MostrarProductoM{

    public function ProductosM(){

        $pdo = ConexionBD::cBD()->prepare("SELECT i.`idProducto`, i.`nombre`, i.`costo`, i.`descripcion`,
                                                    m.`medida`, i.`cantidad_medida`, `cantidad_prod`,
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

}

?>