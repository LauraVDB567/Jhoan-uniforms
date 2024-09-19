<?php

$host ="localhost";
$user="root";
$password="";


$db="basedatos1";


$conexion=mysqli_connect($host, $user, $password, $db);

if (!$con){
    echo "Conexion fallida";
}