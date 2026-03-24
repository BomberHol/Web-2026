<?php

// function IsSumm(array $arr, int $index): bool {
//     if ($index >= 2)
//         return $arr[$index] === '+' && is_int($arr[$index - 1]) && is_int($arr[$index - 2]); 
//     return FALSE;
// }

function ReduceArray(array &$arr, int &$index, int $countReduceEl) {
    $count = 0;
    for ($i = 0; $i < $countReduceEl; $i++)
        unset($arr[$index - $i]);
    $index -= $countReduceEl;
    OrderArray($arr);
}

function GetArrayFromStr(string $str): array {
    $arr = [];
    $indexArr = 0;
    $indexStr = 1;
    while ($indexStr !== strlen($str) - 1) {
        if (($str[$indexStr - 1] === ' ' && $str[$indexStr] !== ' ') || ($str[$indexStr - 1] !== ' ' && $indexStr - 1 === 0)) {
            $arr[] = $str[$indexStr];
        }
        elseif ($str[$indexStr - 1] !== ' ' && $str[$indexStr] !== ' ') {
            $arr[$indexArr] .= $str[$indexStr];
        }
        elseif ($str[$indexStr - 1] !== ' ' && $str[$indexStr] === ' ') {
            $indexArr++;
        }
        $indexStr++;
    }
    return $arr;
}

function LenghtArray(array $arr): int {

}

function OrderArray(array &$arr) {
    $tempArr = [];
    foreach ($arr as $element)
        $tempArr[] = $element;
    $arr = $tempArr;
}


// $operands = [1, 2, '+', 1, 1, '+', '+'];
// $operands = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '+', '+', '+', '+', '+', '+', '+', '+', '+', '+'];
// $operands = [1, 2, '+', 3, 4, '+', '+', 5, 6, '+', 7, 8, '+', '+', '+', 9, 10, '+', 11, '+', '+'];

$arr = GetArrayFromStr('1 2 3 +');
foreach ($arr as $el) {
    echo "{$el} | ";
}







// $operands = GetArrayFromStr('1 2 +');

// $index = 0;
// while (count($operands) !== 1) {  // LengthArray($operands) !== 1
//     switch ($operands[$index]) {
//         case '+':
//             $operands[$index - 2] = $operands[$index - 2] + $operands[$index - 1];
//             ReduceArray($operands, $index, 2);
//             break;
//         case '-':
//             $operands[$index - 2] = $operands[$index - 2] - $operands[$index - 1];
//             ReduceArray($operands, $index, 2);
//             break;
//         case '*':
//             $operands[$index - 2] = $operands[$index - 2] + $operands[$index - 1];
//             ReduceArray($operands, $index, 2);
//             break;
//     }
//     $index++;
// }
// echo $operands[0];