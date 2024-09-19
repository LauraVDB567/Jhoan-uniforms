<?php include_once("conexion.php"); 
    $id =$_POST['txtid'];
    $nombre  =$_POST['txtnombre'];
    $cedula  =$_POST['txtcedula'];
    $fecha =$_POST['txtfecha'];

mysqli_query($conn, "INSERT INTO  usuarios_crud(nom,correo,tel) values('$id',$nombre','$cedula','$fecha')");

header("Location:index.php");


?>