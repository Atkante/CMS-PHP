<?php
Class Conectar{
    public static function conexion(){
        try {
            $conectar = new PDO("mysql:local=localhost;dbname=cmsdavid","root","");
            $conectar->query("SET NAMES 'utf8'");
           
            return $conectar;
        } catch (Exception $e) {
            print "ERROR UnU Onichan". $e->getMessage()."<br/>";
            die();
        }

    }
}

if (Conectar::conexion()) {
    echo "conectado";
}else {
    echo "No conectado UnU Onichan";
}

?>