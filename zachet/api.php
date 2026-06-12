<?php

include_once __DIR__ . '\read_database.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') { 
    $query = "INSERT INTO products_user (basket_id, name_product) VALUES (?, ?)";

    $databases = connect_databases();
    $stmt = $databases -> prepare($query);
    var_dump($_POST);
    $stmt -> execute([
        $_POST['basket_id'],
        $_POST['name_product']
    ]);
}