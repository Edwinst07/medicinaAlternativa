<?php

class Model{

    static public function RutasModel($rutas){

        if($rutas=="inventario" || $rutas=="compraProd" || $rutas=="modoPago" || $rutas=="forma" || $rutas=="medida" || 
        $rutas=="categoriaProducto" || $rutas=="departamento" || $rutas=="cargoLaboral" || $rutas=="sucursal" || $rutas=="cliente" || 
        $rutas=="empleado" || $rutas=="perfil" || $rutas=="municipio" || $rutas=="accesoUsuario"){

            $pagina = "Vista/Modulos/".$rutas.".php";
        }else{
            $pagina = "Vista/Modulos/index.php";
        }

        return $pagina;
    }
}

?>