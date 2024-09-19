<?php
$conn  = new mysqli("localhost","root","", "basedatos1");

     if($conn->connect_error)
     {
        echo "no hay conexion: (" . $conn->connect_error . ") ". $conn->connect_error;

     }
    ?>