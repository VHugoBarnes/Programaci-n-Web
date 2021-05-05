<?php

$conexion = mysqli_connect("localhost", "root", "maliakaka55", "claseej");

// Comprobar si la conexión fue exitosa
if(mysqli_connect_errno()) {
    echo "La conexión a la base de datos ha fallado: " . mysqli_connect_error();
}


// Comprobar que los datos vengan limpios
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($conexion, $_POST['nombre']) : null;
$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($conexion, $_POST['apellidos']) : null;
$direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($conexion, $_POST['direccion']) : null;
$email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, $_POST['email']) : null;
$telefono = isset($_POST['telefono']) ? mysqli_real_escape_string($conexion, $_POST['telefono']) : null;
$sexo = isset($_POST['sexo']) ? mysqli_real_escape_string($conexion, $_POST['sexo']) : null;

// Insertar en la base de datos
$sql = "INSERT INTO visitantes VALUES(null, '$nombre', '$apellidos', '$direccion', '$email', '$telefono', '$sexo');";
$insert = mysqli_query($conexion, $sql);

if($insert) {
    echo "<h1>Visitante registrado correctamente</h1>";
    echo "<a href='ejercicio_db.php'>Ingresar otro visitante</a>";
    // header("Location: ejercicio_db.php");
} else {
    echo "<h1>No se ha podido registrar al visitante, intente de nuevo</h1>";
    echo "<h2>". mysqli_error($conexion) ."</h2>";
    echo "<a href='ejercicio_db.php'>Ingresar otro visitante</a>";
}