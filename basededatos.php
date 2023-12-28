<?php

$servidor= "localhost"; 
$BaseDeDatos="appmedica";
$usuario="root";
$contrasenia= "";
try {
    $conexion= new PDO("mysql:host:$servidor;dbname:$BaseDeDatos", $usuario,$contrasenia);
}catch(Exception $ex){
    echo $ex->getMessage();
}


?>