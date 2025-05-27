<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carrito de Compras</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="assets/css/styles.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="assets/css/estilos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
    (function(){
        emailjs.init("tu_usuario_de_emailjs");  // Reemplaza con tu ID de usuario de EmailJS
    })();
</script>

    <link rel="shortcut icon" href="../Img/icono1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../server.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    
    <script src="assets/js/scripts.js"></script>
</head>

<body class="top-margin"  style="
  background-image: url('https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
  background-size: cover; /* La imagen llenará completamente el contenedor */
  background-repeat: no-repeat; /* Evita que la imagen se repita */
  background-position: center; /* Centra la imagen */
  width: 100%; /* Asegura que ocupe todo el ancho */
  height: 100vh; /* Ocupa toda la altura de la ventana del navegador */
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
        <h1 class="texto">PATY SPORTtt</h1>
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



/* Estilos generales de los botones */
button {
    font-family: 'Arial', sans-serif;
    font-size: 14px;  /* Tamaño de fuente más pequeño */
    font-weight: bold;
    padding: 8px 15px;  /* Más pequeño y espaciado más suave */
    border-radius: 8px;  /* Bordes redondeados */
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;  /* Efecto de transición */
    outline: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;  /* Centrado del texto */
}

/* Efecto de hover para todos los botones */
button:hover {
    transform: translateY(-3px);  /* Elevar al pasar el cursor */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);  /* Sombra más fuerte */
}

/* Efecto al hacer clic */
button:active {
    transform: translateY(1px);  /* Baja un poco el botón */
}

/* Botón de Actualizar */
#btnActualizarCarrito {
    background-color: #f0ad4e;  /* Color de fondo suave (amarillo) */
    color: white;
}

#btnActualizarCarrito:hover {
    background-color: #ec971f;  /* Amarillo más oscuro */
}

/* Botón de Vaciar */
#btnVaciarCarrito {
    background-color: #d9534f;  /* Color de fondo suave (rojo) */
    color: white;
}

#btnVaciarCarrito:hover {
    background-color: #c9302c;  /* Rojo más oscuro */
}

/* Botón de Eliminar Seleccionados */
#btnEliminarSeleccionados {
    background-color: #f44336;  /* Color de fondo (rojo claro) */
    color: white;
}

#btnEliminarSeleccionados:hover {
    background-color: #e53935;  /* Rojo más intenso */
}

/* Botón de Comprar */
#btnComprar {
    background-color: #28a745;  /* Verde para comprar */
    color: white;
}

#btnComprar:hover {
    background-color: #218838;  /* Verde más oscuro */
}

/* Contenedor de los botones, para organizar los botones en fila */
.d-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* Disposición responsiva de botones */
    gap: 10px;  /* Espacio entre los botones */
    justify-items: center;  /* Alineación central */
    margin-top: 20px;  /* Espacio superior */
}



    </style>
  
  <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                <button class="btn btn-warning" id="btnActualizarCarrito">
                                <i class="bi bi-arrow-clockwise"></i> Actualizar
                            </button>
                            <button class="btn btn-danger" id="btnVaciarCarrito">
                                <i class="bi bi-trash"></i> Vaciar
                            </button>
                            <button class="btn btn-danger" id="btnEliminarSeleccionados">
                                Eliminar Seleccionados
                            </button>
                            <br>
                            <br>
                    <div class="table-responsive" style="
                        background-color: rgba(255, 255, 255, 0.9);
                        border-radius: 10px;
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                        padding: 20px;
                    ">
                        <table class="table table-hover" style="
                            background-color: white;
                            border-radius: 10px;
                            overflow: hidden;
                        ">
                            <thead>
                                <tr style="background-color: #007bff; color: white; text-align: center;">
                                    <th><input type="checkbox" id="select-all" class="form-check-input"></th>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">
                            <?php
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
                                            echo "
                                            <tr id='producto-$id'>
                                                <td><input type='checkbox' class='select-producto' data-id='{$id}'></td>
                                                <td>" . ($index + 1) . "</td>
                                                <td>{$nombre}</td>
                                                <td>$" . number_format($precio, 2) . "</td>
                                                <td>{$cantidad}</td>
                                                <td>$" . number_format($subtotal, 2) . "</td>
                                                <td><button class='btn btn-danger btn-sm eliminar-producto' data-id='{$id}'><i class='bi bi-trash'></i></button></td>
                                            </tr>";
                                        }
                                    }
                                } else {
                                    echo "No hay productos en el carrito.";
                                }
                            ?>
                            </tbody>
                            
                        </table>
                        <div class="col-md-5 ms-auto">
                <h3 class="text-end">Total: $<?php echo number_format($total, 2); ?></h3>
                </div>
                    </div>
                </div>
              
                <script>
    // Seleccionar/Deseleccionar todos los productos al hacer clic en el checkbox del encabezado
document.getElementById("select-all").addEventListener("change", function() {
    const isChecked = this.checked;
    const checkboxes = document.querySelectorAll('.select-producto');
    checkboxes.forEach(checkbox => {
        checkbox.checked = isChecked;
    });
});



// Eliminar los productos seleccionados
document.getElementById("btnEliminarSeleccionados").addEventListener("click", function () {
    // Obtener todos los checkboxes seleccionados
    const selectedProducts = document.querySelectorAll('.select-producto:checked');
    
    selectedProducts.forEach(checkbox => {
        const productoId = checkbox.getAttribute('data-id');
        
        // Eliminar el producto del carrito en localStorage
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito = carrito.filter(producto => producto.id !== productoId);
        localStorage.setItem('carrito', JSON.stringify(carrito));

        // Eliminar la fila del producto de la tabla
        const row = document.getElementById('producto-' + productoId);
        if (row) {
            row.remove();
        }
    });

    // Actualizar el total después de la eliminación
    actualizarTotal();
});




function actualizarTotal() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    let total = 0;
    carrito.forEach(producto => {
        const precio = producto.precio;
        const cantidad = producto.cantidad;
        total += precio * cantidad;
    });
    // Actualizar el total mostrado en la interfaz
    document.querySelector('.text-end').innerHTML = "Total: $" + total.toFixed(2);
}

</script>

                         <style>
        .modal-custom {
            display: none; /* Ocultar inicialmente */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            z-index: 1050;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-custom.active {
            display: block; /* Mostrar cuando sea necesario */
        }

        .modal-header {
            background-color: #ffc107;
            color: #000;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .modal-footer {
            text-align: right;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .modal-body {
            padding: 15px;
        }

        .overlay {
            display: none; /* Ocultar inicialmente */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
        }

        .overlay.active {
            display: block; /* Mostrar cuando sea necesario */
        }
    </style>
</head>

<body>
    <div class="container my-5 text-center">
        <!-- Botón de Comprar -->
        <button id="buyBtn" class="btn btn-primary">Comprar</button>
    </div>
    <div id="orderModal" class="modal-custom">
        <div class="modal-header" style="background-color: #007bff;">
            <h5 class="modal-title">Orden de Compra</h5>
            <button id="closeModalBtn" class="btn-close"></button>
        </div>
        <div class="modal-body">
            <!-- Formulario enviado a Formspree -->
            <form id="contactForm" class="contac" action="https://formspree.io/f/mwpkaaey" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="number" id="phone" name="phone" class="form-control" placeholder="Ingresa tu teléfono" required>
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Detalle: </label>
                    <textarea id="details" name="details" class="form-control" rows="10" readonly style="background-color: #e3f6ff; font-weight: bold; color: #444;"></textarea>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="text" id="total" name="total" class="form-control" readonly>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-success btn-block">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Selecciona el formulario por su ID
        const contactForm = document.getElementById('contactForm');

        // Maneja el evento de envío del formulario
        contactForm.addEventListener('submit', async function (event) {
            event.preventDefault(); // Detiene el envío estándar del formulario

            const formData = new FormData(contactForm);
            const jsonData = Object.fromEntries(formData.entries());

            // Solo necesitamos _replyto
            jsonData._replyto = formData.get("email");

            try {
                const response = await fetch('https://formspree.io/f/mwpkaaey', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(jsonData) // Convierte los datos a JSON
                });

                if (response.ok) {
                    Swal.fire({
                        title: '¡Formulario enviado!',
                        html: `
                            <p>Tu Orden ha sido enviada correctamente a la empresa.</p>
                            <p><i class="fas fa-phone-alt" style="color: #007bff; font-size: 24px;"></i></p>
                            <p>Pronto nos contactaremos contigo para confirmar la compra.</p>
                        `,
                        icon: 'success',
                        confirmButtonText: 'Volver al catálogo',
                    }).then(() => {
                        window.location.href = '../card/index.php'; // Redirige al catálogo
                    });

                    contactForm.reset(); // Limpia el formulario
                } else {
                    throw new Error('Error en la respuesta del servidor');
                }
            } catch (error) {
                Swal.fire({
                    title: 'Error',
                    text: 'No se pudo enviar el formulario. Verifica tu conexión o inténtalo más tarde.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar',
                });
                console.error('Error:', error);
            }
        });
    </script>
</body>





                <script>
        
        const $form = document.querySelector('#form')

        $form.addEventListener('submit', handleSubmit)

       async function handleSubmit(event) {
event.preventDefault()
const form = new FormData(this)
const response = await fetch(this.action, {
    method: this.method,
    body: form,
    headers: {
        'Accept': 'application/json'
        }
        })
        if (response.ok) {
            $this.reset()
            alert('¡Gracias por contacterte con nosotros!, te contestaremos pronto.')
        }
}
    </script>
            </form>
        </div>
    </div>
</body>
    
    




<script>
    const buyBtn = document.getElementById('buyBtn');
const closeModalBtn = document.getElementById('closeModalBtn');
const orderModal = document.getElementById('orderModal');
const overlay = document.getElementById('overlay');
const detailsField = document.getElementById('details');
const totalField = document.getElementById('total');

// Llenar detalles del carrito
const fillDetails = () => {
    const carrito = localStorage.getItem('carrito');
    if (carrito) {
        const productos = JSON.parse(carrito);
        let detalles = 'Productos en el carrito: ' ;
       

        productos.forEach((producto, index) => {
            console.log(producto); 
            
        });

        detailsField.value = `  <?php
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
                                            echo "
                                                {$nombre}
                                                $" . number_format($precio, 2) . "
                                                {$cantidad}
                                               $" . number_format($subtotal, 2) . "
                                            ";
                                        }
                                    }
                                } else {
                                    echo "No hay productos en el carrito.";
                                }
                                ?>`;
        totalField.value = `$<?php echo number_format($total, 2); ?>`;
    } else {
        detailsField.value = 'El carrito está vacío.';
        totalField.value = '$0.00';
    }
};

// Mostrar modal
buyBtn.addEventListener('click', () => {
    fillDetails();
    orderModal.classList.add('active');
    overlay.classList.add('active');
});

// Cerrar modal
closeModalBtn.addEventListener('click', () => {
    orderModal.classList.remove('active');
    overlay.classList.remove('active');
});

// Enviar formulario


</script>






    <!-- Overlay de fondo -->
    <div id="overlay" class="overlay"></div>


                        
                    </div>
                </div>
            </div>
        </div>
    </section>



   

<script>
    document.getElementById("btnComprar").addEventListener("click", function () {
        const carrito = localStorage.getItem("carrito");
        if (carrito) {
            fetch("http://localhost:4000/sendEmail", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ carrito: JSON.parse(carrito) })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Tu pedido está listo. Pronto recibirás un correo con el resumen.");
                    localStorage.removeItem("carrito");
                } else {
                    alert("Error al enviar el correo: " + data.message);
                }
            })
            .catch(error => {
                console.error("Error:", error);
                alert("Ocurrió un error al intentar enviar el correo.");
            });
        } else {
            alert("El carrito está vacío.");
        }
    });
</script>






    <script>
        document.getElementById("btnActualizarCarrito").addEventListener("click", function () {
            const carrito = localStorage.getItem("carrito");
            if (carrito) {
                const form = document.createElement("form");
                form.method = "POST";

                const input = document.createElement("input");
                input.type = "hidden";
                input.name = "carrito";
                input.value = carrito;

                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
            }
        });

        document.getElementById("btnVaciarCarrito").addEventListener("click", function () {
            if (confirm("¿Estás seguro de que deseas vaciar el carrito?")) {
                localStorage.removeItem("carrito");
                document.getElementById("tblCarrito").innerHTML = "No hay productos en el carrito.";
                document.querySelector(".text-end").innerHTML = "Total: $0.00"; // Actualizar el total a 0
            }
        });
    </script>


</body>
    
<footer
        style="padding: 20px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #000000; color: #fff; text-align: center; position:relative">
        <h2 class="footer2" style="font-size: 17px;">Contacto: Patysport90@gmail.com | Teléfono: 3102283419</h2>
    </footer>

</html>