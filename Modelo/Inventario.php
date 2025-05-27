<?php
include 'Conexion.php';
class Medico
{
    private $CodigoProducto;
    private $Nombre;
    private $Precio;
    private $Stock;
    private $IVA;
    private $CategoriaCodigoCategoria;
    private $EstadoCodigoEstado;
    private $Descripcion;
    private $MarcaCodigoMarca;
    private $TallasCodigoTallas;
    private $Num_Documento;
    private $Conexion;


    public function __construct($CodigoProducto = null, $Nombre = null, $Precio = null, $Stock = null, $IVA = null, $CategoriaCodigoCategoria = null, $EstadoCodigoEstado = null, $Descripcion = null,  $MarcaCodigoMarca = null, $TallasCodigoTallas = null, $Num_Documento = null)
    {
        $this->CodigoProducto = $CodigoProducto;
        $this->Nombre = $Nombre;
        $this->Precio = $Precio;
        $this->Stock = $Stock;
        $this->IVA = $IVA;
        $this->CategoriaCodigoCategoria = $CategoriaCodigoCategoria;
        $this->EstadoCodigoEstado = $EstadoCodigoEstado;
        $this->Descripcion = $Descripcion;
        $this->MarcaCodigoMarca = $MarcaCodigoMarca;
        $this->TallasCodigoTallas = $TallasCodigoTallas;;
        $this->Num_Documento = $Num_Documento;
        $this->Conexion = Conectarse();
    }
    
    public function agregarProducto ($Nombre, $Precio, $Stock, $IVA, $CategoriaCodigoCategoria, $Descripcion, $MarcaCodigoMarca, $TallasCodigoTallas, $Num_Documento)
    {        
        $this->Conexion = Conectarse();
    
        $sql = "INSERT INTO producto (Nombre, Precio, Stock, IVA, CategoriaCodigoCategoria, EstadoCodigoEstado, Descripcion, MarcaCodigoMarca, TallasCodigoTallas, Num_Documento)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("siiiiisiii", $Nombre, $Precio, $Stock, $IVA, $CategoriaCodigoCategoria, $Descripcion, $MarcaCodigoMarca, $TallasCodigoTallas, $Num_Documento);
        $stmt->execute();
        $stmt->close();
        $this->Conexion->close();
    }

    public function consultarProducto($CodigoProducto)
    {
        $this->Conexion = Conectarse();

        $sql = "SELECT * FROM producto WHERE CodigoProducto = ?";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("i", $CodigoProducto);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        $this->Conexion->close();
        return $resultado;   
    }

    public function consultarProductos()
    {
        $this->Conexion = Conectarse();

        $sql = "SELECT * FROM producto";
        $resultado = $this->Conexion->query($sql);
        $this->Conexion->close();
        return $resultado;  
    }

    public function actualizarProducto($CodigoProducto, $Nombre, $Precio, $Stock, $IVA, $CategoriaCodigoCategoria, $EstadoCodigoEstado, $Descripcion, $MarcaCodigoMarca, $TallasCodigoTallas, $Num_Documento)
    {
        $this->Conexion = Conectarse();
     
        $sql = "UPDATE producto SET Nombre=?, Precio=?, Stock=?, IVA=?, CategoriaCodigoCategoria=?, EstadoCodigoEstado=?, Descripcion=?, MarcaCodigoMarca=?, TallasCodigoTallas=?, Num_Documento=?,  WHERE CodigoProducto=?";
         
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("ssssssi", $CodigoProducto, $Nombre, $Precio, $Stock, $IVA, $CategoriaCodigoCategoria, $EstadoCodigoEstado, $Descripcion, $MarcaCodigoMarca, $TallasCodigoTallas, $Num_Documento);

        $resultado = $stmt->execute();

        $stmt->close();
        $this->Conexion->close();
     
        return $resultado;
    }

    public function borrarProducto($CodigoProducto)
    {
        $this->Conexion = Conectarse();
     
        $sql = "UPDATE producto SET EstadoCodigoEstado = 'INACTIVO' WHERE CodigoProducto=?";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("i", $CodigoProducto);
        $resultado = $stmt->execute();
     
        $stmt->close();
        $this->Conexion->close();
     
        return $resultado;
    }

    public function obtenerProducto()
    {
        $sql = "SELECT MedIdentificacion, MedNombres FROM Medicos WHERE MedEstado = 'Activo'";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    public function obtenerPacientes()
    {
        $sql = "SELECT PacIdentificacion, PacNombres FROM Pacientes";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    public function obtenerConsultorios()
    {
        $sql = "SELECT ConNumero, ConNombre FROM Consultorios";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

}
?>