
<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "paty_sport");

if ($mysqli->connect_errno) {
    die("Error al conectar: " . $mysqli->connect_error);
}

$datosUsuario = null;

if (isset($_SESSION['login'])) {
    $documento = $_SESSION['login'];
    $consulta = "SELECT Nombres, Apellidos, Correo, Teléfono FROM usuario WHERE Num_Documento = ?";
    $stmt = $mysqli->prepare($consulta);
    $stmt->bind_param("i", $documento);
    $stmt->execute();
    $stmt->bind_result($nombres, $apellidos, $correo, $telefono);
    if ($stmt->fetch()) {
        $datosUsuario = [
            'nombre_completo' => "$nombres $apellidos",
            'correo' => $correo,
            'telefono' => $telefono
        ];
    }
    $stmt->close();
}

$mysqli->close();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="Img/icono1.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="estilos.css">
    <title>Inventario - PATY SPORT</title>
</head>


<!-- Inicio de encabezado-->



</div>

        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="">Inventario</a>
                <a class="navbar-brand" href="#">Deporte & Estilo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./Inicio/logaut.php">Cerrar Sesión</a>
                        </li>
                        
                    </ul>

                </div>
            </div>
        </nav>


        <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen de Fondo con Texto</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Evita el desplazamiento */
        }

        .wave-container {
            position: relative;
            width: 100vw; /* Ancho completo de la ventana */
            height: 50vh; /* Altura de la mitad de la ventana */
            overflow: hidden; /* Oculta la parte de la imagen que sale del contenedor */
            clip-path: polygon(0 100%, 50% 70%, 100% 100%, 100% 0, 0 0); /* Forma de ola */
            background-image: url(https://www.finaleinventory.com/wp-content/uploads/2021/11/obsolete-inventory-manage.jpg);
            background-size: cover; /* Llena el contenedor */
            background-repeat: no-repeat; /* No repetir la imagen */
            background-position: center; /* Centra la imagen */
        }



        
.texto2 {

/* Inico PATY SPORT MOVIBLE*/

@keyframes moverTexto {
    0% {
        transform: translateX(-20%);
        /* Inicia en el lado izquierdo */
    }

    50% {
        transform: translateX(0);
        /* Se detiene en el centro */
    }

    100% {
        transform: translateX(20%);
        /* Se mueve hacia el lado derecho */
    }
}


   

    </style>
</head><body class="">
    <div class="wave-container">
        <div class="hero">
           <!-- <h1 class="texto2" style="color: white;  width: 100%;
    color: transparent;
    text-align: center;
    font-size: 50px;
    font-weight: bold;
    margin-top: -500;

    background-image: url('https://images.unsplash.com/photo-1604147706283-d7119b5b822c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZvbmRvJTIwYmxhbmNvJTIwbGlzb3xlbnwwfHwwfHx8MA%3D%3D');
    background-size: cover;
    background-position-y: 300px;

    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    position: relative;
    /* Necesario para posicionar el texto de forma relativa */
    animation: moverTexto 4s ease-in-out infinite;
    display: inline-block;">Bienvenido!</h1> -->
        </div>
    </div>
    <div style="flex-grow: 1; text-align: center; margin-top: -70px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-color: green; border-radius: 15px; padding: 15px 20px;">
        <i class="fas fa-user-tie" style="color: white; font-size: 1.5rem;"></i>
        </button>
</div>
<hr style="border: none; height: 3px; background: linear-gradient(to right, transparent, black, transparent); width: 30%; margin: 30px auto 10px; box-shadow: 0 0 10px black;" />


</body>

</html>

<?php
$nombre = $_SESSION['nombre'] ?? 'Usuario desconocido';
$correo = $_SESSION['correo'] ?? 'correo@ejemplo.com';
$telefono = $_SESSION['telefono'] ?? '0000000000';
?>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background: linear-gradient(135deg, #a3c1e6, #ffffff);">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-center" id="offcanvasNavbarLabel" style="font-family: 'Poppins', sans-serif; color: black; font-size: 2rem; font-weight: bold; text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);">Administrador</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: #1e3a8a;"></button>
  </div>
  <center>
    <div class="text-center">
      <img src="https://cdn.icon-icons.com/icons2/38/PNG/512/administrator_4960.png" class="rounded-circle shadow-lg" style="width: 250px; height: 240px; border: 5px solid #1e3a8a;" alt="...">
    </div>
  </center>
  <div class="offcanvas-body" style="margin-top: 40px;">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
      


<li class="nav-item">
  <a class="nav-link active" aria-current="page" href="#" style="font-family: 'Roboto', sans-serif; color: black;">
    <i class="fas fa-user-tie"></i>
    <?php echo $datosUsuario['nombre_completo'] ?? 'Nombre no disponible'; ?>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link" href="mailto:<?php echo $datosUsuario['correo'] ?? '#'; ?>" style="font-family: 'Roboto', sans-serif; color: black;">
    <i class="fas fa-envelope"></i>
    <?php echo $datosUsuario['correo'] ?? 'Correo no disponible'; ?>
  </a>
</li>


<li class="nav-item">
  <a class="nav-link" href="tel:<?php echo $datosUsuario['telefono'] ?? '#'; ?>" style="font-family: 'Roboto', sans-serif; color: black;">
    <i class="fas fa-phone"></i>
    <?php echo $datosUsuario['telefono'] ?? 'Teléfono no disponible'; ?>
  </a>
</li>

      <!-- Panel de Administración -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-family: 'Roboto', sans-serif; color: black;">
          <i class="fas fa-cog"></i> Panel de Administración
        </a>
        <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
          <li><a class="dropdown-item" href="Controlador/ControladorUsuario.php" style="color: black;"><i class="fas fa-users-cog"></i> Gestión de Usuarios</a></li>
          <li><a class="dropdown-item" href="Controlador/ControladorProductos.php" style="color: black;"><i class="fas fa-database"></i> Gestión de Productos</a></li>
          <li><hr class="dropdown-divider"></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

    <!--Fin de PATY SPORT en movimiento-->
<br>
<br>
<br>
<br>
<br><div class="row justify-content-center" style="margin-top: -100px;">
    <div class="col-md-10">
        <center>
            <div class="card-body text-center">
                <ul class="list-unstyled d-flex justify-content-center flex-row">
                    <li class="menu-item">
                        <a href="Controlador/ControladorUsuario.php" class="btn btn-primary menu-button"  
                           style="border-radius: 25px; padding: 15px; background-color: #5bc0de; border: none; transition: background-color 0.3s, transform 0.3s; color: #000000; margin-right: 5px;">
                            <i class="fas fa-users" style="margin-right: 10px; color: #000000;"></i> Usuarios
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Controlador/ControladorProductos.php" class="btn btn-primary menu-button" 
                           style="border-radius: 25px; padding: 15px; background-color: #5bc0de; border: none; transition: background-color 0.3s, transform 0.3s; color: #000000; margin-right: 5px;">
                            <i class="fas fa-box" style="margin-right: 10px; color: #000000;"></i> Productos
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Controlador/ControladorIngreso.php" class="btn btn-primary menu-button" 
                           style="border-radius: 25px; padding: 15px; background-color: #5bc0de; border: none; transition: background-color 0.3s, transform 0.3s; color: #000000; margin-right: 5px;">
                            <i class="fas fa-ticket-alt" style="margin-right: 10px; color: #000000;"></i> Ticket de Entrada
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="Controlador/ControladorSalida.php" class="btn btn-primary menu-button" 
                           style="border-radius: 25px; padding: 15px; background-color: #5bc0de; border: none; transition: background-color 0.3s, transform 0.3s; color: #000000;">
                            <i class="fas fa-ticket-alt" style="margin-right: 10px; color: #000000;"></i> Ticket de Salida
                        </a>
                    </li>
                </ul>
            </div>
            <hr style="border: none; height: 5px; background: linear-gradient(to right, transparent, black, transparent); width: 50%; margin: 20px auto 10px; box-shadow: 0 0 10px black;" />
            </center>
    </div>                
</div>



        

            <!--.row-->

            <footer
                style="margin-top: 50px; padding: 20px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #000000; color: #fff;  text-align: center;">
                <h2 class="footer2" style="font-size: 17px; ">Contacto: Patysport69@gmail.com | Teléfono: 3102283419
                </h2>
            </footer>


            <script>
                function scrollToSection(id) {
                    document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
                }

                let currentSlide = 0;
                const slides = document.querySelectorAll('.slides img');
                const totalSlides = slides.length;

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.style.display = i === index ? 'block' : 'none';
                    });
                }

                function nextSlide() {
                    currentSlide = (currentSlide + 1) % totalSlides;
                    showSlide(currentSlide);
                }

                setInterval(nextSlide, 5000); // Cambia de imagen cada 3 segundos
                showSlide(currentSlide);
            </script>

</html>



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>