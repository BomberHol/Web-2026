<?php

$digit = $_POST["digit"];
if ($digit >= '0' && $digit <= '9') {
    $num = '';
    $digit = match ($digit) {
        '0' => 'Нуль',
        '1' => 'Один',
        '2' => 'Два',
        '3' => 'Три',
        '4' => 'Четыре',
        '5' => 'Пять',
        '6' => 'Шесть',
        '7' => 'Семь',
        '8' => 'Восемь',
        '9' => 'Девять',
    };
    echo $digit;
}
else
    echo 'ERROR OUTPUT';
    