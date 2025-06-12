<?php
// Mostrar errores para depuración (puedes quitar esto en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Inicializar la variable $formularioActivo
$formularioActivo = false;

// Validar si se pasó un token por URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar que el token exista y no haya expirado
    $sql = "SELECT u.Num_Documento FROM usuario u INNER JOIN login l ON u.Num_Documento = l.Num_Documento WHERE l.token = ? AND l.token_expiry > NOW()";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 0) {
        $error = "El token es inválido o ha expirado.";
    } else {
        $datos = $resultado->fetch_assoc();
        $Num_Documento = $datos['Num_Documento'];
        $formularioActivo = true;

        // Procesar formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nuevaContrasena = $_POST["nueva_contrasena"];
            $confirmarContrasena = $_POST["confirmar_contrasena"];

            if ($nuevaContrasena !== $confirmarContrasena) {
                $error = "Las contraseñas no coinciden.";
            } else {
                // Actualizar la contraseña cifrada con AES
                $sqlUpdate = "UPDATE login SET Password = AES_ENCRYPT(?, 'LANJ2024'), token = NULL, token_expiry = NULL WHERE Num_Documento = ?";
                $stmtUpdate = $conexion->prepare($sqlUpdate);
                $stmtUpdate->bind_param("si", $nuevaContrasena, $Num_Documento);

                if ($stmtUpdate->execute()) {
                    // Redirigir al login con mensaje de éxito
                    header("Location: ../Inicio/InicioSesionIndex.html?mensaje=Contraseña actualizada correctamente.");
                    exit();
                } else {
                    $error = "Error al actualizar la contraseña.";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <!-- Vincula Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
            border-radius: 1rem;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
        }

        .alert {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="card shadow-sm">
        <div class="card-header">
            Restablecer Contraseña
        </div>
        <div class="card-body">
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <?php if (!empty($mensajeExito)): ?>
                <div class="alert alert-success"><?= $mensajeExito ?></div>
            <?php endif; ?>
            <?php if ($formularioActivo): ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="nueva_contrasena" class="form-label">Nueva Contraseña</label>
                        <input type="password" name="nueva_contrasena" id="nueva_contrasena" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmar_contrasena" class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="confirmar_contrasena" id="confirmar_contrasena" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <!-- Vincula los scripts de Bootstrap 5 desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
