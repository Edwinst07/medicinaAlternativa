<?php

class MostrarProductoC{

    public function ProductosC(){
        return MostrarProductoM::ProductosM();
    }

    public function factura(){

        if(isset($_REQUEST["comprar"])){

            $id = $_REQUEST["idProducto"][0];
            $costo = $_REQUEST["costo"][0];
            $cantidad = $_REQUEST["cantidad"][0];
            $totalPagar = $_REQUEST["totalPagar"];
          
            echo $id . " " . $costo ." " . $cantidad ." ". $totalPagar;
          }

    }

}

?>
