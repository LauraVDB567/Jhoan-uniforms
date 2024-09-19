<?php

session_star();
include "con_db.php";


$correo=$_POST['correo'];
$contraseña =$_POST['contraseña']:



$stnt=$conexion->prepare("SELECT correo,contraseña id_cargo FROM basedatos WHERE inicio=")

$stnt->bind_param("s",$usuario);
$stnt->execute();
$result = $stnt->get_result();


if ($result->num_rows >0){
    $row=$result->fetch_assoc();
    $hast_clave=$row['contraseña'];

    if (password_verify($clave, $hash_clave)){
        $_SESSION['usuario']=$usuario;
        $_SESSION['id_cargo']=$row ['id_cargo'];

        header("Location/registro_/iniciosesion.php");    
        exit();
   
    } else{

    header("Location/registro_/iniciosesion.php?error=1");    
    exit();
    }

}else{
    header("Location/registro_/iniciosesion.php?error=1");
    exit();
}






