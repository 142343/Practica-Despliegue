<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="shortcut icon" href="../Img/icono1.jpg" type="../Img/icono1.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="../estilos.css">
</head>

<body>

    <body style="
      background-image: url('https://img.freepik.com/vector-gratis/fondo-degradado-azul-simple-negocios_53876-113753.jpg');
      background-size: cover; /* Fills the entire body area */
      background-repeat: no-repeat; /* Image won't repeat itself */
      background-position: center; /* Image starts at the center */
    ">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-size: 1.7rem; font-family: 'Poppins', sans-serif;">Inventario de Productos</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Opciones.php">← Atras</a>
                            <a class="nav-link active" aria-current="page" href="../Inicio/logaut.php">Cerrar sesión</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Barra de herramientas</title>
            <link rel="stylesheet" href="styles.css">

        </head>

        <body>
            <div class="sidebar">
                <!-- Imagen redonda en la parte superior -->
                <div class="profile-image">
                    <img src="../Img/icono1.jpg" alt="Perfil">
                </div>
                <a href="../Controlador/ControladorUsuario.php"><i class="fas fa-user"></i> <span class="icon-text"></span></a>
                <a href="../Controlador/ControladorProductos.php"><i class="fas fa-boxes"></i> <span class="icon-text"></span></a>
                <a href="../Controlador/ControladorIngreso.php"><i class="fas fa-plus-circle"></i> <span class="icon-text"></span></a>
                <a href="../Controlador/ControladorSalida.php"><i class="fas fa-minus-circle"></i> <span class="icon-text"></span></a>
            </div>
        </body>

    </body>

</html>
<style>
    .sidebar {
        width: 200px;
        background-color: #323232;
        color: white;
        padding-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .profile-image {
        width: 40px;
        height: 40px;
        overflow: hidden;
        border-radius: 50%;
        margin-bottom: 350px;
    }

    .profile-image img {
        width: 100%;
        height: auto;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        padding: 10px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .sidebar a:hover {
        background-color: #444;
        display: flex;
        flex-direction: column;
        padding: 10px;
        background-color: transparent;
    }



    .sidebar {
        width: 60px;
        height: 100vh;
        background-color: #333;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }


    .sidebar a i {
        margin-right: 10px;
        font-size: 16px;
        color: #fff;
    }

    .sidebar a:hover i {
        color: #e0e0e0;
    }


    .navbar {
        left: 50px;
        width: calc(100% - 50px);
        height: 100%;
        border: 2px solid #000;
        border-radius: 0;

    }


    /* Barra lateral completa hasta arriba */
    .sidebar {
        height: 100%;
        width: 50px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #1C1C1C;
        z-index: 999;
        padding-top: 0px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .sidebar a {
        color: white;
        padding: 10px 0;
        text-align: center;
        text-decoration: none;
        display: block;
    }

    /* Contenido principal */
    .content {
        margin-left: 60px;
        margin-top: 40px;
    }

    .containeer {
        position: relative;
        left: 50%;
        transform: translateX(-55%);
        width: calc(100% - 100px);
        max-width: 1200px;
        height: auto;
        border: 0px solid #000;
        border-radius: 0;
        padding: 15px;
        box-sizing: border-box;
    }
</style>


<!-- Fin de encabezado-->
<br>

    <div class="breadcrumbs shadow-1">
        <div class="container-o">
            <div class="row" style="background-color: #FFFFFFFF;">
                <i class="material-icons"> Estas aquí:</i>
                <ul>
                    <li><a href="../Controlador/ControladorProductos.php">Inv.Productos</a></li>
            </div>
        </div>
    </div><!-- Contenedor principal más pequeño -->
    <!-- Contenedor principal más pequeño -->
    <div class="container mt-3" style="
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 5px;
  background-color: rgba(233, 233, 233, 0.99);
  padding: 8px;
  border-radius: 5px;
  margin: auto;
  max-width: 600px;
  border: 1px solid #000;
  font-size: 13px;
  height: 90px;
  overflow: auto;
">
        <!-- Formulario de búsqueda -->
        <div style="position: relative; display: inline-block;">
            <form action="../Controlador/ControladorProductos.php" method="post" style="display: flex; align-items: center;">
                <i class="fas fa-box" style="position: absolute; left: 8px; top: 50%; transform: translateY(-50%); color: #6c757d;"></i>
                <input class="form-control"
                    style="width: 250px;  padding-left: 30px; padding-right: 40px; border-radius: 5px; border: 1px solid #ced4da;"
                    type="number" name="CodigoProducto" placeholder="Código Producto" required>
                <button style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); background-color: #4A90E2; color: white; border-radius: 5px; padding: 5px 8px; border: none; font-size: 13px;"
                    type="submit" name="Acciones" value="Buscar Producto">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <br>

        <!-- Botón Agregar Producto -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal" style="padding: 5px 10px; font-size: 13px;">
            <i class="bi bi-plus-square-dotted"></i> Agregar Producto
        </button>

        <!-- Botón Opciones con modal emergente -->
        <button class="btn btn-primary" style="padding: 5px 10px; font-size: 13px;"
            data-bs-toggle="modal" data-bs-target="#optionsModal">
            <i class="fas fa-cog"></i> Opciones
        </button>
    </div>

    <!-- Modal para Opciones -->
    <div class="modal fade" id="optionsModal" tabindex="-1" aria-labelledby="optionsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #f8f9fa;">
                <div class="modal-header">
                    <h5 class="modal-title" id="optionsModalLabel">Opciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body d-grid gap-2">
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addModall">
                        <i class="fas fa-tshirt"></i> Agregar Categoría
                    </button>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addModalll">
                        <i class="fas fa-ruler"></i> Agregar Talla
                    </button>
                    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addModallll">
                        <i class="fas fa-tag"></i> Agregar Marca
                    </button>
                </div>
            </div>
        </div>
    </div>


    <?php if (isset($productosEncontrados) && !empty($productosEncontrados)): ?>
        <br>
        <form action="../Controlador/ControladorProductos.php" method="post">
            <button class="btn btn-primary mb-3" type="submit" name="Acciones" value="Refrescar tabla">Refrescar</button>
        </form>
        <h3 style="color: black; font-size: 13px; text-align: center; margin-top: 20px; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
            Resultados:
        </h3>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Codigo Producto</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>IVA</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Descripción</th>
                        <th>Marca</th>
                        <th>Talla</th>
                        <th>Proveedor</th>
                        <th>Actualizar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productosEncontrados as $producto): ?>
                        <tr>
                            <td><?= !empty($producto['CodigoProducto']) ? htmlspecialchars($producto['CodigoProducto']) : 'No registra' ?></td>
                            <td><?= !empty($producto['Nombre']) ? htmlspecialchars($producto['Nombre']) : 'No registra' ?></td>
                            <td><?= isset($producto['Precio']) && $producto['Precio'] !== '' ? '$' . htmlspecialchars(number_format($producto['Precio'])) : 'No registra' ?></td>
                            <td><?= !empty($producto['Stock']) ? htmlspecialchars($producto['Stock']) : 'No registra' ?></td>
                            <td><?= !empty($producto['IVA']) ? htmlspecialchars($producto['IVA']) : 'No registra' ?></td>
                            <td><?= !empty($producto['categoria']) ? htmlspecialchars($producto['categoria']) : 'No suministra' ?></td>
                            <td><?= !empty($producto['estado']) ? htmlspecialchars($producto['estado']) : 'No suministra' ?></td>
                            <td><?= !empty($producto['Descripcion']) ? htmlspecialchars($producto['Descripcion']) : 'No registra' ?></td>
                            <td><?= !empty($producto['marcas']) ? htmlspecialchars($producto['marcas']) : 'No registra' ?></td>
                            <td><?= !empty($producto['tallas']) ? htmlspecialchars($producto['tallas']) : 'No registra' ?></td>
                            <td><?= !empty($producto['Nombres']) ? htmlspecialchars($producto['Nombres']) : 'No registra' ?></td>

                            <td>
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal<?= $producto['CodigoProducto'] ?>">Editar</button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php elseif (isset($errorMensaje)): ?>
        <div class="alert alert-warning"><?php echo $errorMensaje; ?></div>
    <?php endif; ?>



    <br>
    <br>


    <div style="flex-grow: 1; text-align: center;  margin-top: -20px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-color: black;  border-radius: 15px; padding: 15px 20px;">
            <i class="fas fa-user-tie" style="color: white; font-size: 1.5rem;"></i>
        </button>
    </div>





    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background: linear-gradient(135deg, #a3c1e6, #ffffff);">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-center" id="offcanvasNavbarLabel" style="font-family: 'Poppins', sans-serif; color: black; font-size: 2rem; font-weight: bold; text-shadow: 0 0 10px rgba(0, 0, 0, 0.7);">Administrador</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: #1e3a8a;"></button>
        </div>
            <div class="text-center">
                <img src="https://cdn.icon-icons.com/icons2/38/PNG/512/administrator_4960.png" class="rounded-circle shadow-lg" style="width: 250px; height: 240px; border: 5px solid #1e3a8a;" alt="...">
            </div>
                <div class="offcanvas-body" style="margin-top: 40px;">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <!-- Nombre del Administrador -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="font-family: 'Roboto', sans-serif; color: black;">
                                <i class="fas fa-user-tie"></i> Viviana Escobar Cortes
                            </a>
                        </li>
                        <!-- Correo -->
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:viviana0631@gmail.com" style="font-family: 'Roboto', sans-serif; color: black;">
                                <i class="fas fa-envelope"></i> viviana0631@gmail.com
                            </a>
                        </li>
                        <!-- Teléfono -->
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+123456789" style="font-family: 'Roboto', sans-serif; color: black;">
                                <i class="fas fa-phone"></i> +123456789
                            </a>
                        </li>
                        <!-- Panel de Administración -->
                        <li class="nav-item dropdown">
                             <a 
  class="nav-link dropdown-toggle" 
  href="#" 
  id="offcanvasNavbarDropdown" 
  role="button" 
  data-bs-toggle="dropdown" 
  aria-expanded="false" 
  style="font-family: 'Roboto', sans-serif; color: black;" 
  onkeydown="if (event.key === 'Enter') this.click();"
>Panel de Administrador
</a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#" style="color: black;"><i class="fas fa-users-cog"></i> Gestión de Usuarios</a></li>
                                <li><a class="dropdown-item" href="#" style="color: black;"><i class="fas fa-database"></i> Gestión de Datos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#" style="color: black;"><i class="fas fa-shield-alt"></i> Seguridad</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .container-fluid {
            padding: -30px;
        }

        /* Panel y cabecera - más compacto */
        .panel {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            overflow: hidden;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .panel-header {
            background-color: #FACDEBF1;
            padding: 10px 15px;
            border-bottom: 1px solid #e6e6e6;
        }

        .panel-title {
            font-size: 19px;
            font-weight: 600;
            color: #333;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .panel-title i {
            margin-right: 8px;
            color: #64ABEC;
        }

        .panel-content {
            padding: 15px;
        }

        /* Tabla mejorada - Versión compacta */
        .table-responsive {
            overflow: auto;
            border-radius: 6px;
            max-height: 450px;
            width: 85%;
            margin: 0 auto;
        }

        .table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 13px;
        }

        .table thead th {
            background: linear-gradient(to bottom, #FACDEBF1, #f8c1e0);
            position: sticky;
            top: 0;
            z-index: 10;
            color: #333;
            font-weight: 600;
            padding: 6px 8px;
            border: none;
            text-align: center;
            white-space: nowrap;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table tbody tr {
            transition: all 0.2s ease;
            height: 38px;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .table tbody tr:hover {
            background-color: #f0f7ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .table td {
            padding: 5px 8px;
            vertical-align: middle;
            border-top: 1px solid #eef0f5;
            color: #333;
        }

        /* Estados y roles */
        .pending {
            color: #007bff;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .pending i {
            font-size: 14px;
        }

        /* Botones - más pequeños */
        .btn {
            font-weight: 500;
            padding: 3px 8px;
            border-radius: 3px;
            transition: all 0.3s ease;
            font-size: 12px;
        }

        .btn-sm {
            padding: 2px 6px;
            font-size: 11px;
        }

        .btn-warning {
            background-color: #64ABEC;
            border-color: #64ABEC;
            color: white;
        }

        .btn-warning:hover {
            background-color: #4a99e9;
            border-color: #4a99e9;
            box-shadow: 0 2px 5px rgba(100, 171, 236, 0.2);
            transform: translateY(-1px);
        }

        /* Modal personalizado */
        .custom-modal .modal-content {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .custom-modal .modal-header {
            background-color: #FACDEBF1;
            padding: 15px 20px;
            border-bottom: 2px solid #f8c1e0;
        }

        .custom-modal .modal-title {
            font-weight: 600;
            color: #333;
        }

        .custom-modal .modal-body {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.8));
            padding: 20px;
        }

        .custom-modal .form-label {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .custom-modal .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .custom-modal .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15);
            border-color: #64ABEC;
            box-shadow: 0 0 0 3px rgba(100, 171, 236, 0.25);
        }

        .custom-modal .btn-primary {
            background-color: #64ABEC;
            border-color: #64ABEC;
            padding: 8px 24px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .custom-modal .btn-primary:hover {
            background-color: #4a99e9;
            border-color: #4a99e9;
            box-shadow: 0 4px 10px rgba(100, 171, 236, 0.3);
        }

        /* Mensajes de estado */
        .no-records {
            text-align: center;
            padding: 30px;
            color: #6c757d;
            font-style: italic;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .table {
                font-size: 13px;
            }

            .btn {
                padding: 4px 10px;
                font-size: 12px;
            }
        }
    </style>
    <div class="container-fluid">
        <!-- Panel de Gestión de Productos -->
        <div class="panel mt-4">
            <div class="panel-header">
                <h5 class="panel-title">
                    <i class="fas fa-boxes"></i> Gestión de Productos
                </h5>
            </div>
            <div class="panel-content">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th><i class="fas fa-barcode fa-sm"></i> Código</th>
                                <th><i class="fas fa-tag fa-sm"></i> Nombre</th>
                                <th><i class="fas fa-dollar-sign fa-sm"></i> Precio</th>
                                <th><i class="fas fa-boxes fa-sm"></i> Stock</th>
                                <th><i class="fas fa-percent fa-sm"></i> IVA</th>
                                <th><i class="fas fa-list fa-sm"></i> Categoría</th>
                                <th><i class="fas fa-toggle-on fa-sm"></i> Estado</th>
                                <th><i class="fas fa-align-left fa-sm"></i> Descripción</th>
                                <th><i class="fas fa-industry fa-sm"></i> Marca</th>
                                <th><i class="fas fa-ruler fa-sm"></i> Talla</th>
                                <th><i class="fas fa-user fa-sm"></i> Proveedor</th>
                                <th><i class="fas fa-edit fa-sm"></i> Actualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($resultado) && $resultado->num_rows > 0): ?>
                                <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($fila['CodigoProducto']) ?></td>
                                        <td><?= htmlspecialchars($fila['Nombre']) ?></td>
                                        <td>$<?= number_format($fila['Precio']) ?></td>
                                        <td>
                                            <?= ($fila['Stock'] !== null && $fila['Stock'] !== '') ? htmlspecialchars($fila['Stock']) : '<span class="text-primary fw-bold"><i class="fas fa-info-circle"></i> Pendiente</span>' ?>
                                        </td>
                                        <td><?= htmlspecialchars($fila['IVA']) ?></td>
                                        <td><?= htmlspecialchars($fila['categoria']) ?></td>
                                        <td>
                                            <?php if (isset($fila['estado']) && $fila['estado'] !== ''): ?>
                                                <?php
                                                $estado = strtolower(trim($fila['estado']));
                                                switch ($estado) {
                                                    case 'activo':
                                                        echo '<span class="badge bg-danger" style="padding: 5px 10px; font-size: 12px;">Activo</span>';
                                                        break;
                                                    case 'inactivo':
                                                        echo '<span class="badge bg-secondary" style="padding: 5px 10px; font-size: 12px;">Inactivo</span>';
                                                        break;
                                                    case 'agotado':
                                                        echo '<span class="badge bg-primary" style="padding: 5px 10px; font-size: 12px;">Agotado</span>';
                                                        break;
                                                    default:
                                                        echo '<span class="badge bg-secondary" style="padding: 5px 10px; font-size: 12px;">' . htmlspecialchars($fila['estado']) . '</span>';
                                                        break;
                                                }
                                                ?>
                                            <?php else: ?>
                                                <span class="text-primary fw-bold"><i class="fas fa-info-circle"></i> Pendiente</span>
                                            <?php endif; ?>
                                        </td>

                                        <td><?= htmlspecialchars($fila['Descripcion']) ?></td>
                                        <td><?= htmlspecialchars($fila['marcas']) ?></td>
                                        <td><?= htmlspecialchars($fila['tallas']) ?></td>
                                        <td><?= htmlspecialchars($fila['Nombres']) ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?= $fila['CodigoProducto'] ?>">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>



                                    <!-- Modal para actualizar producto -->
                                    <div class="modal fade" id="updateModal<?= $fila['CodigoProducto'] ?>" tabindex="-1"
                                        aria-labelledby="updateModalLabel<?= $fila['CodigoProducto'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" style="max-width: 35%; margin: 5rem auto;">
                                            <div class="modal-content" style="background: rgba(0, 0, 0, 0.6) center; background-size: cover; color: #fff;">
                                                <div class="modal-header" style="background-color:  #FACDEBF1; color: #000000FF;">
                                                    <h5 class="modal-title">Actualizar Producto - ID: <?= $fila['CodigoProducto'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../Controlador/ControladorProductos.php" method="post">
                                                        <input type="hidden" name="CodigoProducto" value="<?= $fila['CodigoProducto'] ?>">
                                                        <div class="mb-3">
  <label for="nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombre</label>
  <input type="text" id="nombre" name="Nombre" class="form-control" required 
         style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                                
                                                        </div>
                                                        <div class="mb-3">
                                                             <label for="nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Precio</label>
  <input type="text" id="nombre" name="Nombre" class="form-control" required 
         style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                                        </div>



                                                        <div class="mb-3">
                                                             <label for="nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Iva</label>
  <input type="text" id="nombre" name="Nombre" class="form-control" required 
         style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                                        </div>
                                                        <div class="mb-3">
                                                             <label for="nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Categoría</label>
  <input type="text" id="nombre" name="Nombre" class="form-control" required 
         style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">

                                                                <?php foreach ($categorias as $categoria): ?>
                                                                    <option value="<?= $categoria['CodigoCategoría']; ?>" <?= ($categoria['Nombre'] == $fila['categoria'] ? 'selected' : '') ?>>
                                                                        <?= $categoria['Nombre']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>



                                                        <div class="mb-3">
                                                              <label for="nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Estado</label>
  <input type="text" id="nombre" name="Nombre" class="form-control" required 
         style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">

                                                                <?php foreach ($estados as $estado): ?>
                                                                    <option value="<?= $estado['CodigoEstado']; ?>" <?= ($estado['tipoEstado'] == $fila['estado'] ? 'selected' : '') ?>>
                                                                        <?= $estado['tipoEstado']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                           
                                                            <textarea class="form-control" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;" name="Descripcion"
                                                                required><?= $fila['Descripcion'] ?></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            
                                                            <select name="MarcasCodigoMarca" id="MarcasCodigoMarca" class="form-control"
                                                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">

                                                                <?php foreach ($marcas as $marca): ?>
                                                                    <option value="<?= $marca['CodigoMarca']; ?>" <?= ($marca['Nombre'] == $fila['marcas'] ? 'selected' : '') ?>>
                                                                        <?= $marca['Nombre']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Talla</label>
                                                            <select name="TallasCodigoTallas" id="TallasCodigoTallas" class="form-control"
                                                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                                                <?php foreach ($tallas as $talla): ?>
                                                                    <option value="<?= $talla['CodigoTallas']; ?>" <?= ($talla['Tallas'] == $fila['tallas'] ? 'selected' : '') ?>>
                                                                        <?= $talla['Tallas']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Proveedor</label>
                                                            <select name="Num_Documento" id="Num_Documento" class="form-control"
                                                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">

                                                                <?php foreach ($usuarios as $usuario): ?>
                                                                    <option value="<?= $usuario['Num_Documento']; ?>" <?= ($usuario['Nombres'] == $fila['Nombres'] ? 'selected' : '') ?>>
                                                                        <?= $usuario['Nombres']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary" name="Acciones"
                                                            value="ActualizarProducto" style="background-color: #64ABEC; border-color: #64ABEC; padding: 0.6rem; font-size: 0.9rem;">Actualizar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Aquí se mantiene el modal como ya lo tienes (no es necesario repetir todo aquí) -->
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="12">No se encontraron productos.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>











    <!-- Modal para agregar producto -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" style="max-width: 40%; margin: 1rem auto;">
            <div class="modal-content rounded-3 shadow-lg" style="background: rgba(0, 0, 0, 0.6) center; background-size: cover; color: #fff;">
                <div class="modal-header" style="background-color:  #FACDEBF1; color: #000000FF;">
                    <h5 class="modal-title" id="addModalLabel">Agregar Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/ControladorProductos.php" method="post" enctype="multipart/form-data">
                        <!-- Nombre Producto (solo letras) -->
                        <div class="mb-3 d-flex align-items-center">
                            <label for="Nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombre Producto</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="Nombre" name="Nombre" type="text"
                                required pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ ]{1,50}" title="Solo letras y espacios"
                                oninput="this.value = this.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ ]/g, '')"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                        </div>

                        <!-- Precio Producto (solo números y punto) -->
                        <div class="mb-3 d-flex align-items-center">
                            <label for="Precio" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Precio Producto</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="Precio" name="Precio" type="number" step="0.01"
                                required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/^0+(?!\.|$)/, '')"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                        </div>

                        <!-- IVA (solo números y punto) -->
                        <div class="mb-3 d-flex align-items-center">
                            <label for="IVA" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">IVA</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="IVA" name="IVA" type="number" step="0.01"
                                required oninput="this.value = this.value.replace(/[^0-9.]/g, '')"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                        </div>

                        <!-- Imagen -->
                        <div class="mb-3 d-flex align-items-center">
                            <label for="Imagen" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Imagen</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="Imagen" name="Imagen" type="file"
                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;"
                                accept="image/*" onchange="previewImage(event)">
                        </div>
                        <img id="imagePreview" src="" alt="Vista previa" style="display:none; max-width: 150px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); margin-top: 10px;">

                        <script>
                            function previewImage(event) {
                                const imagePreview = document.getElementById('imagePreview');
                                imagePreview.src = URL.createObjectURL(event.target.files[0]);
                                imagePreview.style.display = 'block';
                            }
                        </script>

                        <br>

                        <!-- Categoria -->
                        <div class="mb-3 d-flex align-items-center">
                            <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Categoria</label>
                            <select name="CategoriaCodigoCategoría" id="CategoriaCodigoCategoría" class="form-control border-primary rounded-3 shadow-sm"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                <option value="">Seleccione Categoria...</option>
                                <?php foreach ($categorias as $categoria): ?>
                                    <option value="<?= $categoria['CodigoCategoría']; ?>"><?= $categoria['Nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Estado -->
                        <div class="mb-3 d-flex align-items-center">
                            <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Estado</label>
                            <select name="EstadoCodigoEstado" id="EstadoCodigoEstado" class="form-control border-primary rounded-3 shadow-sm"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                <option value="">Seleccione Estado...</option>
                                <?php foreach ($estados as $estado): ?>
                                    <option value="<?= $estado['CodigoEstado']; ?>"><?= $estado['tipoEstado']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Descripcion -->
                        <div class="mb-3 d-flex align-items-center">
                            <label for="Descripcion" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Descripcion</label>
                            <textarea class="form-control border-primary rounded-3 shadow-sm" id="Descripcion" name="Descripcion" required
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;"></textarea>
                        </div>

                        <!-- Marcas -->
                        <div class="mb-3 d-flex align-items-center">
                            <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Marcas</label>
                            <select name="MarcasCodigoMarca" id="MarcasCodigoMarca" class="form-control border-primary rounded-3 shadow-sm"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                <option value="">Seleccione Marca...</option>
                                <?php foreach ($marcas as $marca): ?>
                                    <option value="<?= $marca['CodigoMarca']; ?>"><?= $marca['Nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Tallas -->
                        <div class="mb-3 d-flex align-items-center">
                            <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Tallas</label>
                            <select name="TallasCodigoTallas" id="TallasCodigoTallas" class="form-control border-primary rounded-3 shadow-sm"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                <option value="">Seleccione Tallas...</option>
                                <?php foreach ($tallas as $talla): ?>
                                    <option value="<?= $talla['CodigoTallas']; ?>"><?= $talla['Tallas']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Proveedor -->
                        <div class="mb-3 d-flex align-items-center">
                            <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Proveedor</label>
                            <select name="Num_Documento" id="Num_Documento" class="form-control border-primary rounded-3 shadow-sm"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                <option value="">Seleccione Proveedor...</option>
                                <?php foreach ($usuarios as $usuario): ?>
                                    <option value="<?= $usuario['Num_Documento']; ?>"><?= $usuario['Nombres']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Botón -->
                        <button class="btn btn-primary w-100 rounded-3 shadow-sm" type="submit" name="Acciones" value="Agregar Producto"
                            style="background-color: #64ABEC; border-color: #64ABEC; padding: 0.6rem; font-size: 0.9rem;">
                            Agregar Producto
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('status') === 'success') {
                Swal.fire({
                    title: '¡Producto agregado!',
                    text: 'El producto se agregó exitosamente al inventario.',
                    icon: 'success',
                    confirmButtonColor: '#64ABEC',
                    background: '#fefefe',
                    backdrop: `
                    rgba(0,0,123,0.4)
                    url("https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif")
                    center top
                    no-repeat
                `
                });
            }
        });
    </script>




    <!-- Modal para agregar Categoría -->
    <div class="modal fade" id="addModall" tabindex="-1" aria-labelledby="addModallLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" style="max-width: 40%; margin: 1rem auto;">
            <div class="modal-content rounded-3 shadow-lg" style="background: rgba(0, 0, 0, 0.6) center; background-size: cover; color: #fff;">
                <div class="modal-header" style="background-color:  #FACDEBF1; color: #000000FF;">
                    <h5 class="modal-title" id="addModalLabel">Agregar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/ControladorProductos.php" method="post">

                        <div class="mb-3 d-flex align-items-center">
                            <label for="Nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombre</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="Nombre" name="Nombre" type="text"
                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                        </div>

                        <div class="mb-3 d-flex align-items-center">
                            <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Genero</label>
                            <select name="GeneroidGenero" id="GeneroidGenero" class="form-control border-primary rounded-3 shadow-sm"
                                style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                <option value="">Seleccione el Genero...</option>
                                <?php foreach ($genero as $genero): ?>
                                    <option value="<?= $genero['idGenero']; ?>">
                                        <?= $genero['Nombre']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>



                        <button class="btn btn-primary w-100 rounded-3 shadow-sm" type="submit" name="Acciones" value="Agregar Categoria" style="background-color: #64ABEC; border-color: #64ABEC; padding: 0.6rem; font-size: 0.9rem;">Agregar Categoria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal para agregar Talla -->
    <div class="modal fade" id="addModalll" tabindex="-1" aria-labelledby="addModalllLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" style="max-width: 40%; margin: 1rem auto;">
            <div class="modal-content rounded-3 shadow-lg" style="background: rgba(0, 0, 0, 0.6) center; background-size: cover; color: #fff;">
                <div class="modal-header" style="background-color:  #FACDEBF1; color: #000000FF;">
                    <h5 class="modal-title" id="addModalLabel">Agregar Talla</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/ControladorProductos.php" method="POST">

                        <div class="mb-3 d-flex align-items-center">
                            <label for="Tallas" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombre de la Talla</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="Tallas" name="Tallas" type="text"
                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                        </div>





                        <button class="btn btn-primary w-100 rounded-3 shadow-sm" type="submit" name="Acciones" value="Agregar Talla" style="background-color: #64ABEC; border-color: #64ABEC; padding: 0.6rem; font-size: 0.9rem;">Agregar Talla</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <!-- Modal para agregar Marca -->
    <div class="modal fade" id="addModallll" tabindex="-1" aria-labelledby="addModallllLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" style="max-width: 40%; margin: 1rem auto;">
            <div class="modal-content rounded-3 shadow-lg" style="background: rgba(0, 0, 0, 0.6) center; background-size: cover; color: #fff;">
                <div class="modal-header" style="background-color:  #FACDEBF1; color: #000000FF;">
                    <h5 class="modal-title" id="addModalLabel">Agregar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/ControladorProductos.php" method="POST">

                        <div class="mb-3 d-flex align-items-center">
                            <label for="Nombre" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombre de la Marca</label>
                            <input class="form-control border-primary rounded-3 shadow-sm" id="Nombre" name="Nombre" type="text"
                                required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                        </div>





                        <button class="btn btn-primary w-100 rounded-3 shadow-sm" type="submit" name="Acciones" value="Agregar Marca" style="background-color: #64ABEC; border-color: #64ABEC; padding: 0.6rem; font-size: 0.9rem;">Agregar Marca</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
