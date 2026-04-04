<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);

    foreach ($data as $key => $value) {
        echo "{$key} = {$value} </br>";
    }

    file_put_contents("./static/data.json", json_encode($data, JSON_UNESCAPED_UNICODE));
}

