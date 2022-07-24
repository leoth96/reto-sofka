<?php 
    require_once("autoload.php");

    $objnave = new insertarnave();

    $insercion = $objnave->InsertarNave(3, 'nave1', 'pais1', "2022-07-05", 'act', 22, 2000, 'MMH');
    echo $insercion;
?>