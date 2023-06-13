<?php
session_start();

// Destruir la sesión
session_destroy();

// Redirigir al usuario al inicio de sesión o a otra página
header('Location: login.php');
exit();
?>
