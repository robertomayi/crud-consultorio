<?php 

include("conexion.php");
//recibiendo los datos 

$nombre = $_POST["usuario"];
$contra = $_POST["contra"];
$correo = $_POST["correo"];
$nivel = $_POST["nivel"];

    //este query lista a los usuarios
    $sql = "INSERT INTO `usuarios`(`nombre_usuario`, `contraseña`, `correo_electronico`, `nivel`) VALUES ('{$nombre}', '{$contra}', '{$correo}', '{$nivel}')";
    $query = $GLOBALS['conex']->prepare($sql);
    $query->execute();
    $row = $query->rowCount();
    if ($row === 0) {
        echo json_encode('Insertado');
    }else{
        echo json_encode('No se pudo insertar');
    }
  

?>