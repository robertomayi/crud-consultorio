<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><?php echo  $nombre_usuario;?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="crudUsuario.php">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Pacientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LogOut</a>
      </li>
    </ul>
  </div>
</nav>
