<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../PHPMailer/src/Exception.php';
require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';

// Conexión segura a la base de datos con usuario protegido (NO usar root)



// Verificar la conexión
if ($mysqli->connect_errno) {
    die("Error al conectar a la base de datos: " . $mysqli->connect_error);
}

// Limpiar y validar correo
$correo = isset($_POST['correo']) ? trim(strtolower($_POST['correo'])) : '';

if (isset($_POST['submitContact']) && !empty($correo)) {
    // Verificar si el usuario existe y está activo
    $stmtVerifica = $mysqli->prepare("SELECT * FROM usuario WHERE LOWER(TRIM(Correo)) = ? AND EstadoCodigoEstado = 101");
    $stmtVerifica->bind_param("s", $correo);
    $stmtVerifica->execute();
    $resultado = $stmtVerifica->get_result();

    if ($resultado && $resultado->num_rows > 0) {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'patysport90@gmail.com';
           
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('patysport90@gmail.com', 'Paty Sport');
            $mail->addAddress($correo); // Correo del usuario

            // Generar token y fecha de expiración
            $token = bin2hex(random_bytes(16));
            $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

            // Guardar token en base de datos usando JOIN
            $sqlToken = "
                UPDATE login
                INNER JOIN usuario ON login.Num_Documento = usuario.Num_Documento
                SET login.token = ?, login.token_expiry = ?
                WHERE LOWER(TRIM(usuario.Correo)) = ?
            ";
            $stmt = $mysqli->prepare($sqlToken);
            $stmt->bind_param("sss", $token, $expiry, $correo);

            if ($stmt->execute() && $stmt->affected_rows > 0) {
                $url = "http://localhost/Boostrap/Boostrap/Inicio/Restablecer.php?token=$token";

                // Contenido del correo
                $mail->isHTML(true);
                $mail->Subject = 'Recuperar Contraseña';
                $mail->Body = "
                    <h3>Hola, has solicitado recuperar tu contraseña.</h3>
                    <p>Haz clic en el siguiente enlace para restablecer tu contraseña:</p>
                    <a href='$url' target='_blank'>Restablecer mi contraseña</a>
                    <p>Si no solicitaste este cambio, ignora este correo.</p>
                ";

                // Enviar el correo
                $mail->send();

                header("Location: ../Inicio/InicioSesionIndex.html?message=ok");
                exit;
            } else {
                echo "No se pudo actualizar el token. Verifica que el correo sea correcto.";
                exit;
            }
        } catch (Exception $e) {
            echo "El mensaje no pudo ser enviado. Error del Mailer: {$mail->ErrorInfo}";
            exit;
        }
    } else {
        header("Location: ../Inicio/InicioSesionIndex.html?message=Usuario no encontrado");
        exit;
    }
} else {
    echo "Correo no válido o faltante.";
    exit;
}

