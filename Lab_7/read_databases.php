<?php

const ID = 'id';
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
    if ($nameTable === 'users') {
        $query = "SELECT * FROM " . $nameTable . " ORDER BY user_id ASC";
    }
    else if ($nameTable === 'posts') {
        $query = "SELECT * FROM " . $nameTable . " ORDER BY post_id DESC";
    }
    else {
        $query = "SELECT * FROM ". $nameTable;
    }
   
    $stmt = $databases -> query($query);
    return $stmt -> fetchAll();
}

function get_posts(PDO $databases): array {
    $posts_data = get_table($databases, 'posts');
    $photos_data = get_table($databases, 'photos');

    $posts = [];
    foreach ($posts_data as $post) {
        $photos = [];
        foreach ($photos_data as $photo) {
            if ($photo['post_id'] == $post['post_id']) {
                $photos[] = $photo['photo'];
            }
        }
        $post['photos'] = $photos;
        $posts[] = $post;
    }
    
    return $posts;

}

$databases = connect_databases();
// left join mysql
$posts = get_posts($databases);
$user = get_table($databases, 'users');

