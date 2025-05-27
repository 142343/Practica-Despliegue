<?php  
require_once '../Modelo/Usuario.php';  

$gestorUsuario = new Usuario();  

$rol = $gestorUsuario->ConsultarRol();  
$estado = $gestorUsuario->ConsultarEstado();  
$genero = $gestorUsuario->ConsultarGenero();  
$usuario = $gestorUsuario->ConsultarUsuario();

// Editar  
$roles = $gestorUsuario->ConsultarRol();  
$estados = $gestorUsuario->ConsultarEstado();  
$generos = $gestorUsuario->ConsultarGenero();  
 
$elegirAcciones = isset($_POST['Acciones']) ? $_POST['Acciones'] : "Cargar";  

try {
    if ($elegirAcciones == 'Buscar Usuario') {  
        $Num_Documento = $_POST['Num_Documento'];  
        $resultado = $gestorUsuario->consultarUsuario($Num_Documento);  
        
        if ($resultado && $resultado->num_rows > 0) {
            $usuariosEncontrados = []; 
            while ($usuario = $resultado->fetch_assoc()) {
                $usuariosEncontrados[] = $usuario; 
            }
        } else {
            $errorMensaje = "No se encontró el usuario con el documento: " . $Num_Documento;
        }
    }
} catch (Exception $e) {  
    echo "Error: " . $e->getMessage();  
}

try {
    if ($elegirAcciones == 'AgregarUsuario') {  
        $gestorUsuario->agregarUsuario(  
            $_POST['Tipo_Documento'],  
            $_POST['Num_Documento'],  
            $_POST['Nombres'],  
            $_POST['Apellidos'],  
            $_POST['Teléfono'],  
            $_POST['Correo'],  
            $_POST['RolidRol'],  
            $_POST['EstadoCodigoEstado'],  
            $_POST['GeneroidGenero']
        );
    } elseif ($elegirAcciones == 'ActualizarUsuario') {  
        $gestorUsuario->actualizarUsuario(  
            $_POST['Tipo_Documento'],  
            $_POST['Num_Documento'],  
            $_POST['Nombres'],  
            $_POST['Apellidos'],  
            $_POST['Teléfono'],  
            $_POST['Correo'],  
            $_POST['RolidRol'],  
            $_POST['EstadoCodigoEstado'],  
            $_POST['GeneroidGenero']  
        );
    } 
  
    $resultado = $gestorUsuario->consultarUsuario(); 
} catch (Exception $e) {  
    echo "Error: " . $e->getMessage();  
}  

include "../Vista/VistaUsuario.php";  
?>