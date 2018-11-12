<html>
<head>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
<link href="css/full.css" rel="stylesheet">

</head>
<body>
<?php
echo ("<p> El teu nom es: ".$_REQUEST["Usuario"]."</p>");
echo ("<p> El teu cooreu es: ".$_REQUEST["Email"]."</p>");
echo ("<p> la teua contraseña es: ".$_REQUEST["password"]."</p>");
?>
</body>
</html>