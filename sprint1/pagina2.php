<html>
<head>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="css/full.css" rel="stylesheet">

</head>
<body>
<a class = "inicios" href="/Instaweb/index.html">Menu principal</a>
<?php

echo ("<p> El teu nom es: ".$_REQUEST["Usuario"]."</p>");
echo ("<p> El teu coreo es: ".$_REQUEST["Email"]."</p>");
echo ("<p> La teua contraseña es: ".$_REQUEST["password"]."</p>");
?>
</body>
</html>