<?php
session_start();     // Verificar sesión
session_unset();     // Inhabilitar sesión
session_destroy();   // Cerrar sesión
?>
<!DOCTYPE html> <!-- Declaración agregada -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesión Cerrada</title> <!-- Etiqueta <title> agregada -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<script>
    Swal.fire({
        icon: 'info',
        title: 'Sesión cerrada correctamente',
        text: '¡Vuelve pronto!',
        showConfirmButton: true,
        confirmButtonText: "Cerrar", // corregido: estaba mal escrito como "confirmbuttontext"
    }).then(function () {
        window.location = "../index.html";
    });
</script>
</body>
</html>
