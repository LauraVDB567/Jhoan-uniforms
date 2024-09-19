<?php
include_once("conexion.php");

$cod =  $_GET['id'];

mysqli_query($conn, "DELETE FROM crud WHERE id=$id");

header("Location:index.php");

?>