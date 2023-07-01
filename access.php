<?php
$allowedOrigins = array(
    'http://localhost:3000',
    'http://127.0.0.1:5500'
);

$origin = $_SERVER['HTTP_ORIGIN'];

if (in_array($origin, $allowedOrigins)) {
    header('Access-Control-Allow-Origin: ' . $origin);
}