<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "enfermeros";

    $enlace = mysqli_connect ($servidor, $usuario, $clave,  $baseDeDatos );

?>
<html>
<h1>Registro de Enfermeros</h1>

<form action="#" name="enfermeros" method="post">

<input type="text" name="nombre" placeholder="nombre">
<input type="email" name="correo" placeholder="correo">
<input type="text" name="telefono" placeholder="telefono">

<input type= "submit" name="registro">
<input type="reset">

</form>

</html>


<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column; /* Cambio para acomodar verticalmente */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="submit"],
        form input[type="reset"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        form input[type="reset"] {
            background-color: #d9534f;
            color: white;
            cursor: pointer;
        }

        form input[type="reset"]:hover {
            background-color: #c9302c;
        }
    </style>
<?php

if(isset($_POST['registro'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    
    $insertar = "INSERT INTO datos_enfermero (nombre, correo, telefono) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($enlace, $insertar);
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $correo, $telefono);
    mysqli_stmt_execute($stmt);
   
}

  
?>

<!-- Menú de Navegación -->
<nav>
    <a href="enfermeros.php">Registro de Enfermeros</a> |
    <a href="index.php">Registro de pacientes</a>
</nav>

