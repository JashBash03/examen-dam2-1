<?php
// Datos de la base de datos
$servername = "mysql";
$username = "user";
$password = "userpassword";
$dbname = "mydb";

// Crear conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "<h1>¡Hola Mundo!</h1>";
echo "<p>Fecha y hora actual: " . date("Y-m-d H:i:s") . "</p>";
echo "<p>Versión de PHP: " . phpversion() . "</p>";
echo "<p>Versión de Apache: " . apache_get_version() . "</p>";
echo "<p>IP del servidor: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>IP del cliente: " . $_SERVER['REMOTE_ADDR'] . "</p>";

$conn->close();
?>