<?php

$jsonContenido='[
    {"nombre": "Alejandro", "apellido":"D"},
    {"nombre": "Alejandro2", "apellido":"D2"}
     ]';

     $resultado= json_decode($jsonContenido);
     //print_r($resultado);

     foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
     }

?>