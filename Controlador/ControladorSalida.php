<?php  
require_once '../Modelo/Salida.php';  

// Definir excepción personalizada para errores de validación
class DatosFormularioInvalidosException extends Exception {}

$gestorSalida = new Salida();
$producto = $gestorSalida->ConsultarProducto();

$elegirAcciones = filter_input(INPUT_POST, 'Acciones', FILTER_SANITIZE_STRING);

try {
    if ($elegirAcciones === 'Agregar Salida') {
        // Validar y sanitizar entradas del formulario
        $fechaSalida = filter_input(INPUT_POST, 'FechaSalida', FILTER_SANITIZE_STRING);
        $cantidad = filter_input(INPUT_POST, 'Cantidad', FILTER_VALIDATE_INT);
        $productoCodigo = filter_input(INPUT_POST, 'ProductoCodigo', FILTER_SANITIZE_STRING);
        $documentoEmpleado = filter_input(INPUT_POST, 'Num_Documento_Empleado', FILTER_SANITIZE_STRING);

        // Validar que todos los campos sean válidos
        if (!$fechaSalida || $cantidad === false || !$productoCodigo || !$documentoEmpleado) {
            throw new DatosFormularioInvalidosException("Datos del formulario inválidos.");
        }

        // Ejecutar la función para registrar la salida
        $gestorSalida->agregarSalida($fechaSalida, $cantidad, $productoCodigo, $documentoEmpleado);

        // Redirigir después del registro exitoso
        header("Location: ../Controlador/ControladorSalida.php");
        exit();
    } elseif ($elegirAcciones === 'Buscar Producto') {
        $codigoProducto = filter_input(INPUT_POST, 'CodigoProducto', FILTER_SANITIZE_STRING);
        $resultado = $gestorSalida->consultarSalida($codigoProducto);
    } else {
        $resultado = $gestorSalida->consultarSalida(); 
    }
} catch (DatosFormularioInvalidosException $e) {
    // Error específico de validación
    error_log("[" . date('Y-m-d H:i:s') . "] Validación en ControladorSalida.php: " . $e->getMessage());
    exit("Error en los datos enviados. Por favor, revise el formulario.");
} catch (Exception $e) {
    // Error general
    error_log("[" . date('Y-m-d H:i:s') . "] Error general en ControladorSalida.php: " . $e->getMessage());
    exit("Ha ocurrido un error. Por favor, contacte al administrador.");
}

include "../Vista/VistaSalida.php";  
?>

