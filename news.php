<?php

require "access.php";
require "db.php";

$sql = "SELECT * FROM news";

$result = $conn->query($sql);
$jsonData = [];
while ($row = $result->fetch_assoc()) {
    array_push($jsonData, [ 
        "title" => $row["title"],
        "description" => $row["description"],
        "title_img" => $row["title_image"]
    ]);
}
echo json_encode($jsonData);
