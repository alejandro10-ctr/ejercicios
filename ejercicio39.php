<?php
// Crear un archivo de la nada

$nombreArchivo = "archivo.txt";
$contenidoArchivo= "Hola, saludos";

$archivoACrear= fopen($nombreArchivo, "w");  // "w" =>modo escritura

//se llena el contenido:
fwrite($archivoACrear,$contenidoArchivo);

//  hay que cerrarlo prque si no no se lo puede leer
fclose($archivoACrear);




?>