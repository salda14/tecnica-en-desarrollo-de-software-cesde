<?php

//Parámetros que necesita la conexión

$servidor='localhost';
$usuario='root';
$clave='';
$basededatos='login';

$conexion= new mysqli($servidor,$usuario,$clave,$basededatos);

if($conexion->connect_errno)
{
    echo "Nuestra conexión a la base de datos presenta fallas";
    exit();
}
?>