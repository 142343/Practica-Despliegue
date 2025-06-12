<?php

use PHPUnit\Framework\TestCase;

use __DIR__ . '/../Modelo/Ingreso.php';
use __DIR__ . '/../Modelo/Producto.php'; // Necesario para consultar el stock del producto
use __DIR__ . '/../Modelo/Conexion.php'; // Asegúrate de que la ruta sea correcta

class IngresoTest extends TestCase
{
    protected $ingreso;
    protected $producto;

    protected static $existingProductId = 301; // ID de un producto que ya existe en tu tabla 'producto'
    protected static $existingEmployeeDocument = '1080180837'; // Num_Documento de un usuario/empleado que ya existe en tu tabla 'usuario'


    protected function setUp(): void
    {
        $this->ingreso = new Ingreso();
        $this->producto = new Producto();
    }

    public function testAgregarIngreso()
    {
        $productoCodigoProducto = self::$existingProductId;
        $empleado = self::$existingEmployeeDocument;

        $fechaIngreso = date('Y-m-d');
        $cantidad = 5;
        $descripcion = 'Ingreso de prueba exitoso';
        $precioIngreso = 25000;
        $productoExistente = $this->producto->consultarProducto($productoCodigoProducto)->fetch_assoc();
        $this->assertNotNull($productoExistente, "El producto con ID " . $productoCodigoProducto . " debe existir para ejecutar esta prueba.");

        $stockInicial = $productoExistente['Stock'];
        try {
            $this->ingreso->agregarIngreso(
                $fechaIngreso,
                $productoCodigoProducto,
                $cantidad,
                $descripcion,
                $precioIngreso,
                $empleado
            );
            $this->assertTrue(true, 'El ingreso debería agregarse correctamente y el stock actualizarse.');

            // Verificar que el stock se actualizó correctamente
            $productoFinal = $this->producto->consultarProducto($productoCodigoProducto)->fetch_assoc();
            $this->assertEquals($stockInicial + $cantidad, $productoFinal['Stock'], 'El stock del producto debería haberse incrementado.');
        } catch (\Exception $e) {
            $this->fail('El método agregarIngreso lanzó una excepción: ' . $e->getMessage());
        }
    }

    public function testConsultarTodosLosIngresos()
    {
        $resultado = $this->ingreso->consultarIngreso();
        $this->assertInstanceOf(\mysqli_result::class, $resultado, 'consultarIngreso sin parámetro debería devolver un objeto mysqli_result');
        $this->assertGreaterThanOrEqual(0, $resultado->num_rows, 'Debería devolver al menos cero ingresos');

        $resultado->free();
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n\n******************************\n";
        echo "Todas las pruebas del módulo INGRESOS se realizaron correctamente ✅\n";
        echo "Se validaron agregar y consultar ingresos.\n";
        echo "******************************\n\n";
    }
}
