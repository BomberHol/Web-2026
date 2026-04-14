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

$posts = [
    [
        'id' => 1,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/first-post/first-photo.png',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Как красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в гор...»',
        'expand_description' => 'еще',
        'counter_hearts' => 22,
        'time' => time_ago('04.04.2026'), // пподсчитать , require
        'counter-photos' => '1/3'
    ],
    [
        'id' => 2,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/second-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Когда-нибудь я куплю эту крышу)',
        'expand_description' => '',
        'counter_hearts' => 44,
        'time' => time_ago('18.03.2026'), // пподсчитать , require
        'counter-photos' => ''
    ],
    [
        'id' => 3,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/third-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Обалденное пироженное!!',
        'expand_description' => '',
        'counter_hearts' => 88,
        'time' => time_ago('07.03.2026'), // пподсчитать , require
        'counter-photos' => ''
    ],
    [
        'id' => 4,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/four-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Недавно закрыли сессию! Ура!! Наконец-то!! Было тяжело, но мы справились. Ладно теперь можно и в приставочку...»',
        'expand_description' => 'еще',
        'counter_hearts' => 16,
        'time' => time_ago('12.02.2026'), // пподсчитать , require
        'counter-photos' => ''
    ],
    [
        'id' => 5,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/five-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Смотрите что прикупил.',
        'expand_description' => '',
        'counter_hearts' => 32,
        'time' => time_ago('01.01.2026'), // пподсчитать , require
        'counter-photos' => '1/3'
    ],
    [
        'id' => 6,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/six-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Очень интересная книга. Начал читать и аж дух захватывает. Интересные герои, загодочные события и самое главное...»',
        'expand_description' => 'еще',
        'counter_hearts' => 64,
        'time' => time_ago('28.10.2025'), // пподсчитать , require
        'counter-photos' => '2/3'
    ],
    [
        'id' => 7,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/seven-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Покатались по лесу. Увидели медведя. Поиграли с ним в прятки. Слава богу мы победили.',
        'expand_description' => '',
        'counter_hearts' => 128,
        'time' => time_ago('06.06.2024'), // пподсчитать , require
        'counter-photos' => ''
    ],
    [
        'id' => 8,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/eight-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Какой прекрасный вид)',
        'expand_description' => '',
        'counter_hearts' => 256,
        'time' => time_ago('23.06.2020'), // пподсчитать , require
        'counter-photos' => ''
    ],
    [
        'id' => 9,
        'author_avatar' => './images/first-post/first-avatar.svg',
        'photo' => './images/profiles/nine-photo.svg',
        'icon-pen' => './images/icon/pen.svg',
        'image-heart' => './images/icon/heart.svg',
        'author_name' => 'Ваня Денисов',
        'description' => 'Туда нам надо.',
        'expand_description' => '',
        'counter_hearts' => 512,
        'time' => time_ago('23.06.2019'), // пподсчитать , require
        'counter-photos' => ''
    ],
];
?>