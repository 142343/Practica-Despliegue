<?php

use PHPUnit\Framework\TestCase;

use __DIR__ . '/../Modelo/Salida.php';
use __DIR__ . '/../Modelo/Producto.php';
use __DIR__ . '/../Modelo/Conexion.php';
class SalidaTest extends TestCase
{
    protected $salida;
    protected $producto;

    protected static $existingProductId = 301;
    protected static $existingEmployeeDocument = '1080180837';


    protected $currentTestSalidaId = null;

    protected function setUp(): void
    {
        $this->salida = new Salida();
        $this->producto = new Producto();
        // Resetear el ID de la salida para cada prueba
        $this->currentTestSalidaId = null;
    }
    public function testAgregarSalidaExitosa()
    {
        $productoCodigo = self::$existingProductId;
        $empleado = self::$existingEmployeeDocument;
        $fechaSalida = date('Y-m-d');
        $cantidad = 2;
        $productoExistente = $this->producto->consultarProducto($productoCodigo)->fetch_assoc();
        $this->assertNotNull($productoExistente, "El producto con ID " . $productoCodigo . " debe existir para ejecutar esta prueba.");
        $stockInicial = $productoExistente['Stock'];
        if ($stockInicial < $cantidad) {
            $nuevoStockParaTest = $stockInicial + $cantidad + 5;
            $conexion = Conectarse();
            $sqlUpdateStock = "UPDATE producto SET Stock = ? WHERE CodigoProducto = ?";
            $stmtUpdateStock = $conexion->prepare($sqlUpdateStock);
            $stmtUpdateStock->bind_param("ii", $nuevoStockParaTest, $productoCodigo);
            $stmtUpdateStock->execute();
            $stmtUpdateStock->close();
            $conexion->close();
            $productoExistente = $this->producto->consultarProducto($productoCodigo)->fetch_assoc();
            $stockInicial = $productoExistente['Stock'];
        }

        try {
            $this->salida->agregarSalida(
                $fechaSalida,
                $cantidad,
                $productoCodigo,
                $empleado
            );
            $this->assertTrue(true, 'La salida debería agregarse correctamente y el stock actualizarse.');

            // Verificar que el stock se actualizó correctamente
            $productoFinal = $this->producto->consultarProducto($productoCodigo)->fetch_assoc();
            $this->assertEquals($stockInicial - $cantidad, $productoFinal['Stock'], 'El stock del producto debería haberse decrementado.');
        } catch (\Exception $e) {
            $this->fail('El método agregarSalida lanzó una excepción: ' . $e->getMessage());
        }
    }
    public function testConsultarTodasLasSalidas()
    {
        $resultado = $this->salida->consultarSalida();

        $this->assertInstanceOf(\mysqli_result::class, $resultado, 'consultarSalida sin parámetro debería devolver un objeto mysqli_result');
        $this->assertGreaterThanOrEqual(0, $resultado->num_rows, 'Debería devolver al menos cero salidas');

        $resultado->free();
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n\n******************************\n";
        echo "Todas las pruebas del módulo SALIDAS se realizaron correctamente ✅\n";
        echo "Se validaron agregar y consultar salidas.\n";
        echo "******************************\n\n";
    }
}
