<?php  
require_once '../Modelo/Salida.php';  

$gestorSalida = new Salida(); 

$producto = $gestorSalida->ConsultarProducto();

$elegirAcciones = filter_input(INPUT_POST, 'Acciones', FILTER_SANITIZE_STRING);

try {
    if ($elegirAcciones === 'Agregar Salida') {
        // Validar y sanitizar entradas
        $fechaSalida = filter_input(INPUT_POST, 'FechaSalida', FILTER_SANITIZE_STRING);
        $cantidad = filter_input(INPUT_POST, 'Cantidad', FILTER_VALIDATE_INT);
        $productoCodigo = filter_input(INPUT_POST, 'ProductoCodigo', FILTER_SANITIZE_STRING);
        $documentoEmpleado = filter_input(INPUT_POST, 'Num_Documento_Empleado', FILTER_SANITIZE_STRING);

        // Validación básica
        if (!$fechaSalida || $cantidad === false || !$productoCodigo || !$documentoEmpleado) {
            throw new Exception("Datos inválidos enviados.");
        }

        // Registrar salida
        $gestorSalida->agregarSalida($fechaSalida, $cantidad, $productoCodigo, $documentoEmpleado);

        header("Location: ../Controlador/ControladorSalida.php");
        exit();

    } elseif ($elegirAcciones === 'Buscar Producto') {
        $codigoProducto = filter_input(INPUT_POST, 'CodigoProducto', FILTER_SANITIZE_STRING);
        $resultado = $gestorSalida->consultarSalida($codigoProducto);
    } else {
        $resultado = $gestorSalida->consultarSalida(); 
    }

} catch (Exception $e) {
    // En desarrollo puedes hacer esto, en producción guarda el error en un log privado
    error_log("Error en ControladorSalida: " . $e->getMessage());
    exit("Ha ocurrido un error, contacte al administrador.");
}


include "../Vista/VistaSalida.php";  
?>

