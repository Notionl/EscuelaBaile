<?php
// La línea del 3 a la 6 sirve para hacer la conexión a la base de datos..
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "escuelabaile"; //Nombre de la Base de Datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Esto es para verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Esto es para la extracción de los datos del formulario html..
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$grado = $_POST['grado'];
$telefono = $_POST['telefono'];

// Aquí se insertan en la base de datos, donde la tabla tiene por nombre "alumnos" y las variables son nombre, edad...
$sql = "INSERT INTO alumnos (nombre, edad, grado, telefono) VALUES ('$nombre', $edad, '$grado', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente";
} else {
    echo "Error al agregar alumno: " . $conn->error;
}

// Aquí cierras la conexión con la base de datos
$conn->close();
?>
