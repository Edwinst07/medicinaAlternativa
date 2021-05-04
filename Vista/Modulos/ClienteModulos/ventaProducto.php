    <!-- Js -->
    <script src="Vista/js/jquery-3.6.0.js"></script>
  <script src="Vista/js/producto.js"></script>

<br><br><br>
<div class="productos">

<?php
    
    $producto = MostrarProductoC::ProductosC();

    foreach ($producto as $key => $value) {
      
      echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2 " style="float:left;">
            <div class="card" style="width: 18rem;">
              <div
                class="cover cover-small"
                
              >
              <img src="Vista/img/productos/'.$value["image"].'" width="288px" height="200px"></div>
              <div class="card-body ">
                <h5 class="card-title ">
                  <a href="#">'.$value["nombre"].'</a>
                </h5>
                <p class="card-text">
                '.$value["descripcion"].'
                   
                  <center><button style="margin-top: 20px" type="button" id="prod" value="'.$value["idProducto"].'" class="btn btn-info">
                  <a href="#">Comprar</a>
                </button></center>
                </p>
                
              </div>
            </div>
          </div>';

    }
    
    ?>

</div>
<div class="compra">

  <div class="contenedor">

    <center><h1>Compra</h1></center>
        <br><br><br>
        <table class="table">

          <tr>
            <td>Producto</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td>Borrar</td>
          </tr>

        </table>

  </div>

</div>


