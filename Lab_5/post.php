<?php
 
$postId = '';
if (isset($_GET['id'])) {
    $postId = $_GET['id'];
}

foreach ($_GET as $key => $value) {
    echo "{$key}={$value}/";
}
?>