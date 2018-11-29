<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instaweb</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
    <!-- Menu i Slider -->
    <?php
      require_once ("menu.php");
    ?>

    <!-- Contingut de la pàgina -->
    <div class="container">

      <h1 class="my-4">Bienvenido a Instaweb</h1>

      <!-- Característiques -->
      <div class="row">
        <div class="col-lg-6">
          <p>Plataforma de contenido fotografico.</p>
      </div>
      <!-- Portfolio Section -->

      <div class="row">
        <?php
          require_once("./models/services.php");
          $servicio=new Service();
          $servicios=$servicio->listServices();
          // Ací podem configurar quants serveis volem visualitzar
          for ($i=0; $i<6;$i++)
        ?>
    <!-- Pie de página -->
    <?php
      require_once ("footer.php");
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
