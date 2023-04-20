<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>
<body>
<!-- la diferencia entre el INCLUDE y el REQUIRE es que el INCLUDE si tiene un error mustra un WARNING pero igual muestra la instrucción
En cambio el REQUIRE muestra el WARNING pero no se muestra el fragmento de código -->
<?php require("ejercicio37_1.php"); ?>

<?php require("ejercicio37_1.php"); ?>
<?php require("ejercicio37_1.php"); ?>
<!-- Se muestra dos veces el contenido de 37_1. Para que esto no pase se usa el require_once  --> 
<?php require_once("ejercicio37_1.php"); ?>

</body>
</html>