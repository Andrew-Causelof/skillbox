<!--
    Задание 1
Начнем с создания простых массивов с данными об авторе и книге. Создайте многомерный массив $result1 — с двумя ключами ‘author’ и ‘book’

в индекс (ключ) ‘author’ добавьте ассоциативный массив данных об авторе: фио, email

в индекс (ключ) ‘book’ добавьте ассоциативный массив данных о книге: название и email автора

Выведите массив.
    -->
<?php
$result1 = [
    'AUTHOR' => [
        'FIO' => 'Viiktor Olegovich Pelevin',
        'EMAIL' => 'info@eksmo.ru'
    ],
    'BOOK' => [
        'TITLE' => 'Nepobedimoe solnce',
        'EMAIL' => 'info@eksmo.ru'    
    ]
];?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>
    <h1>Задание 1</h1>
    <div class="task-description"> 
        <p>
            Начнем с создания простых массивов с данными об авторе и книге. Создайте многомерный массив $result1 — с двумя ключами ‘author’ и ‘book’  <br>
            в индекс (ключ) ‘author’ добавьте ассоциативный массив данных об авторе: фио, email<br>
            в индекс (ключ) ‘book’ добавьте ассоциативный массив данных о книге: название и email автора<br>
            Выведите массив.<br>
        </p>
    </div>

    <div class="output-array">
        <div class="output-array__var-dump" style = "border: 1px solid #141414; width: 50vw;">
            <span>Var_dump: </span>
            <pre>
                <?php var_dump($result1); ?>
            </pre>
        </div>

        <div class="output-array__styled"style = "border: 1px solid #141414; width: 50vw; margin-top: 20px;">
            <h4>Автор</h5>
                <span> ФИО: <?=$result1['AUTHOR']['FIO'] ?> </span>
                <br>
                <span> Email: <?=$result1['AUTHOR']['EMAIL'] ?> </span>
            <h4>Книга:</h5>
                <span> Название книги: <?=$result1['BOOK']['TITLE'] ?> </span> 
                <br>
                <span> Email автора: <?=$result1['BOOK']['EMAIL'] ?> </span>
        </div>
      
    </div>
    
</body>
</html>