<?php include_once("conexioncrud.php");

// Verificar si los campos del formulario existen antes de intentar acceder a ellos
if(isset($_POST['txtnombre'], $_POST['txtcedula'], $_POST['txtfecha'])) {
    $nombre  = $_POST['txtnombre'];
    $cedula  = $_POST['txtcedula'];
    $fecha = $_POST['txtfecha'];

    // No es necesario incluir el campo id si es autoincremental
    mysqli_query($conn, "INSERT INTO devoluciones (nombre, cedula, fecha) VALUES ('$nombre', '$cedula', '$fecha')");

    header("Location: principal.html");
} else {
    echo "Error: Todos los campos del formulario deben ser completados.";
}
?>


?>