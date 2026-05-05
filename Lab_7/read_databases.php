<?php

//$method = $_SERVER['REQUEST_METHOD'];

function connect_databases(): PDO {
    $dsn = 'mysql:host=localhost;dbname=blog';
    $user = 'root';
    $password = '';
    $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    return new PDO($dsn, $user, $password, $option);
}

function get_table(PDO $databases, string $nameTable): array {
    $query = "SELECT * FROM " . $nameTable . " ORDER BY id DESC";
    $stmt = $databases -> query($query);
    return $stmt -> fetchAll();
}

$databases = connect_databases();
$posts = get_table($databases, 'post');
$user = get_table($databases, 'user');