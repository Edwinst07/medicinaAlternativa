<!DOCTYPE html>
<html>
<head>
	<title>Admin - MAN.S.A.S</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Vista/css/style.css">
</head>
<body>
	<div class="contenedor">
		<table>
			<tr>
				<td class="menu">
					<div class="imagen">
                        <center><img src="Vista/img/photo.png" alt="perfil"></center>
                    </div>
                    <center><h4>Administraci&oacute;n</h4></center>
					
                    <?php 

                    include "Modulos/menu.php";

                    ?>

                </td>
			<td class="td-contenido">
				
				<?php

                $rutas = new RutasController();
                $rutas -> Rutas();

                ?>

            </td>
			</tr>
            <tr>
                <td colspan="2">
                    <footer>
                        <center>
                            <p>Edwin Stiven L.M</p>
                            <p>Jairo Alexander F.L</p>
                            <p>Medicina Alternativa Natural</p>
                            <p>&copy;2021</p>
                        </center>
                    </footer>
                </td>
            </tr>
		</table>
	</div>
</body>
</html>