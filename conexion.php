<?php
try {
    $conex = new PDO('mysql:host=localhost;dbname=consultorio', 'root', '');
   // echo 'conectado';
    return $conex;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>