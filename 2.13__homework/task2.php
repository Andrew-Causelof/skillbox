<!--
    Задание 2
Теперь расширим этот массив — создадим новый, в котором будет много авторов и много книг. Создайте многомерный массив $result2 — с двумя ключами ‘authors’ и ‘books’:

в индекс (ключ) ‘authors’ добавьте многомерный массив каждый элемент которого является автором, т.е. ассоциативным массивом данных об авторе: фио, email (как в задании 1);

в индекс (ключ) ‘books’ добавьте многомерный массив каждый элемент которого является книгой, т.е. ассоциативным массивом данных о книге: название и email автора (как в задании 1);

Создайте несколько авторов и несколько книг;

Выведите массив.
    -->
<?php
$result2 = [
    'authors' => [
        [
            'fio' => 'Viiktor Olegovich Pelevin',
            'email' => 'pelevin@eksmo.ru'
        ],
        [
            'fio' => 'Aleksandr Duma',
            'email' => 'duma@eksmo.ru'
        ]
    ],
    'books' => [
        [
            'title' => 'Nepobedimoe solnce',
            'email' => 'pelevin@eksmo.ru'
        ],
        [
            'title' => 'Grafinya de Monsoro',
            'email' => 'duma@eksmo.ru'
        ]    
    ]
];?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 2</title>
</head>
<body>
    <h1>Задание 2</h1>
    <div class="task-description"> 
        <p style="font-size: 14px">
        Теперь расширим этот массив — создадим новый, в котором будет много авторов и много книг. <br>
        Создайте многомерный массив <b>$result2</b> — с двумя ключами <b>‘authors’</b>  и <b>‘books’</b> :<br>
        в индекс (ключ) <b>‘authors’</b> добавьте многомерный массив каждый элемент которого является автором,<br>
         т.е. ассоциативным массивом данных об авторе: фио, email (как в задании 1);<br>
        в индекс (ключ) <b>‘books’</b> добавьте многомерный массив каждый элемент которого является книгой,<br>
         т.е. ассоциативным массивом данных о книге: название и email автора (как в задании 1);<br>
        Создайте несколько авторов и несколько книг;<br>
        Выведите массив.<br>
        </p>
    </div>

    <div class="output-array">
        <div class="output-array__var-dump" style = "border: 1px solid #141414; width: 50vw;">
            <span>Var_dump: </span>
            <pre>
                <?php var_dump($result2); ?>
            </pre>
        </div>

        <div class="output-array__styled"style = "border: 1px solid #141414; width: 50vw; margin-top: 20px;">
            <h4>Авторы</h4>
            <?php foreach ($result2['authors'] as $author): ?>
                <span> ФИО: <?=$author['fio'] ?> </span>
                <br>
                <span> email: <?=$author['email'] ?> </span>
                <br><br>
             <?php endforeach; ?>   
            <h4>Книга:</h4>
            <?php foreach ($result2['books'] as $book): ?>
                <span> Название книги: <?= $book['title'] ?> </span> 
                <br>
                <span> email автора: <?= $book['email'] ?> </span>
                <br><br>
             <?php endforeach; ?>   
        </div>
      
    </div>
    
</body>
</html>