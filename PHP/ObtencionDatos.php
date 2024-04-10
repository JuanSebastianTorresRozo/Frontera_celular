<?php
include('Conexion.php');

// Verificar si se ha enviado el formulario
if (isset($_POST['Enviar'])) {
    // Verificar los campos obligatorios que provienen del formulario
    if (
        strlen($_FILES['imagenProblema']['name']) >= 1 && 
        strlen($_POST['Asunto']) >= 1 && 
        strlen($_POST['Descripcion']) >= 1 &&
        strlen($_POST['prioridad']) >= 1 
       
    ) {
        // Crear una instancia de la clase Conexion
        $conexion = new Conexion();

        // Obtener la conexión utilizando el método conexion()
        $conn = $conexion->conexion();
        
        // Verificar si la conexión se estableció correctamente
        if ($conn) {
            $imagen = $_FILES['imagenProblema'];
            $asunto = trim($_POST['Asunto']);
            $descripcion = trim($_POST['Descripcion']);
            $prioridad = trim($_POST['prioridad']);
            $estado = isset($_POST['estado']) ? $_POST['estado'] : 'Abierto'; // Valor predeterminado 'Abierto'
            
            $fecha_asignacion = date("Y-m-d"); // Generar fecha de asignación automáticamente
            
            // Preparar la consulta SQL con el valor predeterminado para el estado
            $consulta = "INSERT INTO `tiquete`(`imagenProblema`,`Asunto`, `Descripcion`, `Prioridad`, `Estado`, `fecha_asignacion`) 
                        VALUES ('$imagen','$asunto','$descripcion','$prioridad','$estado','$fecha_asignacion')";
            
            // Ejecutar la consulta
            $resultado = $conn->query($consulta);
            
            // Verificar si la consulta se ejecutó correctamente
            if ($resultado) {
                ?>
                <h3>SE GUARDÓ CORRECTAMENTE EL TIQUETE</h3>
                <?php
            } else {
                ?>
                <h3>No se pudo guardar</h3>
                <?php
            }
        } else {
            echo "NO SE PUDO ESTABLECER LA CONEXIÓN CON LA BASE DE DATOS";
        }
    } else {
        ?>
        <h3>Faltan datos obligatorios en el formulario</h3>
        <?php
    }
}
?>
