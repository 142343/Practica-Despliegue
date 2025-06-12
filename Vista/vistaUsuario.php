<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="shortcut icon" href="../Img/icono1.jpg" type="../Img/icono1.jpg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../estilos.css">
</head>

<body>

    <body>

        <body style="
      background-image: url('https://img.freepik.com/vector-gratis/fondo-degradado-azul-simple-negocios_53876-113753.jpg');
      background-size: cover; /* Fills the entire body area */
      background-repeat: no-repeat; /* Image won't repeat itself */
      background-position: center; /* Image starts at the center */
    ">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-size: 1.7rem; font-family: 'Poppins', sans-serif;">Administración de Usuarios</a>

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
    </div>




    <div class="container mt-3" style="
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 5px;
  background-color: rgba(233, 233, 233, 0.99);
  padding: 10px;
  border-radius: 5px;
  margin: auto;
  max-width: 800px;
  border: 1px solid #000;
  font-size: 14px;
  height: 50px; /* Aumenta la altura si es necesario */
">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
            <i class="bi bi-person-plus"></i> Agregar Usuario
        </button>
    </div>

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

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" style="font-family: 'Roboto', sans-serif; color: black;">
                                <i class="fas fa-user-tie"></i> Viviana Escobar Cortes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="mailto:viviana0631@gmail.com" style="font-family: 'Roboto', sans-serif; color: black;">
                                <i class="fas fa-envelope"></i> viviana0631@gmail.com
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="tel:+123456789" style="font-family: 'Roboto', sans-serif; color: black;">
                                <i class="fas fa-phone"></i> +123456789
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a>
                                <i class="fas fa-cog"></i> Panel de Administración
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
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
    </head>

    <body>
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-header">
                    <h5 class="panel-title">
                        <i class="fas fa-users"></i> Gestión de Usuarios
                    </h5>
                </div>
                <div class="panel-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-id-card fa-sm"></i> Tipo</th>
                                    <th><i class="fas fa-hashtag fa-sm"></i> Núm.</th>
                                    <th><i class="fas fa-user fa-sm"></i> Nombres</th>
                                    <th><i class="fas fa-user fa-sm"></i> Apellidos</th>
                                    <th><i class="fas fa-phone fa-sm"></i> Teléfono</th>
                                    <th><i class="fas fa-envelope fa-sm"></i> Correo</th>
                                    <th><i class="fas fa-user-tag fa-sm"></i> Rol</th>
                                    <th><i class="fas fa-check-circle fa-sm"></i> Estado</th>
                                    <th><i class="fas fa-venus-mars fa-sm"></i> Género</th>
                                    <th><i class="fas fa-edit fa-sm"></i> Acc.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($resultado) && $resultado->num_rows > 0) {
                                    while ($fila = mysqli_fetch_assoc($resultado)) { ?>
                                        <tr>
                                            <td><?= !empty($fila['Tipo_Documento']) ? htmlspecialchars($fila['Tipo_Documento']) : '<span class="text-muted">No registra</span>' ?></td>
                                            <td><?= !empty($fila['Num_Documento']) ? htmlspecialchars($fila['Num_Documento']) : '<span class="text-muted">No registra</span>' ?></td>
                                            <td><?= !empty($fila['Nombres']) ? htmlspecialchars($fila['Nombres']) : '<span class="text-muted">No registra</span>' ?></td>
                                            <td><?= !empty($fila['Apellidos']) ? htmlspecialchars($fila['Apellidos']) : '<span class="text-muted">No registra</span>' ?></td>
                                            <td><?= !empty($fila['Teléfono']) ? htmlspecialchars($fila['Teléfono']) : '<span class="text-muted">No registra</span>' ?></td>
                                            <td><?= !empty($fila['Correo']) ? htmlspecialchars($fila['Correo']) : '<span class="text-muted">No registra</span>' ?></td>
                                            <td>
                                                <?php if (isset($fila['RolidRol']) && $fila['RolidRol'] !== null && $fila['RolidRol'] !== ''): ?>
                                                    <span class="badge bg-light text-dark" style="font-size: 10px;"><?= htmlspecialchars($fila['RolidRol']) ?></span>
                                                <?php else: ?>
                                                    <span class="text-primary fw-bold"><i class="fas fa-info-circle"></i> Pendiente</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if (isset($fila['EstadoCodigoEstado']) && $fila['EstadoCodigoEstado'] !== null && $fila['EstadoCodigoEstado'] !== ''): ?>
                                                    <?php if (strtolower($fila['EstadoCodigoEstado']) == 'activo'): ?>
                                                        <span class="badge bg-danger" style="padding: 5px 10px; font-size: 12px;">Activo</span>
                                                    <?php elseif (strtolower($fila['EstadoCodigoEstado']) == 'inactivo'): ?>
                                                        <span class="badge bg-secondary" style="padding: 5px 10px; font-size: 12px;">Inactivo</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-secondary" style="padding: 5px 10px; font-size: 12px;"><?= htmlspecialchars($fila['EstadoCodigoEstado']) ?></span>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <span class="text-primary fw-bold"><i class="fas fa-info-circle"></i> Pendiente</span>
                                                <?php endif; ?>
                                            </td>

                                            <td><?= !empty($fila['GeneroidGenero']) ? htmlspecialchars($fila['GeneroidGenero']) : '<span class="text-muted">No suministra</span>' ?></td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?= $fila['Num_Documento'] ?>">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Modal para actualizar usuario -->
                                        <div class="modal fade" id="updateModal<?= $fila['Num_Documento'] ?>" tabindex="-1"
                                            aria-labelledby="updateModalLabel<?= $fila['Num_Documento'] ?>" aria-hidden="true">
                                            <div class="modal-dialog" style="max-width: 35%; margin: 5rem auto;">
                                                <div class="modal-content" style="background: rgba(0, 0, 0, 0.6) center; background-size: cover; color: #fff;">
                                                    <div class="modal-header" style="background-color:  #FACDEBF1; color: #000000FF;">
                                                        <h5 class="modal-title">Actualizar Usuario - ID: <?= $fila['Num_Documento'] ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="../Controlador/ControladorUsuario.php" method="post">
                                                            <input type="hidden" name="Num_Documento" value="<?= $fila['Num_Documento'] ?>">
                                                            <div class="mb-3">
                                                                <label for="Tipo_Documento" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Tipo de Documento</label>
        <select id="Tipo_Documento" name="Tipo_Documento" class="form-control" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
            <option value="" disabled selected>Seleccione un tipo</option>
            <option value="CC" <?= $fila['Tipo_Documento'] == 'CC' ? 'selected' : '' ?>>CC</option>
            <option value="TI" <?= $fila['Tipo_Documento'] == 'TI' ? 'selected' : '' ?>>TI</option>
            <option value="PPT" <?= $fila['Tipo_Documento'] == 'PPT' ? 'selected' : '' ?>>PPT</option>
            <option value="CE" <?= $fila['Tipo_Documento'] == 'CE' ? 'selected' : '' ?>>CE</option>
        </select>
    </div>

    <!-- Número de Documento -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Numero_Documento" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Número de Documento</label>
        <input type="number" id="Numero_Documento" name="Numero_Documento" class="form-control" required value="<?= $fila['Numero_Documento'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Nombres -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Nombres" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombres</label>
        <input type="text" id="Nombres" name="Nombres" class="form-control" required value="<?= $fila['Nombres'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Apellidos -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Apellidos" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Apellidos</label>
        <input type="text" id="Apellidos" name="Apellidos" class="form-control" required value="<?= $fila['Apellidos'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Teléfono -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Telefono" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Teléfono</label>
        <input type="number" id="Telefono" name="Telefono" class="form-control" required value="<?= $fila['Telefono'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Correo Electrónico -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Correo_Electronico" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Correo Electrónico</label>
        <input type="email" id="Correo_Electronico" name="Correo_Electronico" class="form-control" required value="<?= $fila['Correo_Electronico'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Dirección -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Direccion" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Dirección</label>
        <input type="text" id="Direccion" name="Direccion" class="form-control" required value="<?= $fila['Direccion'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Contraseña -->
    <div class="mb-3 d-flex align-items-center">
        <label for="Contraseña" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Contraseña</label>
        <input type="password" id="Contraseña" name="Contraseña" class="form-control" required value="<?= $fila['Contraseña'] ?>" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
    </div>

    <!-- Botón de Enviar -->
    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="13">No se encontraron resultados.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Modal para agregar Usuario -->
                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" style="max-width: 40%; margin: 1rem auto;">
                        <div class="modal-content rounded-3 shadow-lg" style="background: rgba(0, 0, 0, 0.6); background-size: cover; color: #fff;">
                            <div class="modal-header" style="background-color: #FACDEBF1; color: #000000FF;">
                                <h5 class="modal-title" id="addModalLabel">Agregar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="../Controlador/ControladorUsuario.php" method="post" id="formUsuario">

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="Tipo_Documento" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Tipo de Documento</label>
                                        <select class="form-control border-primary rounded-3 shadow-sm" id="Tipo_Documento" name="Tipo_Documento" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                            <option value="" disabled selected>Selecciona un tipo </option>
                                            <option value="C.C">C.C</option>
                                            <option value="T.I">T.I</option>
                                            <option value="PPT">PPT</option>
                                            <option value="C.E">C.E</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="Num_Documento" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Numero de Documento</label>
                                        <input class="form-control border-primary rounded-3 shadow-sm" id="Num_Documento" name="Num_Documento" type="text" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="Nombres" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Nombres</label>
                                        <input class="form-control border-primary rounded-3 shadow-sm" id="Nombres" name="Nombres" type="text" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="Apellidos" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Apellidos</label>
                                        <input class="form-control border-primary rounded-3 shadow-sm" id="Apellidos" name="Apellidos" type="text" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="Teléfono" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Teléfono</label>
                                        <input class="form-control border-primary rounded-3 shadow-sm" id="Teléfono" name="Teléfono" type="text" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="Correo" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Correo</label>
                                        <input class="form-control border-primary rounded-3 shadow-sm" id="Correo" name="Correo" type="email" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Rol</label>
                                        <select name="RolidRol" id="RolidRol" class="form-control border-primary rounded-3 shadow-sm" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                            <option value="">Seleccione el Rol...</option>
                                            <?php foreach ($rol as $rol): ?>
                                                <option value="<?= $rol['idRol']; ?>"><?= $rol['tipoRol']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Estado</label>
                                        <select name="EstadoCodigoEstado" id="EstadoCodigoEstado" class="form-control border-primary rounded-3 shadow-sm" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                            <option value="">Seleccione Estado...</option>
                                            <?php foreach ($estados as $estado): ?>
                                                <option value="<?= $estado['CodigoEstado']; ?>"><?= $estado['tipoEstado']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 d-flex align-items-center">
                                        <label class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Genero</label>
                                        <select name="GeneroidGenero" id="GeneroidGenero" class="form-control border-primary rounded-3 shadow-sm" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                                            <option value="">Seleccione el Género...</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                        </select>
                                    </div>


                                    <button class="btn btn-primary w-100 rounded-3 shadow-sm" type="submit" name="Acciones" value="AgregarUsuario" style="background-color: #64ABEC; border-color: #64ABEC; padding: 0.6rem; font-size: 0.9rem;">Agregar Usuario</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scripts de validación -->
                <script>
                    document.getElementById('Teléfono').addEventListener('input', function() {
                        this.value = this.value.replace(/\D/g, '');
                        if (this.value.length > 10) {
                            this.value = this.value.slice(0, 10);
                            Swal.fire({
                                title: '¡Atención!',
                                html: '<div style="font-size: 24px;">📞</div><p>No puedes ingresar más de 10 números.</p>',
                                icon: 'error',
                                confirmButtonText: 'Aceptar',
                            });
                        }
                    });

                    document.getElementById('Num_Documento').addEventListener('input', function() {
                        this.value = this.value.replace(/\D/g, '');
                    });

                    document.getElementById('Nombres').addEventListener('input', function() {
                        this.value = this.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
                    });

                    document.getElementById('Apellidos').addEventListener('input', function() {
                        this.value = this.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
                    });

                    document.getElementById('Correo').addEventListener('blur', function() {
                        const correo = this.value;
                        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (!regex.test(correo)) {
                            Swal.fire({
                                title: 'Correo inválido',
                                text: 'Por favor ingresa un correo válido.',
                                icon: 'error',
                                confirmButtonText: 'Aceptar'
                            });
                            this.focus();
                        }
                    });
                </script>



    </body>

    </html>

    </body>

    </html>
