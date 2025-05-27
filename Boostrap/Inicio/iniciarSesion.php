<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("localhost", "root", "", "paty_sport");
if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Num_Documento = $_POST['Num_Documento'] ?? '';
    $Password = trim($_POST['Password'] ?? '');

    // Validar que los campos no estén vacíos
    if (empty($Num_Documento) || empty($Password)) {
        echo '<script>
            alert("Por favor, completa todos los campos.");
            window.location.href = "InicioSesionIndex.html";
        </script>';
        exit();
    }

    // Consulta para obtener la contraseña desencriptada
    $query = "SELECT AES_DECRYPT(Password, 'LANJ2024') AS PasswordDesencriptada FROM login WHERE Num_Documento = ?";
    $stmt = $mysqli->prepare($query);
    if (!$stmt) {
        echo '<script>
            alert("Error en la consulta a la base de datos.");
            window.location.href = "InicioSesionIndex.html";
        </script>';
        exit();
    }

    $stmt->bind_param("i", $Num_Documento);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($decryptedPassword);
        $stmt->fetch();

        // Verificar si la contraseña ingresada coincide
        if ($Password === $decryptedPassword) {
            $_SESSION['login'] = $Num_Documento;
            echo '<script>
                alert("Inicio de sesión exitoso.");
                window.location.href = "../opciones.php";
            </script>';
        } else {
            echo '<script>
                alert("Contraseña incorrecta. Intenta de nuevo.");
                window.location.href = "InicioSesionIndex.html";
            </script>';
        }
    } else {
        echo '<script>
            alert("Usuario no encontrado.");
            window.location.href = "InicioSesionIndex.html";
        </script>';
    }

    $stmt->close();
}

$mysqli->close();
?>
