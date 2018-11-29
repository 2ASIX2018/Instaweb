<?php
session_start();

if (isset($_COOKIE['Instaweb-User'])) { $_SESSION['username'] = $_COOKIE['Instaweb-User'];}
if (isset($_COOKIE['Instaweb-Role'])) { $_SESSION['role'] = $_COOKIE['Instaweb-Role'];}
?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Instaweb</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <ul class="navbar-nav ml-auto">
        <?php
          if (isset($_SESSION['role']) && $_SESSION['role']=="user") {
        ?>
        <?php
          }
          if (isset($_SESSION['role']) && $_SESSION['role']=="admin") {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="admin.php"><button type="button" class="btn btn-success btn-sm">Administrar</button></a>
          </li>
        <?php
          }
          if (!isset($_SESSION['username'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><button type="button" class="btn btn-secondary btn-sm">Iniciar sesion</button></a>
          </li>
        <?php
          }
          else {
        ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><button type="button" class="btn btn-danger btn-sm">Desconectar</button></a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link" href="galeria.php"><button type="button" class="btn btn-danger btn-sm">Mi Galeria</button></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="subir.php"><button type="button" class="btn btn-secondary btn-sm">Subir</button></a>
          </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>