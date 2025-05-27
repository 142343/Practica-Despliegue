<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("localhost", "root", "", "paty_sport");
if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

// Variables para almacenar los datos del formulario
$Tipo_Documento = $_POST["Tipo_Documento"];
$Num_Documento = $_POST["Num_Documento"];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Teléfono = $_POST["Teléfono"];
$Correo = $_POST["Correo"];
$RolidRol = 25;
$EstadoCodigoEstado = 101;
$GeneroidGenero = $_POST["GeneroidGenero"];
$Password = $_POST["Password"]; // Contraseña en texto plano ingresada por el usuario

// Validar que no haya campos vacíos
if (empty($Tipo_Documento) || empty($Num_Documento) || empty($Nombres) || empty($Apellidos) || empty($Teléfono) || empty($Correo) || empty($GeneroidGenero) || empty($Password)) {
    echo json_encode(["error" => "Todos los campos son obligatorios"]);
    exit();
}


// Prepara la consulta SQL para insertar en la tabla 'usuario'
$sqlUsuario = "INSERT INTO usuario (Tipo_Documento, Num_Documento, Nombres, Apellidos, Teléfono, Correo, RolidRol, EstadoCodigoEstado, GeneroidGenero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmtUsuario = mysqli_prepare($mysqli, $sqlUsuario);
mysqli_stmt_bind_param($stmtUsuario, "sissisiii", $Tipo_Documento, $Num_Documento, $Nombres, $Apellidos, $Teléfono, $Correo, $RolidRol, $EstadoCodigoEstado, $GeneroidGenero);

// Ejecuta la consulta para la tabla usuario
if (mysqli_stmt_execute($stmtUsuario)) {
    // Registro de usuario exitoso, ahora registrar en la tabla 'login'
    $sqlLogin = "INSERT INTO login (Num_Documento, Password) VALUES (?, AES_ENCRYPT(?, 'LANJ2024'))";
    $stmtLogin = mysqli_prepare($mysqli, $sqlLogin);
    mysqli_stmt_bind_param($stmtLogin, "is", $Num_Documento, $Password);

    if (mysqli_stmt_execute($stmtLogin)) {
        // Registro exitoso en ambas tablas
        echo '<html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Usuario registrado",
                    text: "¡Registro exitoso! Redirigiendo a la página de inicio de sesión...",
                    showConfirmButton: false,
                    timer: 2000
                }).then(function() {
                    window.location = "InicioSesionIndex.html";
                });
            </script>
        </body>
        </html>';
    } else {
        echo '<html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error al registrar en login",
                    text: "Error al registrar en la tabla login: ' . mysqli_error($mysqli) . '",
                    showConfirmButton: true
                }).then(function() {
                    window.location = "Registrate.html";
                });
            </script>
        </body>
        </html>';
    }

    mysqli_stmt_close($stmtLogin);
} else {
    echo '<html>
    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: "error",
                title: "Error al registrar",
                text: "Error al registrar el usuario: ' . mysqli_error($mysqli) . '",
                showConfirmButton: true
            }).then(function() {
                window.location = "Registrate.html";
            });
        </script>
    </body>
    </html>';
}

mysqli_stmt_close($stmtUsuario);
mysqli_close($mysqli);
?>
