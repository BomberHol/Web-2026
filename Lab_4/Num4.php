<?php

const MAX_RANGE = 999999;
const MIN_RANGE = 100000;

function CharToInt(string $char): int {
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

function StrToInt(string $str): int {
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

function SortTwoNum(int &$num1, int &$num2) {
    $typeNum = 0;
    if ($num2 < $num1) {
        $typeNum = $num1;
        $num1 = $num2;
        $num2 = $typeNum;
    }
    
}

function IsSum(int $num): int {
    return (($num%10) + (int)($num/10)%10 + (int)($num/100)%10) === ((int)($num/1000)%10 + (int)($num/10000)%10 + (int)($num/100000));
}


$numStr1 = $_POST["num1"];
$numStr2 = $_POST['num2'];
$num1 = StrToInt($numStr1);
$num2 = StrToInt($numStr2);



if (MIN_RANGE <= $num1 && $num1 <= MAX_RANGE && MIN_RANGE <= $num2 && $num2 <= MAX_RANGE) {
    SortTwoNum($num1, $num2);
    for ($index = $num1; $index <= $num2; $index++)
        if (IsSum($index)) {
            echo $index;
            echo "\r\n";
        }
            
}
else {
    echo "ERROR INPUT";
}