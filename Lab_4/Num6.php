 <?php

function ReduceArray(array &$arr, int &$index, int $countReduceEl) {
    $count = 0;
    for ($i = 0; $i < $countReduceEl; $i++)
        unset($arr[$index - $i]);
    $index -= $countReduceEl;
    OrderArray($arr);
}

function ClearArrayOfEmtyRows(array $arr) {
    $tempArr = [];
    foreach ($arr as $element) {
        if ($element !== '')
            $tempArr[] = $element;
    }
    $arr = $tempArr;
}

function CharToInt(string $char): int {
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
    return -1; 
}

function StrToInt(string $str): int {
    $num = 0;
    for ($i = 0; $i < LenghtStr($str); $i++) {
        if ($str[$i] !== '-')
            $num = $num * 10 + CharToInt($str[$i]);
    }
    if ($str[0] === '-')
        $num *= -1;
    return $num;
}

function ConvertInt(array &$arr) {
    $tempArr = [];
    foreach ($arr as $element) {
        if ($element !== '+' && $element !== '-' && $element !== '*')
            $tempArr[] = StrToInt($element);
        elseif ($element === '+' || $element === '-' || $element === '*')
            $tempArr[] = $element;
    }
    $arr = $tempArr;
}

function GetArrayFromStr(string $str): array {
    $arr = [];
    $indexArr = 0;
    $indexStr = 0;
    $arr[] = '';
    while ($indexStr !== LenghtStr($str)) {
        if ($str[$indexStr] !== ' ') {
            $arr[$indexArr] .= $str[$indexStr];
            
        }
        elseif ($str[$indexStr] === ' ') {
            $arr[] = '';
            $indexArr++;
        }
        $indexStr++;
    }
    ClearArrayOfEmtyRows($arr);
    ConvertInt($arr);
    return $arr;
}

function LenghtArray(array $arr): int {
    $count = 0;
    foreach ($arr as $element)
        $count++;
    return $count;
}

function LenghtStr(string $str): int {
    $tempStr = '';
    $count = 0;
    while ($tempStr !== $str) {
        $tempStr .= $str[$count];
        $count += 1;
    }
    return $count;
}

function OrderArray(array &$arr) {
    $tempArr = [];
    foreach ($arr as $element)
        $tempArr[] = $element;
    $arr = $tempArr;
}

if ($_POST['str'] !== '') {
    $operands = GetArrayFromStr($_POST['str']);
    $index = 0;
    while (LenghtArray($operands) !== 1) {
        $l = count($operands);
        echo "{$index} & {$l} |";
        switch ($operands[$index]) {
            case '+':
                $operands[$index - 2] = $operands[$index - 2] + $operands[$index - 1];
                ReduceArray($operands, $index, 2);
                break;
            case '-':
                $operands[$index - 2] = $operands[$index - 2] - $operands[$index - 1];
                ReduceArray($operands, $index, 2);
                break;
            case '*':
                $operands[$index - 2] = $operands[$index - 2] * $operands[$index - 1];
                ReduceArray($operands, $index, 2);
                break;
        }
        $index++;
    }
    echo $operands[0];
}
else
    echo 'EROR INPUT';

