<?php



function StrToInt($str) {
    $num = 0;
    $countChars = 0;
    $strComp = '';
    while ($strComp != $str) {
        $strComp .= $str[$countChars];
        $num = $num * 10 + (int)($str[$countChars]);
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
    if ($num === 0) {
        echo 1;
        return;
    }
    if ($num < 0) {
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