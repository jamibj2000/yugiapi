<?php

$servername = "localhost";  // Nombre del servidor de la base de datos
$username = "root";     // Nombre de usuario de la base de datos
$password = "";  // Contraseña de la base de datos
$dbname = "yugidb";     // Nombre de la base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión tuvo éxito
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

?>