
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stilo.css">
    <title>Info de pacientes</title>
    <!-- hacer un CRUD de pacientes y enfermero que atiende, validar, y hacer 
    filtros de info de pacientes y hacer reportes por asi decirlo acciony por el momento seria todo hasta el momento-->
</head>
<body>
    <img class="logo" src="img/logoservicio.png" alt="">
    <img class="logo2" src="img/logouas.jpg" alt="">
    <h1>Gestor de informacion de pacientes de comunidad</h1>

    <form class="principal" action="guardar.php" method="post">
        <label for="">Fecha e informes de atencion: </label>
        <input type="date" name="fecha_atencion">
        <input type="text" name="nombre_enfermero" placeholder="Nombre del enfermero">
        <input type="text" name="nombre_paciente" placeholder="Nombre del paciente">
        <input type="text" name="edad" placeholder="Edad del paciente">
        <input type="text" name="peso" placeholder="Peso">
        <input type="text" name="altura" placeholder="Estatura">
        <input type="text" name="presion_arterial" placeholder="Presion arterial">
        <input type="text" name="SpO2" placeholder="SpO2">
        <input type="text" name="temperatura" placeholder="Temperatura">
        <input type="text" name="glucosa" placeholder="Glucosa">
        <input type="text" name=frecuencia_respiratoria placeholder="Frecuencia Respiratoria">
        <input type="text" name="frecuencia_cardiaca" placeholder="Frecuencia Cardiaca">
        <textarea name="sintomas" id="" cols="30" rows="10" placeholder="sintomas"></textarea>
        <button type="submit" name="accion" value="guardar">Guardar Datos</button>
        
    </form>
    <form class="descargar" action="descargar.php" method="post">
        <button type="submit">Descargar Datos</button>
    </form>
<!-- Menú de Navegación -->
<nav>
    <a href="enfermeros.php">Registro de Enfermeros</a> |
    <a href="index.php">Registro de pacientes</a>
</nav>

</body>
</html>

