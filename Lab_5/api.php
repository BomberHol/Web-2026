<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    foreach ($data as $key => $value) {
        $image = file_get_contents($value);
        echo "{$key} = {$value} </br>";
        echo $image;
    }
    
    file_put_contents("./static/data.svg", $image);
}

