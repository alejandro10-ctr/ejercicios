<?php


$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

//para que me deje leer
$opciones= array("ssl"=>array("verify_peer"=> false, "verify_peer_name"=> false));

//para descativar las restricciones del https y permite leer el contenido, lo almacenamos
$respuesta=file_get_contents($url, false, stream_context_create($opciones));
//lo decodificamos
$objRespuesta=json_decode($respuesta);

//print_r($objRespuesta);

foreach($objRespuesta->list as $video){

    //print_r($video->title);
    //print_r($video->channel);

}
//Mostramos el contenido en una lista

?>

<ul>
    <?php
    foreach($objRespuesta->list as $video) {  ?>
           
           <li>  <?php echo ($video->title);   ?> | <?php echo ($video->channel); ?> </li>
    <?php } ?>
   
</ul>