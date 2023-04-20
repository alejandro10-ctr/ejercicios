<?php

$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contraseña="";

try{

    $conexion= new PDO("mysql:host=$servidor;dbname=album", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql= "SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado);

    foreach($resultado as $foto){
        print_r($foto);
        // o si quiero los nombres nomas =>     echo $foto['nombre']."<br/>";
    }

    echo "Conexión establecida";

}catch(PDOException $error){
    echo "Conexión erronea".$error;
}




?>