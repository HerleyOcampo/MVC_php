<?php

    class Houses_model {
        // Variable para llamar la conexion a la base de datos
        private $db;
        private $houses;

        // Metodo construct se llama automaticamente cada vez que se llame
        // la clase Houses_model
        public function __construct(){
            // Llamando la conexion a la base de datos
            $this->db = Conexion::connect();
            // Declarando houses como un array para  almacenar datos
            $this->houses = array();
        }

        // En este metodo vamos a cargar el catalogo de la tabla houses 
        public function getHouses(){
            // Escribiendo la query que va a ser ejecutada
            $sql = "SELECT * FROM houses";
            // Con $this->db traemos la conexion a la base de datos y desṕues
            // le pasamos la query que acabamos de almacenar
            // En result almacenamos la informacion solicitada por la query
            $result = $this->db->query($sql);
            
            // Vamos a usar while para extraer la informacion de result 
            // pasar por todsa las filas que tiene y almacenar en $row
            while($row=$result->fetch_assoc()){
                // Agregando la informacion de $row dentro de houses 
                $this->houses[]=$row;
            }
            
            return $this->houses;
        }
    }
?>