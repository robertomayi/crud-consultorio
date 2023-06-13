<?php
session_start();

//var_dump($_POST);

include("conexion.php");

// Verificar si el usuario ya está logeado
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $nombre_usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '{$nombre_usuario}' AND contraseña = '{$contrasena}'";
    $query = $GLOBALS['conex']->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

    // Realizar la verificación de las credenciales (aquí debes agregar tu lógica de autenticación)
    if ($results) {
        // Credenciales correctas, iniciar sesión y redirigir al usuario
        $_SESSION['usuario'] = $nombre_usuario;
        header('Location: index.php');
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        $mensaje_error = 'Credenciales incorrectas';
        
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página de inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Iniciar sesión</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="login.php">
                            <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
