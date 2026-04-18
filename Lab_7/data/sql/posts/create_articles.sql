INSERT INTO post (
    id, 
    user_name, 
    user_avatar, 
    post_photo, 
    post_description, 
    counter_heart, 
    post_time
)
VALUES
(
    1, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/first-post/first-photo.png',
    'Как красиво сегодня на улице! Настоящая зима)) Вспоминается Бродский...',
    22,
    '2026-04-04'
),
(
    2, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/second-photo.svg',
    'Когда-нибудь я куплю эту крышу)',
    44,
    '2026-03-18'
),
(
    3, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/third-photo.svg',
    'Обалденное пироженное!!',
    88,
    '2026-03-07'
),
(
    4, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/four-photo.svg',
    'Недавно закрыли сессию! Ура!! Наконец-то!! Было тяжело, но мы справились. Ладно теперь можно и в приставочку...»',
    16,
    '2026-02-12'
),
(
    5, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/five-photo.svg',
    'Смотрите что прикупил.',
    32,
    '2026-01-01'
),
(
    6, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/six-photo.svg',
    'Очень интересная книга. Начал читать и аж дух захватывает. Интересные герои, загодочные события и самое главное...»',
     64,
    '2025-10-28'
),
(
    7, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/seven-photo.svg',
    'Покатались по лесу. Увидели медведя. Поиграли с ним в прятки. Слава богу мы победили.',
     128,
    '2024-06-06'
),
(
    8, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/eight-photo.svg',
    'Какой прекрасный вид)',
     256,
    '2020-06-23'
),
(
    9, 
    'Ваня Денисов',
    './images/first-post/first-avatar.svg',
    './images/profiles/nine-photo.svg',
    'Туда нам надо.',
     512,
    '2019-06-23'
);

INSERT INTO user (
    id,
    user_name
)
VALUES (
    1,
    'Ваня Денисов'
);