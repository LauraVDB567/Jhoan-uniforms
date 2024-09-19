<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../style/style5.css">
    



</head>
<body>
    
    <form method="post">

    
   <h1>Registro</h1>
   


   <div class="input-wrapper">
    <input type="text" name="name" placeholder="Nombre">
    <img class="input-icon" src="../imagenes/name.svg" alt="">
    
</div>

<div class="input-wrapper">
    <input type="text" name="lastname" placeholder="Apellido">
    <img class="input-icon" src="../imagenes/name.svg" alt="">
    
</div>
<div class="input-wrapper">
    <input type="email" name="email" placeholder="Correo">
    <img class="input-icon" src="../imagenes/email.svg" alt="">
    
</div>
<div class="input-wrapper">
    <input type="password" name="password" placeholder="Contraseña">
    <img class="input-icon" src="../imagenes/password.svg" alt="">
    
</div>

<input class="btn" type="submit" name="register" value="Registarse">
<p><a href="../html/iniciosesion1.html">¿Ya tienes una cuenta?</a></p>


</form>

<?php
    include("../php/registrar1.php");
?>

    
</body>
</html>