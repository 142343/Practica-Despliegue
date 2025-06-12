<?php
include_once 'Conexion.php';

class Usuario
{
    private $Num_Documento;
    private $Tipo_Documento;
    private $Nombres;
    private $Apellidos;
    private $Teléfono;
    private $Correo;
    private $RolidRol;
    private $EstadoCodigoEstado;
    private $GeneroidGenero;
    private $Conexion;

    public function __construct($Num_Documento = null, $Tipo_Documento = null, $Nombres = null, $Apellidos = null, $Teléfono = null, $Correo = null, $RolidRol = null, $EstadoCodigoEstado = null, $GeneroidGenero = null)
    {
        $this->Num_Documento = $Num_Documento;
        $this->Tipo_Documento = $Tipo_Documento;
        $this->Nombres = $Nombres;
        $this->Apellidos = $Apellidos;
        $this->Teléfono = $Teléfono;
        $this->Correo = $Correo;
        $this->RolidRol = $RolidRol;
        $this->EstadoCodigoEstado = $EstadoCodigoEstado;
        $this->GeneroidGenero = $GeneroidGenero;
        $this->Conexion = Conectarse();
    }

    public function agregarUsuario($Tipo_Documento, $Num_Documento, $Nombres, $Apellidos, $Teléfono, $Correo, $RolidRol, $EstadoCodigoEstado, $GeneroidGenero)
    {        
        $this->Conexion = Conectarse();
    
        $sql = "INSERT INTO usuario (Tipo_Documento, Num_Documento, Nombres, Apellidos, Teléfono, Correo, RolidRol, EstadoCodigoEstado, GeneroidGenero)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("sissisiii", $Tipo_Documento, $Num_Documento, $Nombres, $Apellidos, $Teléfono, $Correo, $RolidRol, $EstadoCodigoEstado, $GeneroidGenero);
        $stmt->execute();
        $stmt->close();
    }
// Modificación necesaria para el método consultarUsuario en la clase Usuario

public function consultarUsuario($Num_Documento = null)
{
    $resultado = null;
    
    if ($Num_Documento === null) { 
        $sql = "SELECT Tipo_Documento, Num_Documento, Nombres, Apellidos, Teléfono, Correo, 
        (SELECT tipoRol FROM rol WHERE usuario.RolidRol=idRol) AS RolidRol,
        (SELECT tipoEstado FROM estado WHERE usuario.EstadoCodigoEstado=CodigoEstado) AS EstadoCodigoEstado, 
        (SELECT Nombre FROM genero WHERE usuario.GeneroidGenero= idGenero) AS GeneroidGenero 
        from usuario;";

        $resultado = $this->Conexion->query($sql);
    } else {
        $sql = "SELECT Tipo_Documento, Num_Documento, Nombres, Apellidos, Teléfono, Correo, 
        (SELECT tipoRol FROM rol WHERE usuario.RolidRol=idRol) AS RolidRol,
        (SELECT tipoEstado FROM estado WHERE usuario.EstadoCodigoEstado=CodigoEstado) AS EstadoCodigoEstado, 
        (SELECT Nombre FROM genero WHERE usuario.GeneroidGenero= idGenero) AS GeneroidGenero 
        from usuario WHERE Num_Documento= ?";

        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("s", $Num_Documento);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
    }
    
    return $resultado;
}

    public function actualizarUsuario($Tipo_Documento, $Num_Documento, $Nombres, $Apellidos, $Teléfono, $Correo, $RolidRol, $EstadoCodigoEstado, $GeneroidGenero)
    {
        $this->Conexion = Conectarse();
     
        $sql = "UPDATE usuario SET Tipo_Documento=?, Nombres=?, Apellidos=?, Teléfono=?, Correo=?, RolidRol=?, EstadoCodigoEstado=?, GeneroidGenero=? WHERE Num_Documento=?";
         
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("sssssiiii", $Tipo_Documento, $Nombres, $Apellidos, $Teléfono, $Correo, $RolidRol, $EstadoCodigoEstado, $GeneroidGenero, $Num_Documento);

        $resultado = $stmt->execute();

        $stmt->close();
     
        return $resultado;
    }

    public function borrarUsuario($Num_Documento)
    {
        $this->Conexion = Conectarse();
     
        $sql = "UPDATE usuario SET EstadoCodigoEstado = 0 WHERE Num_Documento=?";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("i", $Num_Documento);
        $resultado = $stmt->execute();
     
        $stmt->close();
     
        return $resultado;
    }

    public function ConsultarRol()
    {
        $sql = "SELECT idRol, tipoRol FROM rol"; 
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }
    
    public function ConsultarEstado()  
    {  
        $sql = "SELECT CodigoEstado, tipoEstado FROM estado WHERE tipoEstado <> 'AGOTADO'";  
        $resultado = $this->Conexion->query($sql);  
        return $resultado;  
    }

    public function ConsultarGenero()
    {
        $sql = "SELECT idGenero, Nombre FROM genero";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    // Destructor para cerrar la conexión
    public function __destruct()
    {
        if ($this->Conexion) {
            $this->Conexion->close();
        }
    }
}
