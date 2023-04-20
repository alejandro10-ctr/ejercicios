<?php

session_start();

if (isset($_SESSION["usuario"])){
echo "Usuario: ".$_SESSION["usuario"]."<br/>"."estatus: ".$_SESSION["estatus"];
}else{
echo "No hay datos";
}



?>