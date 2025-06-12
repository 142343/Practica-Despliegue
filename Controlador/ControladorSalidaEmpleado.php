<?php
require_once '../Modelo/Salida.php'; 

$gestorSalida = new Salida(); 
$producto = $gestorSalida->ConsultarProducto();

$elegirAcciones = isset($_POST['Acciones']) ? $_POST['Acciones'] : "Cargar";

try {
    if ($elegirAcciones === 'Agregar Salida') {
        // Log de control (no incluye datos del usuario)
        error_log("Acción: Agregar Salida ejecutada.");

        // Sanitizar y validar entradas
        $fechaSalida = filter_input(INPUT_POST, 'FechaSalida', FILTER_SANITIZE_STRING);
        $cantidad = filter_input(INPUT_POST, 'Cantidad', FILTER_VALIDATE_INT);
        $productoCodigo = filter_input(INPUT_POST, 'ProductoCodigo', FILTER_SANITIZE_STRING);
        $documentoEmpleado = filter_input(INPUT_POST, 'Num_Documento_Empleado', FILTER_SANITIZE_STRING);

        // Validación de datos
        if (!$fechaSalida || !$cantidad || !$productoCodigo || !$documentoEmpleado) {
            throw new Exception("Campos inválidos o vacíos.");
        }

        // Ejecutar acción
        $gestorSalida->agregarSalida($fechaSalida, $cantidad, $productoCodigo, $documentoEmpleado);

        // Redirigir con éxito
        header("Location: ../Controlador/ControladorSalidaEmpleado.php?exito=1");
        exit();
    } elseif ($elegirAcciones === 'Buscar Producto') {
        $codigo = filter_input(INPUT_POST, 'CodigoProducto', FILTER_SANITIZE_STRING);
        $resultado = $gestorSalida->consultarSalida($codigo);
    } else {
        $resultado = $gestorSalida->consultarSalida();
    }
} catch (Exception $e) {
    // Registrar el error sin mostrar detalles al usuario
    error_log("Error en ControladorSalidaEmpleado: " . $e->getMessage());
    // Podrías también mostrar una alerta genérica o redirigir con error
    header("Location: ../Vista/VistaSalidaEmpleado.php?error=1");
    exit();
}

include "../Vista/VistaSalidaEmpleado.php";
?>
