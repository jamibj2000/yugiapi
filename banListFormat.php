<?php
require "db.php";
require "access.php";

$dataSend = [];
$data = file_get_contents("banlist.json");
$products = json_decode($data, true);
 
foreach ($products as $product) {
    array_push($dataSend, ["Data"=>$product]);
}

// BAN LIST DE ESTADO RELACIONAL CON LOS EVENTOS QUE CREE EL ADMIN

// $cardsFormat = [
//     "cards" => [
//         "Destiny hero",
//         "Raigeki",
//         "Time wizard",
//         "Dark magician",
//         "Neo Spacian HERO",
//         "Slifer, sky dragon"
//     ]
// ];

// $decksFormat = [
//     "cards" => [
//         "Destiny hero",
//         "Raigeki",
//         "Time wizard",
//         "Dark magician",
//         "Neo Spacian HERO",
//         "Slifer, sky dragon"
//     ]
// ];

echo json_encode($products);