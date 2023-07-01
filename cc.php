<?php
require "db.php";

$account = $_POST["account"];
$password = $_POST["password"];
$cardcode = $_POST["cardcode"];

$sql = "INSERT INTO users (nickname, password, card, created_by) VALUES ('$account', '$password', '$cardcode','1')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Usuario insertado correctamente";
} else {
    echo "Error al insertar usuario: " . $conn->error;
}