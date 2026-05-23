INSERT INTO users (
    user_id,
    user_name,
    user_avatar
)
VALUES (
    0,
    'Ваня Денисов',
    './images/first-post/first-avatar.svg'
);

INSERT INTO posts (
    post_id, 
    post_description, 
    counter_heart, 
    post_time,
    user_id
)
VALUES
(
    0, 
    'Как красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский...',
    22,
    '2026-04-04',
    0
),
(
    1, 
    'Когда-нибудь я куплю эту крышу)',
    44,
    '2026-03-18',
    0
),
(
    2, 
    'Обалденное пироженное!!',
    88,
    '2026-03-07',
    0
),
(
    3, 
    'Недавно закрыли сессию! Ура!! Наконец-то!! Было тяжело, но мы справились. Ладно теперь можно и в приставочку...»',
    16,
    '2026-02-12',
    0
),
(
    4, 
    'Смотрите что прикупил.',
    32,
    '2026-01-01',
    0
),
(
    5, 
    'Очень интересная книга. Начал читать и аж дух захватывает. Интересные герои, загодочные события и самое главное...»',
     64,
    '2025-10-28',
    0
),
(
    6, 
    'Покатались по лесу. Увидели медведя. Поиграли с ним в прятки. Слава богу мы победили.',
     128,
    '2024-06-06',
    0
),
(
    7, 
    'Какой прекрасный вид)',
     256,
    '2020-06-23',
    0
),
(
    8, 
    'Туда нам надо.',
     512,
    '2019-06-23',
    0
);

INSERT INTO photos (
	post_id,
    photo
)
VALUES (
	0,
    './images/profiles/first-photo.svg'
),
(
	1,
    './images/profiles/second-photo.svg'
),
(
	2,
    './images/profiles/third-photo.svg'
),
(
	3,
    './images/profiles/four-photo.svg'
),
(
	4,
    './images/profiles/five-photo.svg'
),
(
	5,
    './images/profiles/six-photo.svg'
),
(
	6,
    './images/profiles/seven-photo.svg'
),
(
	7,
    './images/profiles/eight-photo.svg'
),
(
	8,
    './images/profiles/nine-photo.svg'
),
(
	0,
    './images/profiles/ava.svg'
),
(
	0,
    './images/profiles/nine-photo.svg'
);

