<?php
include '../Modelo/Conexion.php';


class  Categoria
{
    private $CodigoCategoría;
    private $Nombre;
    private $GeneroidGenero;
    private $Conexion;

    public function __construct($CodigoCategoría = null, $Nombre= null, $GeneroidGenero = null)
    {
        $this->CodigoCategoría  = $CodigoCategoría ;
        $this->Nombre = $Nombre;
        $this->GeneroidGenero = $GeneroidGenero;
        $this->Conexion = Conectarse();
    }

    public function agregarCategoria($Nombre, $GeneroidGenero)
    {        
        $this->Conexion = Conectarse();
    
        $sql = "INSERT INTO categoria (Nombre, GeneroidGenero) VALUES (?, ?)";  
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("si", $Nombre, $GeneroidGenero);
        $stmt->execute();
        $stmt->close();
    }

    
    public function ConsultarGenero()
    {
        $sql = "SELECT idGenero, Nombre FROM genero";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }
}




class  Marca
{
    private $CodigoMarca;
    private $Nombre;
    private $Conexion;

    public function __construct($CodigoMarca = null, $Nombre= null)
    {
        $this->CodigoMarca  = $CodigoMarca ;
        $this->Nombre = $Nombre;
        $this->Conexion = Conectarse();
    }

    public function agregarMarca($Nombre)
    {        
        $this->Conexion = Conectarse();
    
        $sql = "INSERT INTO marcas (Nombre) VALUES (?)";  
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("s", $Nombre);
        $stmt->execute();
        $stmt->close();
    }
}






class Talla
{
    private $CodigoTallas;
    private $Tallas;
    private $Conexion;

    public function __construct($CodigoTallas = null, $Tallas = null)
    {
        $this->CodigoTallas  = $CodigoTallas ;
        $this->Tallas = $Tallas;
        $this->Conexion = Conectarse();
    }

    public function agregarTalla($Tallas)
    {        
        $this->Conexion = Conectarse();
    
        $sql = "INSERT INTO tallas (Tallas) VALUES (?)";  
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("s", $Tallas);
        $stmt->execute();
        $stmt->close();
    }
}
class Producto
{
    private $CodigoProducto;
    private $Nombre;
    private $Precio;
    private $Stock;
    private $IVA;
    private $CategoriaCodigoCategorías;
    private $EstadoCodigoEstado;
    private $Descripcion;
    private $MarcasCodigoMarca;
    private $TallasCodigoTallas;
    private $Proveedor;
    private $Num_Documento;
    private $Imagen; 
    private $Conexion;

    public function __construct($CodigoProducto = null, $Nombre = null, $Precio = null, $Stock = null, $IVA = null, $CategoriaCodigoCategorías = null, $EstadoCodigoEstado = null, $Descripcion = null, $MarcasCodigoMarca = null, $TallasCodigoTallas = null, $Proveedor = null, $Num_Documento = 'ACTIVO', $Imagen = null) // Agregado parámetro de imagen
    {
        $this->CodigoProducto = $CodigoProducto;
        $this->Nombre = $Nombre;
        $this->Precio = $Precio;
        $this->Stock = $Stock;
        $this->IVA = $IVA;
        $this->CategoriaCodigoCategorías = $CategoriaCodigoCategorías;
        $this->EstadoCodigoEstado = $EstadoCodigoEstado;
        $this->Descripcion = $Descripcion;
        $this->MarcasCodigoMarca = $MarcasCodigoMarca;
        $this->TallasCodigoTallas = $TallasCodigoTallas;
        $this->Proveedor = $Proveedor;
        $this->Num_Documento = $Num_Documento;
        $this->Imagen = $Imagen; 
        $this->Conexion = Conectarse();
    }

    public function agregarProducto($Nombre, $Precio, $IVA, $Imagen, $CategoriaCodigoCategorías, $EstadoCodigoEstado, $Descripcion, $MarcasCodigoMarca, $TallasCodigoTallas, $Num_Documento)
{
    $sql = "INSERT INTO producto (Nombre, Precio, IVA, Imagen, CategoriaCodigoCategoría, EstadoCodigoEstado, Descripcion, MarcasCodigoMarca, TallasCodigoTallas, Num_Documento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $this->Conexion->prepare($sql);
    
    $stmt->bind_param("siissisiss", $Nombre, $Precio, $IVA, $Imagen, $CategoriaCodigoCategorías, $EstadoCodigoEstado, $Descripcion, $MarcasCodigoMarca, $TallasCodigoTallas, $Num_Documento);
    
    $stmt->execute();
    $stmt->close();
}



    public function consultarProducto($CodigoProducto = null) {
        if ($CodigoProducto === null) { 
            $sql = "SELECT 
                        `CodigoProducto`, 
                        `Nombre`, 
                        `Precio`, 
                        `Stock`, 
                        `IVA`, 
                        `Descripcion`, 
                        `Num_Documento`,
                        (SELECT Tallas FROM tallas WHERE producto.TallasCodigoTallas = CodigoTallas) AS tallas,
                        (SELECT Nombre FROM categoria WHERE producto.CategoriaCodigoCategoría = CodigoCategoría) AS categoria, 
                        (SELECT tipoEstado FROM estado WHERE producto.EstadoCodigoEstado = CodigoEstado) AS estado, 
                        (SELECT Nombre FROM marcas WHERE producto.MarcasCodigoMarca = CodigoMarca) AS marcas,
                        (SELECT Nombres FROM usuario WHERE producto.Num_Documento = Num_Documento) AS Nombres  
                    FROM `producto`;";
            $resultado = $this->Conexion->query($sql);
        } else {
            $sql = "SELECT 
                        `CodigoProducto`, 
                        `Nombre`, 
                        `Precio`, 
                        `Stock`, 
                        `IVA`, 
                        `Descripcion`, 
                        `Num_Documento`,
                        (SELECT Tallas FROM tallas WHERE producto.TallasCodigoTallas = CodigoTallas) AS tallas,
                        (SELECT Nombre FROM categoria WHERE producto.CategoriaCodigoCategoría = CodigoCategoría) AS categoria, 
                        (SELECT tipoEstado FROM estado WHERE producto.EstadoCodigoEstado = CodigoEstado) AS estado, 
                        (SELECT Nombre FROM marcas WHERE producto.MarcasCodigoMarca = CodigoMarca) AS marcas,
                        (SELECT Nombres FROM usuario WHERE producto.Num_Documento = Num_Documento) AS Nombres  
                    FROM `producto` WHERE CodigoProducto = ?";

            $stmt = $this->Conexion->prepare($sql);
            $stmt->bind_param("i", $CodigoProducto);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $stmt->close();
        }
        return $resultado;
    }

    public function actualizarProducto($CodigoProducto, $Nombre, $Precio, $IVA, $CategoriaCodigoCategorías, $EstadoCodigoEstado, $Descripcion, $MarcasCodigoMarca, $TallasCodigoTallas, $Num_Documento)
    {
        $sql = "UPDATE producto SET Nombre=?, Precio=?, IVA=?, CategoriaCodigoCategoría=?, EstadoCodigoEstado=?, Descripcion=?, MarcasCodigoMarca=?, TallasCodigoTallas=?,  Num_Documento=? WHERE CodigoProducto=?";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("siiiisiiii", $Nombre, $Precio, $IVA, $CategoriaCodigoCategorías, $EstadoCodigoEstado, $Descripcion, $MarcasCodigoMarca, $TallasCodigoTallas, $Num_Documento, $CodigoProducto);
        $resultado = $stmt->execute();
        $stmt->close();
        
        return $resultado;
    }

    public function borrarProducto($CodigoProducto)
    {
        $sql = "UPDATE producto SET EstadoCodigoEstado = 'INACTIVO' WHERE CodigoProducto=?";
        $stmt = $this->Conexion->prepare($sql);
        $stmt->bind_param("i", $CodigoProducto);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    public function ConsultarCategoria()
    {
        $sql = "SELECT CodigoCategoría, Nombre FROM categoria"; 
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    public function ConsultarMarcas()
    {
        $sql = "SELECT CodigoMarca, Nombre FROM marcas";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    public function ConsultarTallas()
    {
        $sql = "SELECT CodigoTallas, Tallas FROM tallas";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    public function ConsultarEstados()
    {
        $sql = "SELECT CodigoEstado, tipoEstado FROM estado";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }
    

    public function ConsultarUsuario()
    {
        $sql = "SELECT * FROM usuario WHERE RolidRol = 24;";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }

    

    public function __destruct()
    {
      
        if ($this->Conexion) {
            $this->Conexion->close();
        }
    }

    
    public function buscarTarea($busqueda) {
        $sql = "SELECT * FROM producto WHERE Nombre LIKE ? OR CategoiaCodigoCategoría LIKE ? OR CodigoProducto = ?";
        $stmt = $this->Conexion->prepare($sql);
        $param = '%' . $busqueda . '%';
        $stmt->bind_param('ssi', $param, $param, $busqueda);
        $stmt->execute();
        return $stmt->get_result();
    }

}


?>