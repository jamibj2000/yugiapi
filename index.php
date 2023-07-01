<?php

require "access.php";
require "db.php";

// Consulta SQL
$sql = "SELECT * FROM users";
$jsonData = [];


// Ejecutar la consulta
$result = $conn->query($sql);

// Verificar si la consulta tuvo resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados de la consulta
    while ($row = $result->fetch_assoc()) {
        // Acceder a los datos de cada fila
        
        // Hacer algo con los datos...
        array_push($jsonData, [ 
            "nickname" => $row["nickname"],
            "card" => $row["card"]
        ]);
    }
    echo json_encode($jsonData);
} else {
    echo "No se encontraron resultados.";
}
