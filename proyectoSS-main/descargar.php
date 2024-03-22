<?php
// Nombre del archivo CSV desde donde se descargarán los datos
$archivo_csv = "datos.csv";

// Preparar el archivo para su descarga
if(file_exists($archivo_csv)) {
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="'.basename($archivo_csv).'";');
    readfile($archivo_csv); // Leer el contenido del archivo y enviarlo al navegador
} else {
    echo "El archivo no existe.";
    // Aquí también podrías redirigir al usuario a otra página o mostrar un mensaje de error.
}
exit;
?>
