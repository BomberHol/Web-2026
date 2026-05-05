<?php
include 'read_databases.php';

const PATH_BEGIN = './images/new/';
const PATH_END = '.svg';
const IMAGE_ONE = 'user_avatar';
const IMAGE_TWO = 'post_photo';

function get_image(string $name): string {
    $file = $_FILES[$name];
    if ($file ?? null) {
        $image = '';
        foreach ($file as $key => $value) {
            if ($key === 'tmp_name')
                if ($value ?? '')
                    $image = file_get_contents($value);  
        }
        return $image;
    }
}



$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {

    $userAva = get_image(IMAGE_ONE);
    file_put_contents(PATH_BEGIN . IMAGE_ONE . PATH_END, $userAva);

    $postPhoto = get_image(IMAGE_TWO);
    file_put_contents(PATH_BEGIN . IMAGE_TWO . PATH_END, $postPhoto);

    $data = $_POST['data'];
    $dataArr = json_decode($data, true);
    

    $query = "INSERT INTO post (id, user_avatar, post_photo, post_description, counter_heart, post_time) VALUE (?, ?, ?, ?, ?, ?)";
    
    $databases = connect_databases();
    $stmt = $databases -> prepare($query);
    $stmt -> execute([
        $dataArr['id'], 
        PATH_BEGIN . IMAGE_ONE . PATH_END,
        PATH_BEGIN . IMAGE_TWO . PATH_END, 
        $dataArr['post_description'],
        $dataArr['counter_heart'],
        $dataArr['post_time']
    ]);

    
}

