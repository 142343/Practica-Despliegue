<?php
// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "paty_sport");
if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $documento = $_POST['Num_Documento'];
    $nueva_contrasena = $_POST['Password'];
    $llave_cifrado = 'LANJ2024'; // Asegúrate de usar una clave de cifrado segura y consistente

    // Actualizar la contraseña en la tabla `login` usando AES_ENCRYPT
    $sql = "UPDATE login
            SET Password = AES_ENCRYPT('$nueva_contrasena', '$llave_cifrado'), 
                token = NULL, 
                token_expiry = NULL 
            WHERE Num_Documento = '$documento'";

    if ($mysqli->query($sql)) {
        header("Location: ../Inicio/contrasena_nueva.php?message=okay");
    } else {
        echo "Error al actualizar la contraseña: " . $mysqli->error;
    }
}
