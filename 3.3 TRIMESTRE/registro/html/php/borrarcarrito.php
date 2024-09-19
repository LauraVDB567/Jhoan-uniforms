<?php session_star();
header("location:" $_SERVER['HTTP-REFERER']."");
unset($_SESSION['carrito']);
?>