<?php
include '../Modelo/Conexion.php';

class Salida
{
    private $IdTicketSalida;
    private $FechaSalida;
    private $PrecioTotal;
    private $ProductoCodigoProducto;
    private $Cantidad;
    private $ValorUnitario;
    private $Empleado;
    private $Conexion;

    public function __construct($IdTicketSalida = null, $FechaSalida = null, $PrecioTotal = null, $ProductoCodigoProducto = null, $Cantidad = null, $ValorUnitario = null, $Empleado = null)
    { 
        $this->IdTicketSalida = $IdTicketSalida;
        $this->FechaSalida = $FechaSalida;
        $this->PrecioTotal = $PrecioTotal;
        $this->ProductoCodigoProducto = $ProductoCodigoProducto;
        $this->Cantidad = $Cantidad;
        $this->ValorUnitario= $ValorUnitario;
        $this->Empleado= $Empleado;
        $this->Conexion = Conectarse();
    }

    public function agregarSalida($FechaSalida, $Cantidad, $ProductoCodigo, $Empleado)
{
    $this->Conexion->begin_transaction();

    try {
        $sqlProducto = "SELECT Precio, IVA, Stock FROM producto WHERE CodigoProducto = ?";
        $stmtProducto = $this->Conexion->prepare($sqlProducto);
        $stmtProducto->bind_param("i", $ProductoCodigo);
        $stmtProducto->execute();
        $resultadoProducto = $stmtProducto->get_result();
        
        if ($resultadoProducto->num_rows === 0) {
            throw new Exception("Producto no encontrado.");
        }

        $producto = $resultadoProducto->fetch_assoc();
        $PrecioUnitario = $producto['Precio'];
        $IVA = $producto['IVA'];
        $StockActual = $producto['Stock'];

        if ($StockActual < $Cantidad) {
            throw new Exception("No hay suficiente stock para realizar la salida.");
        }

        $PrecioSinIVA = $PrecioUnitario * $Cantidad; 
        $PrecioTotal = $PrecioSinIVA + ($PrecioSinIVA * ($IVA / 100)); 

       
        $sqlTicket = "INSERT INTO ticket_salida (FechaSalida, PrecioTotal) VALUES (?, ?)";
        $stmtTicket = $this->Conexion->prepare($sqlTicket);
        $stmtTicket->bind_param("sd", $FechaSalida, $PrecioTotal);
        $stmtTicket->execute();

      
        if ($stmtTicket->affected_rows <= 0) {
            throw new Exception("Error al insertar en ticket_salida");
        }

        $IdTicketSalida = $this->Conexion->insert_id;

        $sqlDetalle = "INSERT INTO detalle_salida (ProductoCodigoProducto, SalidaIdTicketSalida, Cantidad, ValorUnitario, Empleado) VALUES (?, ?, ?, ?, ?)";
        $stmtDetalle = $this->Conexion->prepare($sqlDetalle);
        $stmtDetalle->bind_param("iisds", $ProductoCodigo, $IdTicketSalida, $Cantidad, $PrecioUnitario, $Empleado);
        $stmtDetalle->execute();

      
        if ($stmtDetalle->affected_rows <= 0) {
            throw new Exception("Error al insertar en detalle_salida");
        }

        // Actualizar el stock del producto
        $NuevoStock = $StockActual - $Cantidad;
        $sqlActualizarStock = "UPDATE producto SET Stock = ? WHERE CodigoProducto = ?";
        $stmtActualizarStock = $this->Conexion->prepare($sqlActualizarStock);
        $stmtActualizarStock->bind_param("ii", $NuevoStock, $ProductoCodigo);
        $stmtActualizarStock->execute();

      
        if ($stmtActualizarStock->affected_rows <= 0) {
            throw new Exception("Error al actualizar el stock del producto");
        }

        $this->Conexion->commit();

      
        $stmtTicket->close();
        $stmtDetalle->close();
        $stmtProducto->close();
        $stmtActualizarStock->close();
    } catch (Exception $e) {
        $this->Conexion->rollback();
        error_log("Error en agregarSalida: " . $e->getMessage());
        throw new Exception($e->getMessage()); 
    }
}




    public function consultarSalida($IdTicketSalida = null)
    {
        if ($IdTicketSalida === null) { 
            $sql = "SELECT 
                        TS.IdTicketSalida, 
                        TS.FechaSalida, 
                        TS.PrecioTotal, 
                        GROUP_CONCAT(DISTINCT P.Nombre SEPARATOR '<br>') AS Productos, 
                        GROUP_CONCAT(DS.Cantidad SEPARATOR '<br>') AS Cantidades, 
                        GROUP_CONCAT(DS.ValorUnitario SEPARATOR '<br>') AS ValoresUnitarios, 
                        GROUP_CONCAT(U.Nombres SEPARATOR '<br>') AS Empleados
                    FROM 
                        ticket_salida AS TS
                    INNER JOIN 
                        detalle_salida AS DS ON TS.IdTicketSalida = DS.SalidaIdTicketSalida
                    INNER JOIN 
                        producto AS P ON DS.ProductoCodigoProducto = P.CodigoProducto
                    INNER JOIN 
                        usuario AS U ON DS.Empleado = U.Num_Documento
                    GROUP BY 
                        TS.IdTicketSalida, TS.FechaSalida, TS.PrecioTotal";
    
            $resultado = $this->Conexion->query($sql);
        } else {
            $sql = "SELECT * FROM ticket_salida WHERE IdTicketSalida = ?";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bind_param("i", $IdTicketSalida); 
            $stmt->execute();
            $resultado = $stmt->get_result();
            $stmt->close();
        }
        
        return $resultado;
    }
    
    
    
    public function ConsultarProducto()
    {
        $sql = "SELECT CodigoProducto, Nombre FROM producto;";
        $resultado = $this->Conexion->query($sql);
        return $resultado;
    }
    
    

    public function __destruct()
    {
        if ($this->Conexion) {
            $this->Conexion->close();
        }
    }
}
?>
