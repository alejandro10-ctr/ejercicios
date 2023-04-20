<?php
// Abrbir archivos 

//archivo:
$archivo="contenido.txt";
//abrimos el archivo en modo lectura
$archivoAbierto= fopen($archivo,"r");
//leemos el contenido de ese archivo y lo contenemos en la variable
$contenido=fread($archivoAbierto, filesize($archivo));
//imprimo
echo $contenido;

?>