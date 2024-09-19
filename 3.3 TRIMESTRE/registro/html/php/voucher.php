<?php

include("form.php");



if (isset($_POST['register'])){

    
        
    if(
     strlen($_POST['name'])>= 1 &&
     strlen($_POST['lastname'])>= 1

    )
      {

         $name = trim($_POST['name']);
         $lastname = trim($_POST['lastname']);
         $consulta="INSERT INTO voucher(nombre, apellido) 
         VALUES ('$name', '$lastname')";

         $resultado= mysqli_query($conex, $consulta);
         if ($resultado){
             ?>
             <h4 class="success"> Te has registrado correctamente</h4>
             <?php
         } else {
             ?>
             <h3 class="error"> Ocurrio un error al momento de registarse</h3>
             <?php
         }


         } else{
             ?>
             <h3 class="error">Llenar todos los campos requeridos por el registro</h3>
             <?php
         }


     }



?>