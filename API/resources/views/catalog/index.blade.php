<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Catálogo - PATY SPORT</title>
    <link rel="stylesheet" href="{{ asset('css/csspaty.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('Img/icono1.jpg') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>


    .btn-warning {
    background-color: #ffffff;
    border-color: #000000;
    border-radius: 15px;
    font-weight: bold;
    padding: 10px 20px;
    color: #000000;
    transition: background-color 0.3s;
}

.btn-warning:hover {
    background-color: #000000;
    border-color: #000000;
    color: #ffffff;
}

/* Sombra sutil y redondeo en las tarjetas */
.card {
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Efecto de hover en las tarjetas */
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Fondo suave en las imágenes */
.card-img-top {
    border-radius: 10px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

/* Efecto de zoom en la imagen al pasar el ratón */
.card:hover .card-img-top {
    transform: scale(1.20);
}


/* Texto en negrita para los nombres de los productos */
.productos {
    font-family: 'Poppins', sans-serif;
    color: #333;
}

/* Estilo para el precio */
.card-text {
    font-size: 1rem;
    color: #002fff;
    font-weight: bold;
}

/* Estilo para la descripción del producto */
.card-text.text-muted {
    font-size: 0.9rem;
    color: #777;
}

/* Agregar margen inferior a los productos */
.producto {
    margin-bottom: 20px;
}

section.py-5 {
        border: 2px solid black; /* Borde negro alrededor del contenedor principal */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* Sombra suave negra */
        border-radius: 10px; /* Esquinas redondeadas para el contenedor */
        padding: 30px; /* Espaciado interno para que no se quede pegado al borde */
    }
   
        .agregar-producto-container {
            border-radius: 25px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            background-color: #f8f9fa;
            margin-top: 30px;
            border-color:  black;
        }
        .card-header {
            color: black;
            height: 35px;
            border-color: #000000;

            
        }
        .form-label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #007bff;
            box-shadow: none;
        }
        .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 10px;
            padding: 10px 15px;
            font-weight: bold;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .col-md-4 {
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Catálogo</a>
            <a class="navbar-brand" href="#">Deporte y estilo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/Boostrap/Inicio/logaut.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h1 class="texto">PATY SPORT</h1>
    </div>

    <div class="nav-container" style="background-color: #f0f0f0;">
    <a href="{{ route('products.indexx') }} " class="nav-link text-info">Todo</a>
    @foreach($categorias as $categoria)
        <a href="{{ route('products.by.category', ['categoryName' => $categoria->Nombre]) }}" 
           class="nav-link" 
           category="{{ $categoria->Nombre }}">
            {{ $categoria->Nombre }}
        </a>
    @endforeach
</div>



<hr>

    <section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Columna de productos (izquierda) -->
            <div class="col-md-8">
                <div class="row">
                    @foreach($products as $producto)
                    <div class="col-md-3 mb-4 producto" data-category="{{ $producto->category->Nombre }}">
                        <div class="card h-100 border-0 shadow-lg rounded-3 hover-shadow">
                        <img src="{{ asset($producto->Imagen) }}" class="card-img-top rounded-3" alt="{{ $producto->Nombre }}">                            <div class="card-body text-center">
                                <h5 class="productos mb-3" style="font-size: 1.2rem; font-weight: bold;">{{ $producto->Nombre }}</h5>
                                <p class="card-text text-muted" style="font-size: 0.9rem;">{{ $producto->Descripcion }}</p>
                                <p class="card-text" style="font-size: 1.1rem; color: #002fff;">${{ number_format($producto->Precio) }}</p>
                                <div class="d-flex flex-column justify-content-center gap-2">
                             <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                             data-bs-target="#updateProductModal{{ $producto->CodigoProducto }}">
                              <i class="fas fa-edit"></i> Actualizar
                             </button>
                              <button type="button" class="btn btn-danger btn-sm" onclick="eliminarProducto({{ $producto->CodigoProducto }})">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </div>
                     </div>
                    </div>
                </div>
                
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function eliminarProducto(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esta accón!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/products/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const productoElemento = document.querySelector(`.producto[data-category] div:has(.btn-danger[onclick="eliminarProducto(${id})"])`).closest('.producto');
                    if (productoElemento) {
                        productoElemento.remove();
                    }
                    Swal.fire(
                        '¡Eliminado!',
                        'El producto ha sido eliminado exitosamente.',
                        'success'
                    );
                } else if (data.message.includes('stock')) {
                    Swal.fire(
                        'No se puede eliminar',
                        'El producto tiene registros de stock y no puede ser eliminado.',
                        'error'
                    );
                } else {
                    Swal.fire(
                        'Error',
                        'No puede realizar esta opcion. Usted ya no cuenta con la debiada Eliminación de este Producto',
                        'error'
                    );
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire(
                    'Error',
                    'Ocurrió un problema al eliminar el producto.',
                    'error'
                );
            });
        }
    });
}
</script>
                        <div class="modal fade" id="updateProductModal{{ $producto->CodigoProducto }}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Actualizar {{ $producto->Nombre }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                   <div class="mb-3">
    <label for="nombre{{ $producto->CodigoProducto }}" class="etiqueta-de-formulario">Nombre</label>
    <input type="text" id="nombre{{ $producto->CodigoProducto }}" class="form-control" name="Nombre" value="{{ $producto->Nombre }}">
</div>
                                      <div class="mb-3">
                                                <label class="form-label">Descripción</label>
                                                <textarea class="form-control" name="Descripcion">{{ $producto->Descripcion }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Precio</label>
                                                <input type="number" class="form-control" name="Precio" value="{{ $producto->Precio }}">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                
         
                <!-- Columna de agregar producto (derecha) -->
                <div class="col-md-4">
                    <hr>
                    <div class="agregar-producto-container">
                        <div class="card-header text-center">
                            <h4 class="card-title">Agregar Producto</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="Nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Descripcion" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="Descripcion" name="Descripcion"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Precio" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="Precio" name="Precio" required>
                                </div>
                                <div class="mb-3">
                                    <label for="IVA" class="form-label">IVA (%)</label>
                                    <input type="number" class="form-control" id="IVA" name="IVA" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Imagen" class="form-label">Imagen</label>
                                    <input type="file" class="form-control" id="Imagen" name="Imagen" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="CategoriaCodigoCategoría" class="form-label">Categoría</label>
                                    <select class="form-select" id="CategoriaCodigoCategoría" name="CategoriaCodigoCategoría" required>
                                        <option value="">Seleccione</option>
                                        @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->CodigoCategoría }}">{{ $categoria->Nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="MarcasCodigoMarca" class="form-label">Marca</label>
                                    <select class="form-select" id="MarcasCodigoMarca" name="MarcasCodigoMarca" required>
                                        <option value="">Seleccione</option>
                                        @foreach($marcas as $marca)
                                        <option value="{{ $marca->CodigoMarca }}">{{ $marca->Nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="TallasCodigoTallas" class="form-label">Talla</label>
                                    <select class="form-select" id="TallasCodigoTallas" name="TallasCodigoTallas" required>
                                        <option value="">Seleccione</option>
                                        @foreach($tallas as $talla)
                                        <option value="{{ $talla->CodigoTallas }}">{{ $talla->Tallas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Num_Documento" class="form-label">Proveedor</label>
                                    <select class="form-select" id="Num_Documento" name="Num_Documento" required>
                                        <option value="">Seleccione</option>
                                        @foreach($usuario as $usuario)
                                        <option value="{{ $usuario->Num_Documento }}">{{ $usuario->Nombres }} {{ $usuario->Apellidos }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success w-100">Agregar Producto</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const addProductForm = document.querySelector('form[action="{{ route('products.store') }}"]');

        if (addProductForm) {
            addProductForm.addEventListener('submit', async function (e) {
                e.preventDefault();

                const formData = new FormData(this);

                try {
                    const response = await fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                    });

                    if (response.ok) {
                        const result = await response.json();

                        // Alerta de éxito con SweetAlert2
                        Swal.fire({
                            title: '¡Éxito!',
                            text: 'Producto agregado con éxito.',
                            icon: 'success',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#a5d6a7',
                            backdrop: `
                                rgba(0,0,0,0.4)
                                url('') 
                                center top
                                no-repeat
                            `,
                        }).then(() => {
                            // Recargar la página para actualizar la lista de productos
                            location.reload();
                        });
                    } else {
                        // Alerta de error con SweetAlert2
                        const error = await response.json();
                        Swal.fire({
                            title: 'Error',
                            text: 'Error al agregar el producto: ' + (error.message || 'Inténtalo de nuevo.'),
                            icon: 'error',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#f44336',
                        });
                    }
                } catch (error) {
                    // Manejar errores de red o del servidor
                    Swal.fire({
                        title: '¡Ups!',
                        text: 'Ocurrió un error inesperado. Por favor, inténtalo más tarde.',
                        icon: 'error',
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#f44336',
                    });
                    console.error('Error:', error);
                }
            });
        }
    });
</script>

    <script>  
        document.addEventListener('DOMContentLoaded', function() {  
            const forms = document.querySelectorAll('[id^="updateForm"]');  
            forms.forEach(form => {  
                form.addEventListener('submit', async function(e) {  
                    e.preventDefault();  
                    const productId = this.id.replace('updateForm', '');  
                    const formData = new FormData(this);  
                    const data = {};  
                    formData.forEach((value, key) => {  
                        if (key !== '_token') { // Excluir token CSRF  
                            data[key] = value;  
                        }  
                    });  
                    try {  
                        const response = await fetch(`/products/${productId}`, {  
                            method: 'PUT',  
                            headers: {  
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,  
                                'Content-Type': 'application/json',  
                                'Accept': 'application/json'  
                            },  
                            body: JSON.stringify(data)  
                        });  
                        const responseData = await response.json();  
                        if (response.ok) {  
                            const modal = bootstrap.Modal.getInstance(document.getElementById(`updateProductModal${productId}`));  
                            modal.hide();  
                            Swal.fire({  
                                title: 'Éxito',  
                                text: 'Producto actualizado correctamente',  
                                icon: 'success'  
                            }).then(() => {  
                                window.location.reload();  
                            });  
                        } else {  
                            throw new Error(responseData.message || 'Error en la actualización');  
                        }  
                    } catch (error) {  
                        console.error('Error de actualización:', error);  
                        Swal.fire({  
                            title: 'Error',  
                            text: error.message || 'No se pudo actualizar el producto',  
                            icon: 'error'  
                        });  
                    }  
                });  
            });  
        });  
    </script>  

    <footer class="bg-dark text-white text-center py-3">  
        <h2 class="footer2" style="font-size: 17px;">Contacto: Patysport90@gmail.com | Teléfono: 3102283419</h2>  
    </footer>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
</body>  
</html>
