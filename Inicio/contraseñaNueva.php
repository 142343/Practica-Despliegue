<?php
// CONFIGURA ESTOS DATOS CON TU HOSTING REAL
$host = "sqlXXX.tuhosting.com";            // Host remoto, NO "localhost"
$usuario_db = "usuario_tu_bd";
$contrasena_db = "Tu_Clave_Segura_2025!";
$nombre_db = "nombre_tu_bd";

// Conexión segura a la base de datos
$mysqli = new mysqli($host, $usuario_db, $contrasena_db, $nombre_db);
if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

// Procesar formulario solo si llega por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar y limpiar entradas
    $documento = $_POST['Num_Documento'] ?? '';
    $nueva_contrasena = $_POST['Password'] ?? '';

    if (empty($documento) || empty($nueva_contrasena)) {
        echo "Documento y contraseña son obligatorios.";
        exit;
    }

    $llave_cifrado = 'LANJ2024'; // Clave de cifrado (mantener segura)

    // Preparar la consulta SQL con seguridad
    $stmt = $mysqli->prepare("UPDATE login SET Password = AES_ENCRYPT(?, ?), token = NULL, token_expiry = NULL WHERE Num_Documento = ?");
    $stmt->bind_param("sss", $nueva_contrasena, $llave_cifrado, $documento);

    if ($stmt->execute()) {
        header("Location: ../Inicio/contrasena_nueva.php?message=okay");
        exit;
