<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head><link rel="shortcut icon" href="../Img/icono1.jpg" type="image/x-icon">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carrito de Compras</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/estilos.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Img/icono1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../server.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</head>

    <body class="top-margin" style="
      background-image: url('https://img.freepik.com/vector-gratis/fondo-degradado-azul-simple-negocios_53876-113753.jpg');
      background-size: cover; /* Fills the entire body area */
      background-repeat: no-repeat; /* Image won't repeat itself */
      background-position: center; /* Image starts at the center */
    ">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Volver</a>
            <a class="navbar-brand" href="#">Deporte & Estilo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="../Inicio/logaut.php">Cerrar Sesión</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h1 class="texto">PATY SPORT</h1>
    </div>
    <style>
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

.texto {
    width: 100%;
    color: transparent;
    text-align: center;
    font-size: 100px;
    /* Usar unidades relativas para el tamaño del texto */
    font-weight: bold;

    background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS7q1RtQN_D1_cTtZcIywD9w_Y-qwzfOfjjPEAQpHJac2Z9dweT');
    background-size: cover;
    background-position-y: 300px;

    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    position: relative;
    /* Necesario para posicionar el texto de forma relativa */
    animation: moverTexto 4s ease-in-out infinite;
    /* Aplicar la animación */
    display: inline-block;
    /* Asegura que solo el texto en movimiento se ajuste */
}

@media (max-width: 768px) {
    .texto {
        font-size: 60px;
        /* Ajustar tamaño de fuente para pantallas más pequeñas */
    }

    .hero {
        background-position: center;
    }
}

/*Fin SPORT MOVIBLE*/
    </style>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>

    <div class="nav-container" style="background-color: #f0f0f0;">
        <a href="#" class="nav-link text-info" category="all">Todo</a>
        <?php
        $query = mysqli_query($conexion, "SELECT Nombre FROM categoria");
        while ($data = mysqli_fetch_assoc($query)) { ?>
            <a href="#" class="nav-link" category="<?php echo $data['Nombre']; ?>"><?php echo $data['Nombre']; ?></a>
        <?php } ?>
    </div>

   
  

   
    <style>
        .nav-container {
            display: flex;
            justify-content: center;
            background-color: #f0f0f0;
            padding: 20px;
            flex-wrap: wrap;
        }

        .nav-link {
            font-size: 16px;
            color: black;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px;
        }

        @media (max-width: 600px) {
            .nav-container {
                flex-direction: column;
                align-items: center;
            }

            .nav-link {
                margin: 10px 0;
            }
        }
    </style>
    <body>
    <a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    
    <!-- Header-->
   <script>
   
   
   
   document.addEventListener("DOMContentLoaded", function () {
    const carrito = JSON.parse(localStorage.getItem("carrito")) || []; // Obtener carrito de localStorage
    const btnsAgregar = document.querySelectorAll(".agregar");
    const tblCarrito = document.querySelector("#tblCarrito");
    const totalPagar = document.querySelector("#total_pagar");
    const btnVaciar = document.querySelector("#btnVaciar");

    // Función para actualizar el total a pagar
    const actualizarTotal = () => {
        const total = carrito.reduce((acc, item) => acc + item.precio * item.cantidad, 0);
        totalPagar.textContent = total.toFixed(2);
    };

    // Función para mostrar el carrito
    const mostrarCarrito = () => {
        if (tblCarrito) {
            tblCarrito.innerHTML = "";
            carrito.forEach((item, index) => {
                tblCarrito.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.nombre}</td>
                        <td>$${item.precio.toFixed(2)}</td>
                        <td>${item.cantidad}</td>
                        <td>$${(item.precio * item.cantidad).toFixed(2)}</td>
                    </tr>
                `;
            });
        }
        actualizarTotal();
    };

    // Agregar producto al carrito
    btnsAgregar.forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            const productoID = this.dataset.id;
            const card = this.closest(".card");
            const nombre = card.querySelector(".fw-bolder").textContent;
            const precio = parseFloat(card.querySelector("p").textContent.replace("$", "")) || 0;

            // Verificar si el producto ya está en el carrito
            const productoExistente = carrito.find(item => item.id === productoID);
            if (productoExistente) {
                productoExistente.cantidad += 1;
            } else {
                carrito.push({ id: productoID, nombre, precio, cantidad: 1 });
            }

            localStorage.setItem("carrito", JSON.stringify(carrito)); // Guardar en localStorage

Swal.fire({
    title: '¡Producto Agregado!',
    text: `Producto "${nombre}" fue agregado exitosamente al carrito.`,
    icon: 'success',
    showCancelButton: true,
    confirmButtonText: 'Ver Carrito',
    cancelButtonText: 'Seguir Comprando',
    confirmButtonColor: '#007bff',
    cancelButtonColor: '#28a745',
}).then((result) => {
    if (result.isConfirmed) {
        window.location.href = 'carrito.php'; // Redirigir al carrito (ajusta la URL según tu app)
    }
});

        });
    });

    // Mostrar el carrito en carrito.php
    if (tblCarrito) {
        mostrarCarrito();
    }

    // Vaciar carrito
    if (btnVaciar) {
        btnVaciar.addEventListener("click", function () {
            localStorage.removeItem("carrito");
            carrito.length = 0; // Vaciar array
            mostrarCarrito();
        });
    }
});
</script>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
$query = mysqli_query($conexion, "SELECT p.Nombre, CodigoProducto, Imagen, Stock, precio, Descripcion, c.CodigoCategoría, c.Nombre AS ID_cate FROM producto p INNER JOIN categoria c ON c.CodigoCategoría = p.CategoriaCodigoCategoría");
$result = mysqli_num_rows($query);
if ($result > 0) {
    while ($data = mysqli_fetch_assoc($query)) { ?>
        <div class="col mb-5 productos" category="<?php echo $data['Nombre']; ?>">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo $data['Imagen']; ?>" alt="..." />
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder"><?php echo $data['Nombre'] ?></h5>
                        <p><?php echo $data['Descripcion']; ?></p>
                        <p>$<?php echo number_format($data['precio'], 2); ?></p> 
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['CodigoProducto']; ?>" href="#">Agregar</a></div>
                </div>
            </div>
        </div>
<?php  }
} ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
  
<footer
        style="padding: 20px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #000000; color: #fff; text-align: center;">
        <h2 class="footer2" style="font-size: 17px;">Contacto: Patysport90@gmail.com | Teléfono: 3102283419</h2>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>


</body>
</html>
