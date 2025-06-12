<?php 
include_once "../Modelo/Conexion.php"; // Cambiado a include_once
$conexion = Conectarse();
$sql = "SELECT * FROM `producto`;";
$sqlp = $conexion->query($sql);

$sqle = "SELECT  `Num_Documento`, `Nombres` FROM `usuario` WHERE RolidRol=21";
$sqlpe = $conexion->query($sqle);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Salida</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Img/icono1.jpg" type="../Img/icono1.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                <a class="navbar-brand" href="#" style="font-size: 1.7rem; font-family: 'Poppins', sans-serif;">Salida de Productos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Opciones.php">←  Atras</a>
                            <a class="nav-link active" aria-current="page" href="../Inicio/logaut.php">Cerrar sesión</a>
                        </li>
                       
                    </ul>

                </div>
            </div>
        </nav>

        

        <br>
        <!-- Fin de encabezado-->

        

<div class="breadcrumbs shadow-1" style="background-color: #FFFFFFFF;" >
    <div class="container-o" >
        <div class="row" style="background-color: #FFFFFFFF;">
            <i class="material-icons"> Estas aquí:</i>
            <ul>
                <li><a href="../Controlador/ControladorSalida.php">Salidas</a></li>
        
        </div>
    </div>
    
</div>
<div class="container mt-3" style="
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 5px;
   background-color:   rgba(233, 233, 233, 0.99);
  padding: 10px;
  border-radius: 5px;
  margin: auto;
  max-width: 800px;
  border: 1px solid #000;
  font-size: 14px;
  height: 50px; /* Ajusta la altura según sea necesario */
"> 
   <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
      <i class="bi bi-plus-square-dotted"></i> Agregar Salida
   </button>
</div>
<br>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de herramientas</title>
    <link rel="stylesheet" href="styles.css">
    
</head><body>  
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
}
.sidebar a:hover {
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


<div style="flex-grow: 1; text-align: center;">
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
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#" style="color: black;"><i class="fas fa-shield-alt"></i> Seguridad</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
     .container {
    max-width: 100%;
    padding: 0 15px;
    margin-top: -150px;
    /*margin-top: -250px;*/
    
}

        /* Estilos generales */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
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


.table-responsive {
    overflow-x: auto;
    overflow-y: auto; 
    -webkit-overflow-scrolling: touch; 
    max-height: 400px; 
}

.table {
    width: 90%;
    min-width: 600px; 
    border: 3px solid black;
    
}

thead th {
    background-color: #f8f9fa;
    position: sticky;
    top: 0;
    z-index: 2;
    border: 2px solid black; /
}


.table {
        font-size: 0.90em; 
        width: 90%; 
    }
    .table th, .table td {
        padding: 5px; 
        
    }

@media (max-width: 100%) {
    .table {
        min-width: 100%; 
    }


        body {
            background-color: pink;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h3 {
            color: #343a40;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .btn {
            border-radius: 5px;
        }
        table {
            margin-top: 20px;
        }
        th, td {
            vertical-align: middle !important;
            text-align: center;
        }
        #additionalFields {
            display: none; 
        }

.form-label {
    border: 2px 
    solid #ffffff; 
    border-radius: 0.3rem;
    padding: 0.4rem; 
    font-size: 0.9rem;
    width: 60%
}

    </style><div class="panel mt-4">
    <div class="panel-header">
        <h5 class="panel-title">
            <i class="fas fa-truck-loading"></i> Salidas de Productos
        </h5>
    </div>
    <div class="panel-content">
        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th><i class="fas fa-receipt fa-sm"></i> No° Salida</th>
                        <th><i class="fas fa-calendar-alt fa-sm"></i> Fecha de Salida</th>
                        <th><i class="fas fa-box fa-sm"></i> Producto</th>
                        <th><i class="fas fa-sort-numeric-up fa-sm"></i> Cantidad</th>
                        <th><i class="fas fa-dollar-sign fa-sm"></i> Valor Unitario</th>
                        <th><i class="fas fa-money-bill-wave fa-sm"></i> Precio Total</th>
                        <th><i class="fas fa-user fa-sm"></i> Personal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (isset($resultado) && $resultado->num_rows > 0) {
                        $fechaAnterior = null;
                        while ($fila = mysqli_fetch_assoc($resultado)) { 
                            $fechaActual = $fila['FechaSalida'];

                            // Color fila según si cambia la fecha o no
                            if ($fechaAnterior === null) {
                                $colorFila = '#faf4f8'; // color claro para primer fila
                            } elseif ($fechaActual === $fechaAnterior) {
                                $colorFila = '#ffffff'; // mismo día, blanco
                            } else {
                                $colorFila = '#faf4f8'; // nueva fecha, color claro
                            }
                            $fechaAnterior = $fechaActual;

                            // Color para Precio Total según monto
                            $precioTotal = $fila['PrecioTotal'];
                            if ($precioTotal >= 1000000) {
                                $colorPrecio = '#f8d7da'; // rojo claro
                                $colorTexto = '#842029';
                            } elseif ($precioTotal >= 500000) {
                                $colorPrecio = '#fff3cd'; // amarillo claro
                                $colorTexto = '#664d03';
                            } else {
                                $colorPrecio = '#d1e7dd'; // verde claro
                                $colorTexto = '#0f5132';
                            }
                    ?>
                        <tr style="background-color: <?= $colorFila ?>;">
                            <td><?= htmlspecialchars($fila['IdTicketSalida']) ?></td>
                            <td><?= htmlspecialchars($fechaActual) ?></td>
                            <td><?= htmlspecialchars($fila['Productos']) ?></td> 
                            <td><?= htmlspecialchars($fila['Cantidades']) ?></td> 
                            <td>$<?= number_format($fila['ValoresUnitarios'], 0, ',', '.') ?></td> 
                            <td style="background-color: <?= $colorPrecio ?>; color: <?= $colorTexto ?>;">
                                $<?= number_format($precioTotal, 0, ',', '.') ?>
                            </td> 
                            <td>
                                <?= htmlspecialchars($fila['Empleados']) ?> 
                                <i class="bi bi-file-earmark-person personal-icon"></i>
                            </td>     
                        </tr>
                    <?php 
                        }
                    } else {
                        echo '<tr><td colspan="7" class="text-muted">No hay registros.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



    <!-- Modal para agregar Salida -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="max-width: 40%; margin: 1rem auto;">
        <div class="modal-content rounded-3 shadow-lg" style="background: rgba(0, 0, 0, 0.6); color: #fff;">
            <div class="modal-header" style="background-color: #FACDEBF1; color: #000;">
                <h5 class="modal-title" id="addModalLabel">Agregar Ticket</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../Controlador/ControladorSalida.php" method="post">
                    <div class="mb-3 d-flex align-items-center">
                        <label for="FechaSalida" class="form-label" style="color: #ffffff; font-size: 0.9rem; width: 40%;">Fecha De Salida</label>
                        <input class="form-control border-primary rounded-3 shadow-sm" id="FechaSalida" name="FechaSalida" type="date" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;">
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <select name="ProductoCodigo" id="ProductoCodigo" class="form-control border-primary rounded-3 shadow-sm" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;" required>
                            <option value="">Seleccione Producto...</option>
                            <?php while($row=mysqli_fetch_assoc($sqlp)){?>
                                <option value="<?php echo $row['CodigoProducto']; ?>">
                                <?php echo $row['Nombre'] . ' - ' . $row['Stock']; ?>
                                </option> 
                            <?php } ?>  
                        </select>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <input class="form-control border-primary rounded-3 shadow-sm" id="Cantidad" name="Cantidad" type="number" required style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;" min="1" max="99999999999" oninput="validarLongitud(this)" inputmode="numeric">
                        <script>
                            function validarLongitud(input) {
                                input.value = input.value.replace(/\D/g, '');
                                // Limitar a 11 dígitos
                                if (input.value.length > 11) {
                                    input.value = input.value.slice(0, 11);
                                }
                            }
                        </script>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <select name="Num_Documento_Empleado" id="Num_Documento_Empleado" class="form-control border-primary rounded-3 shadow-sm" style="border: 2px solid #ffffff; border-radius: 0.3rem; padding: 0.4rem; font-size: 0.9rem; width: 60%;" required>
                            <option value="">Seleccione Empleado...</option>
                            <?php while($row=mysqli_fetch_assoc($sqlpe)){?>
                                <option value="<?php echo $row['Num_Documento']; ?>">
                                    <?php echo $row['Nombres']; ?>
                                </option> 
                            <?php } ?>  
                        </select>
                    </div>

                    <!-- Botón para enviar el formulario -->
                    <div class="mb-3 text-center">
                        <button type="submit" name="Acciones" value="Agregar Salida" class="btn btn-primary">Agregar Salida</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Mensajes de éxito o error -->
<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success" role="alert">
        ¡Salida agregada con éxito!
    </div>
<?php elseif (isset($_GET['error'])): ?>
    <div class="alert alert-danger" role="alert">
        Error: <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
<?php endif; ?>


                    

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

     
<script>
          // Obtener la fecha actual
          const today = new Date();
          const year = today.getFullYear();
          const month = String(today.getMonth() + 1).padStart(2, '0'); // Mes entre 01 y 12
          const day = String(today.getDate()).padStart(2, '0'); // Día entre 01 y 31

          // Formatear la fecha en el formato YYYY-MM-DD
          const formattedDate = `${year}-${month}-${day}`;

          // Asignar la fecha al input
          document.getElementById('FechaSalida').value = formattedDate;
        </script>
</body>
</html>
