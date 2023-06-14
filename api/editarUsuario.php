<?php 

include("conexion.php");
//recibiendo los datos 


$nombre = $_POST["usuario"];
$contra = $_POST["contra"];
$correo = $_POST["correo"];
$nivel = $_POST["nivel"];
$id= $_POST["id"];


    //este query lista a los usuarios
    $sql = "UPDATE `usuarios` SET `nombre_usuario`= '{$nombre}',`contraseña`='{$contra}',`correo_electronico`='{$correo}',`nivel`='{$nivel}' WHERE id = '{$id}'";
    $query = $GLOBALS['conex']->prepare($sql);
    $query->execute();
    $row = $query->rowCount();
    if ($row === 0) {
        echo json_encode('Insertado');
    }else{
        echo json_encode('No se pudo insertar');
    }
  
?>