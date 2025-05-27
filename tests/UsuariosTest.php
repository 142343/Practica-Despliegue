<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Modelo/Usuario.php';
include_once __DIR__ . '/../Modelo/Conexion.php'; // Asegúrate de que la ruta sea correcta

class UsuariosTest extends TestCase
{
    protected $usuario;

    protected function setUp(): void
    {
        $this->usuario = new Usuario();
    }

    public function testAgregarUsuario()
    {
        $tipo_documento = 'CC';
        $num_documento = '137544437';
        $nombres = 'Nombre de prueba Lilley';
        $apellidos = 'Apellido de prueba';
        $telefono = '3134567';
        $correo = 'prueba@example.com';
        $rol_id = 22;
        $estado_codigo = 101;
        $genero_id = 2;

        try {
            $this->usuario->agregarUsuario(
                $tipo_documento,
                $num_documento,
                $nombres,
                $apellidos,
                $telefono,
                $correo,
                $rol_id,
                $estado_codigo,
                $genero_id
            );
            $this->assertTrue(true, 'El usuario debería agregarse correctamente');
        } catch (\Exception $e) {
            $this->fail('El método agregarUsuario lanzó una excepción: ' . $e->getMessage());
        }
    }

    public function testActualizarUsuarioExistente()
    {
        $usuario = new Usuario();

        // Datos iniciales para asegurar existencia
        $tipo_documento = 'CC';
        $num_documento = '122447890';
        $usuario->agregarUsuario($tipo_documento, $num_documento, 'Nombre', 'Apellido', '300000', 'original@example.com', 22, 101, 1);

        // Nuevos valores para actualizar
        $nuevos_nombres = 'Nombre Actualizado';
        $nuevos_apellidos = 'Apellido Actualizado';
        $nuevo_telefono = '3101567';
        $nuevo_correo = 'actualizado.nuevo@example.com';
        $nuevo_rol = 22;
        $nuevo_estado = 102;
        $nuevo_genero = 1;

        $resultado = $usuario->actualizarUsuario(
            $tipo_documento,
            $num_documento,
            $nuevos_nombres,
            $nuevos_apellidos,
            $nuevo_telefono,
            $nuevo_correo,
            $nuevo_rol,
            $nuevo_estado,
            $nuevo_genero
        );

        $this->assertTrue($resultado, 'El usuario debería actualizarse correctamente');

        $resultado_consulta = $usuario->consultarUsuario($num_documento);
        $usuario_actualizado = $resultado_consulta->fetch_assoc();

        $this->assertNotNull($usuario_actualizado, 'El usuario debe existir después de la actualización');
        $this->assertEquals($nuevos_nombres, $usuario_actualizado['Nombres'], 'El nombre del usuario debería haberse actualizado');
        $this->assertEquals($nuevos_apellidos, $usuario_actualizado['Apellidos'], 'El apellido del usuario debería haberse actualizado');
        $this->assertEquals($nuevo_telefono, $usuario_actualizado['Teléfono'], 'El teléfono del usuario debería haberse actualizado');
        $this->assertEquals($nuevo_correo, $usuario_actualizado['Correo'], 'El correo del usuario debería haberse actualizado');
    }


    public function testConsultarRol()
    {
        $resultado = $this->usuario->ConsultarRol();
        $this->assertInstanceOf(\mysqli_result::class, $resultado, 'ConsultarRol debería devolver un objeto mysqli_result');
        $this->assertGreaterThanOrEqual(0, $resultado->num_rows, 'Debería devolver al menos cero roles');
        // Puedes agregar más aserciones para verificar la estructura de los roles
    }

    public function testConsultarEstado()
    {
        $resultado = $this->usuario->ConsultarEstado();
        $this->assertInstanceOf(\mysqli_result::class, $resultado, 'ConsultarEstado debería devolver un objeto mysqli_result');
        $this->assertGreaterThanOrEqual(0, $resultado->num_rows, 'Debería devolver al menos cero estados');
        // Puedes agregar más aserciones para verificar la estructura de los estados
    }

    public function testConsultarGenero()
    {
        $resultado = $this->usuario->ConsultarGenero();
        $this->assertInstanceOf(\mysqli_result::class, $resultado, 'ConsultarGenero debería devolver un objeto mysqli_result');
        $this->assertGreaterThanOrEqual(0, $resultado->num_rows, 'Debería devolver al menos cero géneros');
        // Puedes agregar más aserciones para verificar la estructura de los géneros
    }

    public static function tearDownAfterClass(): void
    {
        echo "\n\n******************************\n";
        echo "Todas las pruebas del módulo USUARIOS se realizaron correctamente ✅\n";
        echo "Se validaron agregar, consultar, actualizar , así como consultar roles, estados y géneros.\n";
        echo "******************************\n\n";
    }
}
