<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $destinatario = 'angeldanielquinteroroa88@gmail.com'; // Coloca aquí tu dirección de correo Gmail
    $asunto = 'Mensaje del formulario de contacto';
    
    // Crea el mensaje a enviar
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo Electrónico: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";
    
    // Envía el correo
    $resultado = mail($destinatario, $asunto, $contenido);
    
    if ($resultado) {
        echo 'Tu mensaje ha sido enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.';
    }
} else {
    echo 'Error: Acceso no permitido.';
}
?>