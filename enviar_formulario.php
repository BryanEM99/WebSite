<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo electrónico a la que se enviará el mensaje
    $destinatario = "tucorreo@example.com";

    // Asunto del correo electrónico
    $asunto_email = "Nuevo mensaje de formulario de contacto";

    // Construir el cuerpo del mensaje
    $cuerpo_email = "Nombre: $nombre\n";
    $cuerpo_email .= "Email: $email\n";
    $cuerpo_email .= "Teléfono: $telefono\n";
    $cuerpo_email .= "Asunto: $asunto\n";
    $cuerpo_email .= "Mensaje: $mensaje\n";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto_email, $cuerpo_email)) {
        echo "¡Gracias por contactarnos! Su mensaje ha sido enviado correctamente.";
    } else {
        echo "Lo siento, hubo un error al enviar su mensaje. Por favor, inténtelo de nuevo más tarde.";
    }
} else {
    // Si se accede al script directamente sin enviar datos del formulario, redirigir al formulario de contacto
    header("Location: index.html");
}
?>