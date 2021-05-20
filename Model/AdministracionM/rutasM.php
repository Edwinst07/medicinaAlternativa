<?php

class Model{

    static public function RutasModel($rutas){

        if($rutas=="inventario" || $rutas=="compraProd" || $rutas=="modoPago" || $rutas=="forma" || $rutas=="medida" || 
        $rutas=="categoriaProducto" || $rutas=="departamento" || $rutas=="cargoLaboral" || $rutas=="sucursal" || $rutas=="cliente" || 
        $rutas=="empleado" || $rutas=="laboratorio" || $rutas=="perfil" || $rutas=="municipio" || $rutas=="accesoUsuario"){

            $pagina = "Vista/Modulos/AdministracionModulos/".$rutas.".php";
        }else{
            $pagina = "Vista/Modulos/AdministracionModulos/index.php";
        }

        return $pagina;
    }
}

?>