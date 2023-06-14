<?php 

include("conexion.php");
//recibiendo los datos 

$id = $_GET["id"]; 
    
    $sql = "DELETE FROM `usuarios` WHERE id = '{$id}' ";
    $query = $GLOBALS['conex']->prepare($sql);
    $query->execute();
    $row = $query->rowCount();
    if ($row === 0) {
        echo 'No se pudo Eliminar';
    }else{
        header("Location: ../crudUsuario.php"); 
    }
  

?>