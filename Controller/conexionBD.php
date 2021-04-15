<?php

class ConexionBD{

    public function cBD(){

        try{

            $bd = new PDO("mysql:host-localhost;dbname=medicinaalternativa","root","");
            ///$bd -> setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $bd -> exec("SET CHARACTER SET utf8");

            return $bd;

        }catch(Exception $e){

            die('Error: ' . $e.GetMessage());
        }
        
    }
}

?>