<?php
// Conexión a la base de datos (asegúrate de configurar esto correctamente)
$servername = "localhost";
$username = "root";
$password = "";
$database = "formulario";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['alumno'] ?? '';
$direccion = $_POST['dir'] ?? '';
$codigo_postal = $_POST['cp'] ?? '';
$correo = $_POST['correo'] ?? '';
$telefono = $_POST['tel'] ?? '';
$edad = $_POST['edad'] ?? '';
$fecha_pago = $_POST['fechap'] ?? '';
$hora_entrada = $_POST['horae'] ?? '';
$color_favorito = $_POST['color_favorito'] ?? '';
$ciudad = $_POST['Ciudad'] ?? '';
$comentarios = $_POST['comentarios'] ?? '';
$genero = $_POST['genero'] ?? '';

// Almacenar los datos en la base de datos
$sql = "INSERT INTO respuestas (nombre, direccion, codigo_postal, correo, telefono, edad, fecha_pago, hora_entrada, color_favorito, ciudad, comentarios, genero)
VALUES ('$nombre', '$direccion', '$codigo_postal', '$correo', '$telefono', '$edad', '$fecha_pago', '$hora_entrada', '$color_favorito', '$ciudad', '$comentarios', '$genero')";

if ($conn->query($sql) === TRUE) {
    echo "Datos almacenados correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
