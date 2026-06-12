<?php

function connect_databases(): PDO {
    $dsn = 'mysql:host=localhost;dbname=magazine';
    $user = 'root';
    $password = '';
    return new PDO($dsn, $user, $password);
}

// function get_basket($databases): array {
//     $queryBaskets = "SELECT * FROM " . 'basket' . " ORDER BY user_id";
//     $stmt = $databases -> query($queryBaskets);
//     $basketTemp = $stmt -> fetchAll();

//     $queryUsers = "SELECT * FROM " . 'users' . " ORDER BY user_id";
//     $stmt = $databases -> query($queryUsers);
//     $usersTemp = $stmt -> fetchAll();


//     $queryProduct = "SELECT user_id FROM " . 'products_user' . " ORDER BY user_id";
//     $stmt = $databases -> query($queryProduct);
//     $productTemp = $stmt -> fetchAll();

//     $basket = [];
//     $basket['user_name'] = 'none';
//     foreach ($usersTemp as $user) {
//         if ($user['user_id'] === $basketTemp['user_id']) 
//         {
//             $basket['user_name'] = $user['user_name'];
//         }
//     }
//     $basket['products'] = $productTemp;
//     return $basket;
// }

// $database = connect_databases();
// $basket = get_basket($database);
// echo $basket['user_name'];



