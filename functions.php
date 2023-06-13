<?php

include("conexion.php"); 

    $consulta = $_GET["op"];
    var_dump($_GET);
    var_dump($_POST);
    switch ($consulta) {
        case 'crearUsuario':
            crearUsuario();
            break;
        
        default:
            # code...
            break;
    }

    function crearUsuario(){
        echo 'hola mundo';
    }

?>