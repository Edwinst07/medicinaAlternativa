    <!-- Js -->
    <script src="Vista/js/jquery-3.6.0.js"></script>
    <script src="Vista/js/producto.js"></script>
  <script src="Vista/js/agregarProducto.js"></script>

<h1>Cuida tu salud con estos productos</h1>

<br><br><br>

<selection>
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">

    <?php
    
    $producto = MostrarProductoC::ProductosC();

    foreach ($producto as $key => $value) {

    ?>

              <div class="col mb-4">
                      <div class="card" style="width: 18rem; text-align: center;">
                          <img src="Vista/img/productos/<?php echo $value["image"]; ?>" width="288px" height="170px" alt="imagen de plantas">
                          <div class="card-body">
                              <h5 class="card-title"><?php echo $value["nombre"];?></h5>
                              <p class="card-text">
                                <?php echo $value["descripcion"];?>

                                <br>
                                <i>
                                Forma producto: <?php echo $value['forma']; ?>
                                <br>
                                Cantidad: <?php echo $value['cantidad_medida']." ".$value["medida"]; ?>
                                </i>
                                <br>
                                <b>Disponible: <?php echo $value["cantidad_prod"] ?></b><br>
                                <h5 class="card-title">
                                  $<?php 
                                      $precioVenta = ($value["costo"] * $value["porc_ganancia"])/100 + $value["costo"]; 
                                      echo $precioVenta; ?>
                                </h5>

                              </p>
                             
                              <button style="margin:auto;" type="button" id="prod" 
                                onclick="agregarProductoCarrito('<?= $value["idProducto"]; ?>','<?= $value["nombre"]; ?>','<?= $precioVenta; ?>', '<?= $value["cantidad_prod"] ?>');" 
                                class="btn btn-success"> Agregar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 
                              0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                              </button>
                          </div>
                      </div> 
                  </div>

            <?php

    }

            ?>


            </div> 
        </div>          
    </selection>   


<form method="POST">

  <div class="compra">
    <div class="container bg-light">
      <div class="row">
      <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <h3>Detalles Pedido</h3>
        </div>
      </div>
      <div class="row bg-success">
        <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <h5>Producto</h5>
        </div>
        <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
          <h5>Precio</h5>
        </div>
        <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
          <h5>Cantidad</h5>
        </div>
        <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
          <h5>Total</h5>
        </div>
        <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">
          <h5>Borrar</h5>
        </div>
      </div>
      <br>
      <div id="productosAgregados">

      </div>

      <div class="row">
          <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
          <div class="col col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
          <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <h5 style="text-align: right;">Total a pagar: $</h5>
          </div>
          <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2"> <span id="totalPagar"></span></div>
          <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>      

        </div>

    </div>
  </div>

        <div class="row">
          <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
          <div class="col col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
          <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-3">
              <input type="submit" name="comprar" value="Comprar" class="btn btn-success">
          </div>
          <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
          <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>      

        </div>
    
</form>

<?php

    $res = MostrarProductoC::factura();

?>




