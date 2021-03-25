<?php

class Conexion{

    public static function connect()
    {
        $conn = new mysqli("localhost", "root", "", "renta_casas");
        return $conn;
    }
    
    }
?>