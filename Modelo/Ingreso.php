<?php
include '../Modelo/Conexion.php';

class Ingreso
{
    private $idTicketIngreso;
    private $FechaIngresoProducto;
    private $ProductoCodigoProducto;
    private $Cantidad;
    private $Descripción;
    private $PrecioIngreso;
    private $PrecioTotal;
    private $Empleado;
    private $Conexion;

    public function __construct($idTicketIngreso = null, $FechaIngresoProducto = null, $ProductoCodigoProducto = null, $Cantidad = null, $Descripción = null, $PrecioIngreso = null, $PrecioTotal = null, $Empleado = null)
    {
        $this->idTicketIngreso = $idTicketIngreso;
        $this->FechaIngresoProducto = $FechaIngresoProducto;
        $this->ProductoCodigoProducto = $ProductoCodigoProducto;
        $this->Cantidad = $Cantidad;
        $this->Descripción = $Descripción;
        $this->PrecioIngreso = $PrecioIngreso;
        $this->PrecioTotal = $PrecioTotal;
        $this->Empleado = $Empleado;

        $this->Conexion = Conectarse();
    }

    public function agregarIngreso($FechaIngresoProducto, $ProductoCodigoProducto, $Cantidad, $Descripción, $PrecioIngreso, $Empleado)
    {
      
        $PrecioTotal = $Cantidad * $PrecioIngreso;
    
        $this->Conexion->begin_transaction();
    
        try {
            // Verificar el stock del producto
            $sqlProducto = "SELECT Stock FROM producto WHERE CodigoProducto = ?";
            $stmtProducto = $this->Conexion->prepare($sqlProducto);
            $stmtProducto->bind_param("i", $ProductoCodigoProducto);
            $stmtProducto->execute();
            $resultadoProducto = $stmtProducto->get_result();
    
            if ($resultadoProducto->num_rows === 0) {
                throw new Exception("Producto no encontrado.");
            }
    
            $producto = $resultadoProducto->fetch_assoc();
            $StockActual = $producto['Stock'];
    
            
            $sql = "INSERT INTO ticket_ingreso (FechaIngresoProducto, PrecioTotal) VALUES (?, ?)";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bind_param("sd", $FechaIngresoProducto, $PrecioTotal);
    
            if (!$stmt->execute()) {
                throw new Exception("Error en insertar ticket_ingreso: " . $stmt->error);
            }
    
            $idTicketIngreso = $this->Conexion->insert_id;
    
            $sqlDetalle = "INSERT INTO detalle_ingreso (ProductoCodigoProducto, TicketSalidaidTicketIngreso, Cantidad, Descripción, PrecioIngreso, Empleado) VALUES (?, ?, ?, ?, ?, ?)";
            $stmtDetalle = $this->Conexion->prepare($sqlDetalle);
            $stmtDetalle->bind_param("iisiii", $ProductoCodigoProducto, $idTicketIngreso, $Cantidad, $Descripción, $PrecioIngreso, $Empleado);
    
            if (!$stmtDetalle->execute()) {
                throw new Exception("Error en insertar detalle_ingreso: " . $stmtDetalle->error);
            }
    




            $NuevoStock = $StockActual + $Cantidad; 
            $sqlActualizarStock = "UPDATE producto SET Stock = ? WHERE CodigoProducto = ?";
            $stmtActualizarStock = $this->Conexion->prepare($sqlActualizarStock);
            $stmtActualizarStock->bind_param("ii", $NuevoStock, $ProductoCodigoProducto);
    
            if (!$stmtActualizarStock->execute()) {
                throw new Exception("Error al actualizar el stock del producto: " . $stmtActualizarStock->error);
            }
    
            
            $this->Conexion->commit();
    
            
            $stmt->close();
            $stmtDetalle->close();
            $stmtProducto->close();
            $stmtActualizarStock->close();
        } catch (Exception $e) {
            


            
            $this->Conexion->rollback();
            error_log("Error en agregarIngreso: " . $e->getMessage());
            throw new Exception("Error al agregar el ingreso: " . $e->getMessage());
        }
    }
    

    public function consultaringreso($idTicketIngreso = null)
    {
        if ($idTicketIngreso === null) {
            $sql = "SELECT 
                        TS.idTicketIngreso, 
                        TS.FechaIngresoProducto, 
                        TS.PrecioTotal, 
                        GROUP_CONCAT(DISTINCT P.Nombre SEPARATOR '<br>') AS ProductoCodigoProducto, 
                        GROUP_CONCAT(DS.Cantidad SEPARATOR '<br>') AS Cantidad,
                        GROUP_CONCAT(DS.Descripción SEPARATOR '<br>') AS Descripción,
                        GROUP_CONCAT(DS.PrecioIngreso SEPARATOR '<br>') AS PrecioIngreso, 
                        GROUP_CONCAT(U.Nombres SEPARATOR '<br>') AS Empleado
                    FROM 
                        ticket_ingreso AS TS
                    INNER JOIN 
                        detalle_ingreso AS DS ON TS.idTicketIngreso = DS.TicketSalidaidTicketIngreso
                    INNER JOIN 
                        producto AS P ON DS.ProductoCodigoProducto = P.CodigoProducto
                    INNER JOIN 
                        usuario AS U ON DS.Empleado = U.Num_Documento
                    GROUP BY 
                        TS.idTicketIngreso, TS.FechaIngresoProducto, TS.PrecioTotal";

            $resultado = $this->Conexion->query($sql);
        } else {
            $sql = "SELECT * FROM ticket_ingreso WHERE idTicketIngreso = ?";
            $stmt = $this->Conexion->prepare($sql);
            $stmt->bind_param("i", $idTicketIngreso);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $stmt->close();
        }
        return $resultado;
    }
}
?>
