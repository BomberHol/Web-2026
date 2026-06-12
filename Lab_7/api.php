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

function read_post(string $name) {
    if (isset($_POST[$name])) {
        return $_POST[$name];
    }
    return '';
}

$method = $_SERVER['REQUEST_METHOD'];
 

if ($method === 'POST') {

    //$postPhoto = get_image(IMAGE_TWO);
    $post_id = (int)read_post('post_id');
    
    $flag = true;
    foreach ($posts as $post) {
        if ($post_id == $post['post_id']) {
            $flag = false;
        }

    }

    if ($flag) {
        $photo = base64_decode(read_post('post_photo'));
        file_put_contents(PATH_BEGIN . IMAGE_TWO . PATH_END, $photo);

        $query = "INSERT INTO posts (post_id, post_description, counter_heart, post_time, user_id) VALUES (?, ?, ?, ?, ?)";
        $query_photo = "INSERT INTO photos (post_id, photo) VALUES (?, ?)";

        $databases = connect_databases();
        $stmt = $databases -> prepare($query);
        $stmt -> execute([
            $post_id,
            read_post('post_description'),
            read_post('counter_heart'),
            read_post('post_time'),
            read_post('user_id')
        ]);

        $stmt = $databases -> prepare($query_photo);
        $stmt -> execute([
            $post_id, 
            PATH_BEGIN . IMAGE_TWO . PATH_END
        ]);
    }
    else {
        http_response_code(404);
    }
    
    
    

    

    

    
}

