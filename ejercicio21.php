<?php

$frutas=array("fresa", "pera", "manzana");

print_r($frutas)."<br/>";

echo $frutas[1]."<br/>"; // => "pera"

for($indice=0; $indice < 3; $indice++){
    
    echo $frutas[$indice]."<br/>";
     
}

?>