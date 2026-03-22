<?php

// Обратная польская запись
// В постфиксной записи (или обратной польской записи) операция записывается после двух операндов. Например, сумма двух чисел A и B записывается как 
// A B +. Запись B C + D * обозначает привычное нам (B + C) * D, а запись A B C + D * + означает A + (B + C) * D.

function CharToInt(string $char) {
    switch ($char) {
        case '0':
            return 0;
        case '1':
            return 1;
        case '2':
            return 2;
        case '3':
            return 3;
        case '4':
            return 4;
        case '5':
            return 5;
        case '6':
            return 6;
        case '7':
            return 7;
        case '8':
            return 8;
        case '9':
            return 9;
    }
    return $char; 
}

function LengthArray($arr) {
    $countChars = 0;
    foreach ($arr as $element)
        $countChars++;
    return $countChars;
}

function OrderingArray(&$arr) {
    $newArr = [];
    foreach ($arr as $element) {
        $newArr[] = $element;
    }
    $arr = $newArr;
}

function GetArrayPol(string $str) {
    $oper = [];
    $countStr = 0;
    $countOper = -1;
    $strType = '';
    while ($strType !== $str) {
        $strType .= $str[$countStr];
        if ($str[$countStr] !== ' ') {
            $oper[] = CharToInt($str[$countStr]);
            $countOper++;
        }
        $countStr++;
    }
    return $oper;
}

function ArifmeticOperation(&$oper, &$countOper) {
    $num = 0;
    switch ($oper[$countOper]) {
        case '+':
            $num = $oper[$countOper - 2] + $oper[$countOper - 1];
            break;
        case '-':
            $num = $oper[$countOper - 2] - $oper[$countOper - 1];
            break;
        case '*':
            $num = $oper[$countOper - 2] * $oper[$countOper - 1];
            break;
    }
    unset($oper[$countOper--]);
    unset($oper[$countOper--]);
    $oper[$countOper] = $num;
    OrderingArray($oper);
    $countOper = 0;
}

function SumAllEl($oper) {
    $sum = 0;
    foreach ($oper as $element) {
        $sum += $element;
    }
    return $sum;
}

function DiffAllEl($oper) {
    $dif = $oper[0]; 
    for ($index = 1; $index < LengthArray($oper); $index++) {
        $dif -= $oper[$index];
    }
    return $dif;
}

function CompAllEl($oper) {
    $com = 1;
    foreach ($oper as $element) {
        $com *= $element;
    }
    return $com;
}

function LastArifmeticOperations(&$oper, &$countOper) {
    switch ($oper[$countOper]) {
        case '+':
            unset($oper[$countOper--]);
            OrderingArray($oper);
            $oper = [SumAllEl($oper)];
            break;
        case '-':
            unset($oper[$countOper--]);
            OrderingArray($oper);
            $oper = [DiffAllEl($oper)];
            break;
        case '*':
            unset($oper[$countOper--]);
            OrderingArray($oper);
            $oper = [CompAllEl($oper)];
            break;
    }
    

}

$str = $_POST["str"];
$oper = GetArrayPol($str);
if ($oper[LengthArray($oper) - 1] === '+' || $oper[LengthArray($oper) - 1] === '-' || $oper[LengthArray($oper) - 1] === '*' || LengthArray($oper) === 1) {
    $countOper = 0;
    while (LengthArray($oper) !== 1) { 
        if ($oper[$countOper] === '+' || $oper[$countOper] === '-' || $oper[$countOper] === '*')
            if (LengthArray($oper) !== $countOper + 1)
                ArifmeticOperation($oper, $countOper);
            else
                LastArifmeticOperations($oper, $countOper);
        else
            $countOper++;
    }
    echo $oper[0];
}
else
    echo "ERROR INPUT";
