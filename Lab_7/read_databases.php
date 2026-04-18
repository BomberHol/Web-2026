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

function get_post(PDO $databases): array {
    $query = "SELECT * FROM post";
    $stmt = $databases -> query($query);
    return $stmt -> fetchAll();
}

$databases = connect_databases();
$posts = get_post($databases);