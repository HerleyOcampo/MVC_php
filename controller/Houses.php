<?php

class HousesController
{

    public function __construct()
    {
        require_once "model/houseModel.php";
    }
    // Vamos a interactuar entre el modelo y la vista
    public function index()
    {
        // Estamos creando una instancia de nuestro objeto Houses_model
        $houses = new Houses_model();
        // llamando el metodo getHouses() y pasando la informacion a
        // la variable data["houses"]
        $data["houses"] = $houses->getHouses();
        // Cuando llamamos esa vista al final le estamos dando acceso a la 
        // informacio que esta arriba dentro del metodo
        require_once "view/houses.php";
    }
}
