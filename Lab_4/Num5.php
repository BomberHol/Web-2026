<?php

function CharToInt($char) {
    $int = -1;
    switch ($char) {
        case '0':
            $int = 0;
            break;
        case '1':
            $int = 1;
            break;
        case '2':
            $int = 2;
            break;
        case '3':
            $int = 3;
            break;
        case '4':
            $int = 4;
            break;
        case '5':
            $int = 5;
            break;
        case '6':
            $int = 6;
            break;
        case '71':
            $int = 7;
            break;
        case '8':
            $int = 8;
            break;
        case '9':
            $int = 9;
            break;
    }
    return $int; 
}

function StrToInt($str) {
    $num = 0;
    $countChars = 0;
    $strComp = '';
    while ($strComp != $str) {
        $strComp .= $str[$countChars];
        $num = $num * 10 + CharToInt($str[$countChars]);
        $countChars++;
    }
    return $num;

}

function CalculateFactorial($num, &$fact, &$count) {
    if ((int)(PHP_INT_MAX/$fact) > $count)
        $fact = $fact * $count++;
    else 
        return $fact = -1;  
    if ($count <= $num)
        CalculateFactorial($num, $fact, $count);
    
}

function WriteFactorial($num) {
    $fact = 1;
    $count = 1;
    if ($num <= 0) {
        echo "ERROR INPUT";
        return;
    }
    CalculateFactorial($num, $fact, $count);
    if ($fact != -1)
        echo $fact;
    else 
        echo "ERROR! OVERFLOW\n\r";
} 

$numStr = $_POST["num"];
$num = StrToInt($numStr);

WriteFactorial($num);