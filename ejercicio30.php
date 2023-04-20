<?php

session_start();

$_SESSION["usuario"]="ale10";
$_SESSION["estatus"]="logueado";

echo "Sesión iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/>"."estatus: ".$_SESSION["estatus"];




?>