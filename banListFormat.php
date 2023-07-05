<?php
require "db.php";
require "access.php";

// BAN LIST DE ESTADO RELACIONAL CON LOS EVENTOS QUE CREE EL ADMIN

$cardsFormat = [
    "cards" => [
        "Destiny hero",
        "Raigeki",
        "Time wizard",
        "Dark magician",
        "Neo Spacian HERO",
        "Slifer, sky dragon"
    ]
];

echo json_encode($cardsFormat);