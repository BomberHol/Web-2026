<?php

function LengthStr(string $str):int {
    $countChars = 0;
    $stringComp = '';
    while ($stringComp <> $str) {
        $stringComp .= $str[$countChars];
        $countChars++;
    }
    return $countChars;
}

function StrToArray(string $inputStr):array {
    $array = [];
    $countChars = 0;
    $compareStr = '';
    while ($compareStr <> $inputStr) {
        $array[] = $inputStr[$countChars];
        $compareStr .= $inputStr[$countChars];
        $countChars++;
    }
    return $array;
}

function SplitDateForInternationalStandartISO_8601(string $dateString):array {
    $array = ['day' => '', 'month' => '', 'year' => ''];
    $keyArray = 'year';
    $countChars = 0;
    $stringComp = '';
    while ($stringComp <> $dateString) {
        $array[$keyArray] .= $dateString[$countChars];
        $stringComp .= $dateString[$countChars];
        $countChars++;

        if ($countChars === 4)
            $keyArray = 'month';
        elseif ($countChars === 6)
            $keyArray = 'day';     
    }
    return $array;
}

function IdentifyNumberMonth(string $month):string {
    $number = match ($month) {
        'январь', 'января', 'Январь', 'Января' => '01',
        'февраль', 'февраля', 'февраль', 'февраля' => '02',
        'март', 'марта', 'Март', 'Марта' => '03',
        'апрель', 'апреля', 'Апрель', 'Апреля' => '04',
        'май', 'мая', 'Май', 'Мая' => '05',
        'июнь', 'июня', 'Июнь', 'Июня' => '06',
        'июль', 'июля', 'Июль', 'Июля'=> '07',
        'август', 'августа', 'Август', 'Августа' => '08',
        'сентябрь', 'сентября', 'Сентябрь', 'Сентября' => '09',
        'октябрь', 'октября', 'Октябрь', 'Октября' => '10',
        'ноябрь', 'ноября', 'Ноябрь', 'Ноября' => '11',
        'декабрь', 'декабря', 'Декабрь', 'Декабря' => '12'
    };
    return $number;
}

function SplitDateForTextStandart(string $dateString):array {
    $array = ['day' => '', 'month' => '', 'year' => ''];
    $keyArray = 'day';
    $countChars = 0;
    $stringComp = '';
    while ($stringComp <> $dateString) {
        $array[$keyArray] .= $dateString[$countChars];
        $stringComp .= $dateString[$countChars];
        $countChars++;

        if ($stringComp <> $dateString) {
            if ($dateString[$countChars] === ' ' && $keyArray === 'day') {
                $keyArray = 'month';
                $stringComp .= $dateString[$countChars];
                $countChars++;
            } 
            elseif ($dateString[$countChars] === ' ' && $keyArray === 'month') {
                $array[$keyArray] = IdentifyNumberMonth($array[$keyArray]);
                $keyArray = 'year';
                $stringComp .= $dateString[$countChars];
                $countChars++;
            }
        }
     }
     return $array;
}

function SortDate(string $dateString):array {
    $dateTempArray = ['', '', ''];

    $countTempArray = 0;
    $countCharsElemDate = 0;
    foreach (StrToArray($dateString) as $charDate) {
        if ($countCharsElemDate <> -1)
            $countCharsElemDate++;
        if ($countCharsElemDate > 4 && $charDate != '-') {
            $dateTempArray = SplitDateForInternationalStandartISO_8601($dateString);
            break;
        }

        if ($charDate === ' ') {
            $dateTempArray = SplitDateForTextStandart($dateString);
            break;
        }

        if ($charDate === '.' || $charDate === '/' || $charDate === '-') {
            $countTempArray++;
            $countCharsElemDate = -1;
        }

        if ($charDate >= '0' && $charDate <= '9')
            $dateTempArray[$countTempArray] .= $charDate;
    }

    $dateArray = ['day' => '', 'month' => '', 'year' => ''];
    if (!isset($dateTempArray['year'])) {
        switch (LengthStr($dateTempArray[0])) {
            case 4:
                $dateArray['year'] = $dateTempArray[0];
                $dateArray['month'] = $dateTempArray[1];
                $dateArray['day'] = $dateTempArray[2];
                break;
            case 2:
                $dateArray['day'] = $dateTempArray[0];
                $dateArray['month'] = $dateTempArray[1];
                $dateArray['year'] = $dateTempArray[2];
                break;
        }
    }
    else
        $dateArray = $dateTempArray;

    return $dateArray;
}

function WriteZodiacSign(array $dateArray){
    switch ($dateArray) {
        case ($dateArray['day'] >= '21' && $dateArray['day'] <= '30' && $dateArray['month'] == '03') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '19' && $dateArray['month'] == '04'):
            echo 'Овен';
            break;
        case ($dateArray['day'] >= '20' && $dateArray['day'] <= '30' && $dateArray['month'] == '04') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '20' && $dateArray['month'] == '05'):
            echo 'Телец';
            break;
        case ($dateArray['day'] >= '21' && $dateArray['day'] <= '30' && $dateArray['month'] == '05') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '19' && $dateArray['month'] == '06'):
            echo 'Близнецы';
            break;
        case ($dateArray['day'] >= '20' && $dateArray['day'] <= '30' && $dateArray['month'] == '06') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '20' && $dateArray['month'] == '07'):
            echo 'Рак';
            break;
        case ($dateArray['day'] >= '21' && $dateArray['day'] <= '30' && $dateArray['month'] == '07') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '19' && $dateArray['month'] == '08'):
            echo 'Лев';
            break;
        case ($dateArray['day'] >= '20' && $dateArray['day'] <= '30' && $dateArray['month'] == '08') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '20' && $dateArray['month'] == '09'):
            echo 'Дева';
            break;
        case ($dateArray['day'] >= '21' && $dateArray['day'] <= '30' && $dateArray['month'] == '09') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '19' && $dateArray['month'] == '10'):
            echo 'Весы';
            break;
        case ($dateArray['day'] >= '20' && $dateArray['day'] <= '30' && $dateArray['month'] == '10') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '20' && $dateArray['month'] == '11'):
            echo 'Скорпион';
            break;
        case ($dateArray['day'] >= '21' && $dateArray['day'] <= '30' && $dateArray['month'] == '11') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '19' && $dateArray['month'] == '12'):
            echo 'Стрелец';
            break;
        case ($dateArray['day'] >= '20' && $dateArray['day'] <= '30' && $dateArray['month'] == '12') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '20' && $dateArray['month'] == '01'):
            echo 'Козерог';
            break;
        case ($dateArray['day'] >= '21' && $dateArray['day'] <= '30' && $dateArray['month'] == '01') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '19' && $dateArray['month'] == '02'):
            echo 'Водолей';
            break;
        case ($dateArray['day'] >= '20' && $dateArray['day'] <= '30' && $dateArray['month'] == '02') || ($dateArray['day'] >= '01' && $dateArray['day'] <= '20' && $dateArray['month'] == '03'):
            echo 'Рыбы';
            break;
    }         
}

$dateString = $_POST["date"];
$dateArray = SortDate($dateString);
WriteZodiacSign($dateArray);




//echo '//day = ' . $dateArray['day'] . ', month = ' . $dateArray['month'] . ' year = ' . $dateArray['year'];

// Меж
// YYYYMMDD     -> Отдельно
// YYYY-MM-DD   |
//              |
// Русс         |
// ДД.ММ.ГГГГ   |
// ДД-ММ-ГГ     |=> По знаку (./-)
// ДД/ММ/ГГ     |
//              |
// Ам           |
// MM/DD/YYYY   |
// MM-DD-YYYY   |
//
// Текст
// ДД месяц, ГГГГ -> пробел
