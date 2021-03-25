<?php
    require_once "config/database.php";
    require_once "controller/Houses.php";

    $control = new HousesController();
    $control->index();

?>
