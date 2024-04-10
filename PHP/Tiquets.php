<?php
include('Conexion.php');

// Crear una instancia de la clase Conexion
$conexion = new Conexion();

// Obtener la conexión utilizando el método conexion()
$conn = $conexion->conexion();

// Verificar si la conexión se estableció correctamente
if ($conn) {
    // Realizar la consulta para obtener los tiquetes
    $consulta = "SELECT * FROM `tiquete`";
    $resultado = $conn->query($consulta);

    if ($resultado) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mostrar Tiquetes</title>
        </head>
        <body>
            <h1>Tiquetes Registrados</h1>
            <table border="1">
                <tr>
                    <th>IMAGEN</th>
                    <th>Asunto</th>
                    <th>Descripción</th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                    <th>Fecha de Asignación</th>
                </tr>
                <?php while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><img src="data:image/jpeg;base64,<?php echo base64_encode($fila['imagenProblema']); ?>" /></td>
                        <td><?php echo $fila['Asunto']; ?></td>
                        <td><?php echo $fila['Descripcion']; ?></td>
                        <td><?php echo $fila['Prioridad']; ?></td>
                        <td><?php echo $fila['Estado']; ?></td>
                        <td><?php echo $fila['fecha_asignacion']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </body>
        </html>
        <?php
    } else {
        echo "Error al ejecutar la consulta";
    }
} else {
    echo "NO SE PUDO ESTABLECER LA CONEXIÓN CON LA BASE DE DATOS";
}
?>
