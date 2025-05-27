<?php
//patysport90@gmail.com
//q f b d w v r h r a d k v j b y
// Mostrar todos los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("localhost", "root", "", "paty_sport");
if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

$correo = $_POST['correo'];
$sql = "SELECT * FROM `usuario` WHERE correo = '$correo' AND `EstadoCodigoEstado` = 101;";
$resultado = $mysqli->query($sql);

$total = 0;
if (isset($_POST['carrito'])) {
    $carrito = json_decode($_POST['carrito'], true);
    foreach ($carrito as $index => $producto) {
        $id = $producto['id'];
        $cantidad = $producto['cantidad'];
        $query = mysqli_query($conexion, "SELECT Nombre, precio FROM producto WHERE CodigoProducto = '$id'");
        $data = mysqli_fetch_assoc($query);
        if ($data) {
            $nombre = $data['Nombre'];
            $precio = $data['precio'];
            $subtotal = $precio * $cantidad;
            $total += $subtotal;

        }
    }
} else {
    echo "No hay productos en el carrito.";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'patysport90@gmail.com';                     //SMTP username
    $mail->Password   = 'qfbdwvrhradkvjby';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption ENCRYPTION_SMTPS
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::`

    //Recipients
    $mail->setFrom('patysport90@gmail.com', 'Paty Sport');
    if ($resultado && $resultado->num_rows > 0) {
        // Si se encuentra el correo en la base de datos, añadirlo como destinatario
        $mail->addAddress($correo);  // Se añade el correo del usuario
    } else {
        header("Location: ../Inicio/InicioSesionIndex.html?message=Usuario no encontrado");
        exit;
    }


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Orden de compra';
    $mail->Body = 'Tu orden de compra es: <tr id="producto-' . $id . '">
    <td><input type="checkbox" class="select-producto" data-id="' . $id . '"></td>
    <td>' . ($index + 1) . '</td>
    <td>' . $nombre . '</td>
    <td>$' . number_format($precio, 2) . '</td>
    <td>' . $cantidad . '</td>
    <td>$' . number_format($subtotal, 2) . '</td>
    <td><button class="btn btn-danger btn-sm eliminar-producto" data-id="' . $id . '"><i class="bi bi-trash"></i></button></td>
</tr>';


    $mail->send();
    header("Location: ../Boostrap/card/index.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
