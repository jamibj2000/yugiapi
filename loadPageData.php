<?php

require "access.php";
require "db.php";

// Consulta SQL
$userId = $_GET["id"];
$sql = "SELECT users.id, users.nickname, rols.rol_level, rols.rol_name
FROM users
JOIN rols ON users.rol = rols.id
WHERE users.id = " . $userId;
$jsonData = [];

// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta tuvo resultados
// if ($result->num_rows > 0) {
    // Recorrer los resultados de la consulta
while ($row = $result->fetch_assoc()) {
    // Acceder a los datos de cada fila
    
    // Hacer algo con los datos...
    array_push($jsonData, [ 
        "nickname" => $row["nickname"],
        "rol" => $row["rol_name"],
        "level" => $row["rol_level"]
    ]);
}
echo json_encode($jsonData);
// } else {
//     echo "No se encontraron resultados.";
// }
