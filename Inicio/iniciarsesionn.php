<?php
// Mostrar todos los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("localhost", "root", "", "paty_sport");
if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

session_start(); // Iniciar sesión

// Verifica que el formulario haya sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturar los datos del formulario
    $documento = $_POST['Num_Documento'];
    $Password = $_POST['Password'];
    echo "<br>";
    echo "<br>";

    // Consulta para obtener la contraseña encriptada y el rol del usuario
    $query = "SELECT AES_DECRYPT(l.`Password`, 'LANJ2024') AS contrasena, u.RolidRol FROM login l JOIN usuario u ON u.Num_Documento = l.Num_Documento WHERE l.Num_Documento = ? ";
    $stmt = $mysqli->prepare($query);
    
    if (!$stmt) {
        die("Error en la consulta: " . $mysqli->error); // Mostrar error de la consulta si falla
    }

    $stmt->bind_param("i", $documento); // 'i' porque es un entero
    $stmt->execute();
    $stmt->store_result();

    // Si el número de documento existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($contrasena, $RolidRol);
        $stmt->fetch();

        // Verificar si la contraseña desencriptada coincide
        if ($Password === $contrasena) {
            // Credenciales correctas, iniciar sesión
            $_SESSION['login'] = $documento;
            $_SESSION['rol'] = $RolidRol; // Almacenar el rol en la sesión

            if ($RolidRol == 21) {
                // este como empleado lo redirige al panel de espera
                ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sesión iniciada',
                        text: 'Bienvenido Empleado',
                        showConfirmButton: true,
                        confirmButtonText: "Aceptar"
                    }).then(function () {
                        window.location = "../Controlador/ControladorSalidaEmpleado.php"; // Redirigir al panel de administración
                    });
                </script>
                <?php
            } elseif ($RolidRol == 22) {
                // Si es admin lo manda al panel del admin 
                ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sesión iniciada',
                        text: 'Bienvenido Administrador',
                        showConfirmButton: true,
                        confirmButtonText: "Aceptar"
                    }).then(function () {
                        window.location = "../Opciones.php"; // Redirigir al panel del admin 
                    });
                </script>
                <?php
            }
            elseif ($RolidRol == 23) {
                // Si es propietario lo deja accder a todo 
                ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sesión iniciada',
                        text: 'Bienvenido Propietario',
                        showConfirmButton: true,
                        confirmButtonText: "Aceptar"
                    }).then(function () {
                        window.location = "../Opciones.php"; 
                    });
                </script>
                <?php
            }
            elseif ($RolidRol == 24) {
                // Si es proveedor, redirigir al panel de Proveedor
                ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sesión iniciada',
                        text: 'Bienvenido Proveedor',
                        showConfirmButton: true,
                        confirmButtonText: "Aceptar"
                    }).then(function () {
                        window.location = "http://127.0.0.1:8000/products"; // Redirigir al panel de Proveedor
                    });
                    
                </script>
                  </script>
                <?php
            }
            elseif ($RolidRol == 25) {
                // Si es Usuario lo redirigue al panel de espera 
                ?>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Sesión iniciada',
                        text: 'Bienvenido Usuario',
                        showConfirmButton: true,
                        confirmButtonText: "Aceptar"
                    }).then(function () {
                        window.location = "../espera.html"; 
                    });
                    
                </script>
                <?php
            }


        } else {
            // Contraseña incorrecta
            ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Contraseña incorrecta',
                    showConfirmButton: true,
                    confirmButtonText: "Devolver"
                }).then(function () {
                    window.location = "../Inicio/InicioSesionIndex.html";
                });
            </script>
            <?php
        }
    } else {
        // Documento no encontrado
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Usuario no encontrado',
                text: 'El documento no está registrado',
                showConfirmButton: true,
                confirmButtonText: "Devolver"
            }).then(function () {
                window.location = "../Inicio/InicioSesionIndex.html";
            });
        </script>
        <?php
    }

    $stmt->close();
}

$mysqli->close();

?>
