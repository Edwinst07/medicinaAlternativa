<?php

class Model{

    static public function RutasModel($rutas){

        if($rutas=="producto" || $rutas=="modoPago" || $rutas=="categoriaProducto" || $rutas=="departamento" || 
           $rutas=="cargoLaboral" || $rutas=="perfil" || $rutas=="municipio" || $rutas=="accesoUsuario"){

            $pagina = "Vista/Modulos/".$rutas.".php";
        }else{
            $pagina = "Vista/Modulos/index.php";
        }

        return $pagina;
    }
}

?>