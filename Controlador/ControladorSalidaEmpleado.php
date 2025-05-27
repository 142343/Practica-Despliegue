<?php  
require_once '../Modelo/Salida.php';  

$gestorSalida = new Salida(); 

$producto = $gestorSalida->ConsultarProducto();

$elegirAcciones = isset($_POST['Acciones']) ? $_POST['Acciones'] : "Cargar";  

try {
    if ($elegirAcciones == 'Agregar Salida') {
        error_log(print_r($_POST, true)); 
        $gestorSalida->agregarSalida(
            $_POST['FechaSalida'],                  
            $_POST['Cantidad'],                     
            $_POST['ProductoCodigo'],              
            $_POST['Num_Documento_Empleado']     
        );

       
        header("Location: ../Controlador/ControladorSalidaEmpleado.php?=1");
        exit();
    } elseif ($elegirAcciones == 'Buscar Producto') {  
        $resultado = $gestorSalida->consultarSalida($_POST['CodigoProducto']);  
    } else {
        $resultado = $gestorSalida->consultarSalida(); 
    }
} catch (Exception $e) {
    $errorMessage = "Error: " . $e->getMessage();  
    exit();
}

include "../Vista/VistaSalidaEmpleado.php";  
?>

