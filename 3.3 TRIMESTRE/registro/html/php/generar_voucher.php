<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factura Electronica</title>
    <link rel="stylesheet" href="../style/stylevoucher.css">
    



</head>
<body>
    
    <form method="post">

    
   <h1>Factura Electronica</h1>
   


    

</div>
    <div class="input-wrapper">
    <input type="text" name="name" placeholder="Nombre">
    
   
    
</div>
<div class="input-wrapper">
    <input type="text" name="lastname" placeholder="Apellido">
  
   
    
</div>


</div>
<div class="input-wrapper">
    <input type="text" name="text" placeholder="Cedula">
  
   
    
</div>

</div>
<div class="input-wrapper">
    <input type="email" name="email" placeholder="Correo Electronico">
  
   
    
</div>

<input class="btn" type="submit" name="register" value="Generar Factura">
<p><a href="../html/indexcarro1.html">Devolverse</a></p>

</form>
<?php
    include("voucher.php");
?>
    
</body>
</html>