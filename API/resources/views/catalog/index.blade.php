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
        /* Estilos generales aquí */
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
    <a href="{{ route('products.indexx') }}" class="nav-link text-info">Todo</a>
    @foreach($categorias as $categoria)
        <a href="{{ route('products.by.category', ['categoryName' => $categoria->Nombre]) }}" class="nav-link" category="{{ $categoria->Nombre }}">
            {{ $categoria->Nombre }}
        </a>
    @endforeach
</div>
<hr>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @foreach($products as $producto)
                    <div class="col-md-3 mb-4 producto" data-category="{{ $producto->category->Nombre }}">
                        <div class="card h-100 border-0 shadow-lg rounded-3 hover-shadow">
                            <img src="{{ asset($producto->Imagen) }}" class="card-img-top rounded-3" alt="{{ $producto->Nombre }}">
                            <div class="card-body text-center">
                                <h5 class="productos mb-3">{{ $producto->Nombre }}</h5>
                                <p class="card-text text-muted">{{ $producto->Descripcion }}</p>
                                <p class="card-text">${{ number_format($producto->Precio) }}</p>
                                <div class="d-flex flex-column justify-content-center gap-2">
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal{{ $producto->CodigoProducto }}">
                                        <i class="fas fa-edit"></i> Actualizar
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="eliminarProducto({{ $producto->CodigoProducto }})">
                                        <i class="fas fa-trash-alt"></i> Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de actualización -->
                    <div class="modal fade" id="updateProductModal{{ $producto->CodigoProducto }}" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Actualizar {{ $producto->Nombre }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('products.update', $producto->CodigoProducto) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="nombre{{ $producto->CodigoProducto }}" class="form-label">Nombre</label>
                                            <input type="text" id="nombre{{ $producto->CodigoProducto }}" class="form-control" name="Nombre" value="{{ $producto->Nombre }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="descripcion{{ $producto->CodigoProducto }}" class="form-label">Descripción</label>
                                            <textarea id="descripcion{{ $producto->CodigoProducto }}" class="form-control" name="Descripcion">{{ $producto->Descripcion }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="precio{{ $producto->CodigoProducto }}" class="form-label">Precio</label>
                                            <input type="number" id="precio{{ $producto->CodigoProducto }}" class="form-control" name="Precio" value="{{ $producto->Precio }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Columna de agregar producto -->
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
                                <input type="text" name="Nombre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Descripcion" class="form-label">Descripción</label>
                                <textarea name="Descripcion" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="Precio" class="form-label">Precio</label>
                                <input type="number" name="Precio" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Imagen" class="form-label">Imagen</label>
                                <input type="file" name="Imagen" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('¡Eliminado!', 'El producto ha sido eliminado exitosamente.', 'success').then(() => location.reload());
                } else {
                    Swal.fire('Error', data.message || 'No se pudo eliminar el producto.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire('Error', 'Ocurrió un problema al eliminar el producto.', 'error');
            });
        }
    });
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
