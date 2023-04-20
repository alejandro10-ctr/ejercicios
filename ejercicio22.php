<?php


// $frutas=array("fresa", "pera", "manzana");
// se puede cambiar el índice
$frutas=array("f"=>"fresa", "p"=>"pera", "m"=>"manzana");

print_r($frutas);

echo $frutas["m"]."<br/>"; // => "manzana"

foreach($frutas as $indice=>&$valor){

    echo $indice."<br/>";

    echo "El valor ".$valor." tiene el índice ".$indice."<br/>";
    // echo $frutas[$indice]."<br/>";

}


?>