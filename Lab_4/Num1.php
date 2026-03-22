<?php

$num = $_POST['num'];
if ($num >= 0 && $num <= 30000)
    if ($num % 4 === 0 && ($num % 100 !== 0 || $num % 400 === 0))
        echo "YES";
    else
        echo "NO";
else
    echo "ERROR OUTPUT";