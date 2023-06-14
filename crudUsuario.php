<?php
session_start();

include("conexion.php");

if (isset($_SESSION['usuario'])) {
    // El usuario está logeado
    $nombre_usuario = $_SESSION['usuario']; 

    // Aquí puedes mostrar el contenido de la página principal
} else {
    // El usuario no está logeado, redirigir al inicio de sesión
    header('Location: login.php');
    exit();
}

    //este query lista a los usuarios
    $sql = "SELECT * FROM usuarios ";
    $query = $GLOBALS['conex']->prepare($sql);
    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<?php include('template/nabvar.php')?>


    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="text-center">CRUD de Usuarios</h2>
                <hr>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">Agregar Usuario</button>
                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre de Usuario</th>
                            <th>Correo Electrónico</th>
                            <th>Nivel</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($row as $index => $usuario) :?>
                        <tr>
                            <td><?php echo $usuario["id"]?></td>
                            <td><?php echo $usuario["nombre_usuario"] ?></td>
                            <td><?php echo $usuario["correo_electronico"] ?></td>
                            <td><?php echo $usuario["nivel"] ?></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary btnEditarUsuario" data-toggle="modal" data-target="#editUserModal">Editar</button>
                                <a class="btn btn-sm btn-danger" href="api/eliminarUsuario.php?id=<?php echo $usuario["id"]?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Agregar Usuario -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                      <form id="form1" method="post" action="crudUsuario.php">
                        <div class="form-group">
                            <label for="username">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="username" placeholder="Ingrese el nombre de usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="contra">Contraseña</label>
                            <input type="text" class="form-control" id="contra" placeholder="Ingrese el contraseña de usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingrese el correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="nivel">Nombre de Usuario</label>
                        <select name="nivel" id="nivel" class="form-control">
                            <option value="admin">admin</option>
                            <option value="usuario">usuario</option>
                           </select>
                        </div>
                        <a class="btn btn-primary btnCrearUsuario">Agregar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Usuario -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Editar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="form1" method="post" action="crudUsuario.php">
                        <div class="form-group">
                            <label for="usernameEdit">Nombre de Usuario</label>
                            <input type="text" class="form-control usernameEdit"    id="usernameEdit" placeholder="Ingrese el nombre de usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="contraEdit">Contraseña</label>
                            <input type="text" class="form-control contraEdit" id="contraEdit" placeholder="Ingrese Nueva contraseña " required>
                        </div>
                        <div class="form-group">
                            <label for="emailEdit">Correo Electrónico</label>
                            <input type="email" class="form-control emailEdit" id="emailEdit" placeholder="Ingrese el correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="nivelEdit">Nombre de Usuario</label>
                        <select name="nivel" id="nivelEdit" class="form-contro nivelEdit">
                            <option value="admin">admin</option>
                            <option value="usuario">usuario</option>
                           </select>
                        </div>
                        <a class="btn btn-primary btnEditarUsuarioEnviar">Editar</a>
                    </form> 
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Eliminar Usuario -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteUserModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro de que desea eliminar este usuario?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
