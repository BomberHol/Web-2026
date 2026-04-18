<?php
CONST MIN = 60;
CONST HOUR = MIN * 60;
CONST DAY = HOUR * 24;
CONST MONTH = DAY * 31;
CONST YEAR = MONTH * 12;

function time_ago(string $date) {
    $diff = time() - strtotime($date);
    if ($diff < MIN)
        return $diff . ' секунд назад';
    elseif ($diff < HOUR)
        return floor($diff / MIN) . ' мин назад';
    elseif ($diff < DAY)
        return floor($diff / HOUR) . ' час назад';
    elseif ($diff < MONTH)
        return floor($diff / DAY) . ' дн назад';
    elseif ($diff < YEAR)
        return floor($diff / MONTH) . ' мес назад';    
    return floor($diff / YEAR) . ' лет назад';
}