<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","","basedatos1");

$consulta="SELECT*FROM usuarios where correo='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){
    include("../php/indexcrud.php");

}else
if($filas['id_cargo']==2){
include("../html\indexcarro1.html");
}
else{
    ?>
    <?php
    include("../html/iniciosesion1.html");
    ?>
    <h1 class="error">Este usuario o contraseña no son correctas</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
