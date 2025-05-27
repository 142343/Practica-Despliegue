<?php
include '../Conexion.php'; // Asegúrate de que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigoProducto = isset($_POST['CodigoProducto']) ? $_POST['CodigoProducto'] : '';

    // Preparar la consulta SQL
    $sql = "SELECT * FROM producto WHERE CodigoProducto LIKE ";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%$codigoProducto%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    // Generar la tabla HTML
    echo "<table class='table table-striped'>";
    echo "<thead><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr></thead>";
    echo "<tbody>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['precio']) . "</td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
