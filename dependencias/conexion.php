<?php 

function conexion(){
    $servidor = 'localhost';
    $usuario = 'admin';
    $password = '123Yandari';
    $bd = 'bd_paises';
    $puerto = 3306;

    $conexion = mysqli_connect($servidor, $usuario, $password, $bd, $puerto);


    return $conexion;
}

?>