<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');
$items = [
    ['id' => 1, 'name' => 'Youssef', 'age' => 22 , 'email' => 'youssef@email.com', 'country' => 'Morocco'],
    ['id' => 2, 'name' => 'Ahmed', 'age' => 33, 'email' => 'ahmed@email.com', 'country' => 'Egypt'],
    ['id' => 3, 'name' => 'Sabir', 'age' => 28, 'email' => 'sabir@email.com', 'country' => 'France'],
];

echo json_encode($items);
