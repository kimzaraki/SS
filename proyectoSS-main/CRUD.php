<?php
include 'conexion.php'; // Incluye el archivo de conexión

// Función para insertar un enfermero
function insertarEnfermero($nombre, $correo, $telefono) {
    global $enlace; // Utiliza la variable $enlace del archivo de conexión

    $insertar = "INSERT INTO datos_enfermero (nombre, correo, telefono) VALUES (?, ?, ?)";

    // Preparar la consulta para evitar inyección de SQL
    $stmt = mysqli_prepare($enlace, $insertar);

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $correo, $telefono);

    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Cerrar el statement
    mysqli_stmt_close($stmt);
}
?>
