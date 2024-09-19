    <?php
    include_once("conexioncrud.php");
    include_once("indexcrud.php");

    $codigo = $_GET['cod'];

    $querybuscar = mysqli_query($conn, "SELECT * FROM devoluciones WHERE cod=$codigo");

    while($mostrar = mysqli_fetch_array($querybuscar))
{
    $id = $mostrar['id'];
    $nombre = $mostrar['nombre'];
    $cedula= $mostrar['cedula'];
    $fecha = $mostrar['fecha'];
}
?>
<html>
    <head>
        <title>CRUD</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
    <form method="POST" class="contenedor_popup">
        <table>
            <tr><th colspan="2">modificar usuarios</th></tr>
            <tr>
             <td>id</td>
             <td><input type="text" name="txtcodigo" value="<?php echo $id;?>" required ></td>
</tr>
<tr>
 <td>nombre</td>
 <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
</tr>
<tr>
    <td>cedula</td>
    <td><input type="text" name="txtcorreo" value="<?php echo $cedula;?>" required></td>
</tr>
<tr>
    <td>$fecha</td>
    <td><input type="text" name="txttelefono" value="<?php echo $fecha;?>" required></td>
</tr>
<tr>

     <td colspan="2">
        <a href="index.php">cancelar</a>
        <input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>

<?php

if(isset($_POST['btnmodificar']))
{
    $codigo1 = $_POST['txtid'];

    $nombre1  =$_POST['txtnombre'];
    $correo1  =$_POST['txtcedula'];
    $telefono1 =$_POST['txtfecha'];

    $querymodificar = mysqli_query($conn, "UPDATE crud SET nom='$nombre1',cedula='$cedula1',fecha='$fecha1' WHERE id=$id1");

    echo "<script>window.location= 'index.php' </script>";

}
?>
    