<?php
use Modelo\Ingreso;
use Modelo\IngresoException;

$gestorIngreso = new Ingreso();
$elegirAcciones = isset($_POST['Acciones']) ? $_POST['Acciones'] : "Cargar";

try {
    if ($elegirAcciones == 'Agregar Ingreso') {
        if (
            isset($_POST['FechaIngresoProducto']) &&
            isset($_POST['ProductoCodigoProducto']) &&
            isset($_POST['Cantidad']) &&
            isset($_POST['Descripcion']) &&
            isset($_POST['PrecioIngreso']) &&
            isset($_POST['Empleado'])
        ) {
            $gestorIngreso->agregarIngreso(
                $_POST['FechaIngresoProducto'],
                $_POST['ProductoCodigoProducto'],
                $_POST['Cantidad'],
                $_POST['Descripcion'],
                $_POST['PrecioIngreso'],
                $_POST['Empleado']
            );
        } else {
            throw new IngresoException("Faltan datos para agregar ingreso");
        }
    } elseif ($elegirAcciones == 'Actualizar Ingreso') {
        if (
            isset($_POST['idTicketIngreso']) &&
            isset($_POST['FechaIngresoProducto']) &&
            isset($_POST['ProductoCodigoProducto']) &&
            isset($_POST['Cantidad']) &&
            isset($_POST['Descripcion']) &&
            isset($_POST['PrecioIngreso']) &&
            isset($_POST['PrecioTotal']) &&
            isset($_POST['Empleado'])
        ) {
            $gestorIngreso->actualizarIngreso(
                $_POST['idTicketIngreso'],
                $_POST['FechaIngresoProducto'],
                $_POST['ProductoCodigoProducto'],
                $_POST['Cantidad'],
                $_POST['Descripcion'],
                $_POST['PrecioIngreso'],
                $_POST['PrecioTotal'],
                $_POST['Empleado']
            );
        } else {
            throw new IngresoException("Faltan datos para actualizar ingreso");
        }
    } elseif ($elegirAcciones == 'Borrar Ingreso') {
        if (isset($_POST['idTicketIngreso'])) {
            $gestorIngreso->borrarIngreso($_POST['idTicketIngreso']);
        } else {
            throw new IngresoException("Falta el ID del ingreso a borrar");
        }
    } elseif ($elegirAcciones == 'Buscar Ingreso') {
        if (isset($_POST['idTicketIngreso'])) {
            $resultado = $gestorIngreso->consultaringreso($_POST['idTicketIngreso']);
        } else {
            throw new IngresoException("Falta el ID del ingreso a buscar");
        }
    }

    $resultado = $gestorIngreso->consultaringreso();
} catch (IngresoException $e) {
    echo "Error de Ingreso: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error general: " . $e->getMessage();
}


use "../Vista/VistaIngreso.php";
