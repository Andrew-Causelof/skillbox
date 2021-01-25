<!--
  Задание 3
Для этой задачи возьмите предыдущий массив, положите его в переменную $result3 (Ctrl + C -> Ctrl + V). Ключами для каждого из авторов сделайте их email — чтобы на основе email автора у книги можно было получить автора. И теперь добавьте каждому автору еще и год рождения.

Выведите информацию по всем книгам, в формате:
“Книга <Название книги>, ее написал <Фио автора> <Год Рождения автора> (<email автора>)”

Затем перемешайте (Найдите подходящую функцию) книги и снова выведите информацию по книгам.
    -->
    <?php
$title = 'Вывод по всем книгам:';

$result3 = [
    'authors' => [
        'pelevin@eksmo.ru' =>[

            'fio' => 'Viiktor Olegovich Pelevin',
            'born' => '22 november 1962'

        ],

        'duma@eksmo.ru'=>[
            'fio' => 'Aleksandr Duma',
            'born' => '24 july 1802'
        ]
    ],

    'books' => [
        [
            'title' => 'Nepobedimoe solnce',
            'email' => 'pelevin@eksmo.ru'
        ],

        [
            'title' => 'Secret Views of Mount Fuji',
            'email' => 'pelevin@eksmo.ru'
        ],

        [
            'title' => 'Caligula',
            'email' => 'duma@eksmo.ru'
        ],

        [
            'title' => 'The Hunter and the Lover',
            'email' => 'duma@eksmo.ru'
        ]      
    ]
];

if(isset($_POST['solveIt'])) {

    $title = 'Вывод по перемешанным книгам:';
    shuffle($result3['books']);

}?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>
    <h1>Задание 3</h1>
    <div class="task-description"> 
        <p style="font-size: 14px">
        Для этой задачи возьмите предыдущий массив, положите его в переменную   <b>$result3</b>  (Ctrl + C -> Ctrl + V). <br>
        Ключами для каждого из авторов сделайте их <b>email</b> — чтобы на основе email автора у книги можно было получить автора.<br>
         И теперь добавьте каждому автору еще и год рождения. <br>
        Выведите информацию по всем книгам, в формате: <br>
        Книга <b>&lt Название книги&gt</b>, ее написал <b>&ltФио автора&gt &ltГод Рождения автора> (&ltemail автора&gt)</b> <br>
        Затем перемешайте (Найдите подходящую функцию) книги и снова выведите информацию по книгам. <br>
        </p>
    </div>

    <div class="output-array">
        <div class="output-array__var-dump" style = "border: 1px solid #141414; width: 100%;">
            <h4>Var_dump: </h4>
            <pre>
                <?php var_dump($result3); ?>
            </pre>
        </div>

        <div class="output-array__styled"style = "border: 1px solid #141414;  margin-top: 20px;">
        <h4><?=$title?></h4>
            <?php foreach ($result3['books'] as $book): ?>
                <span> 
                    Книга: <?=$book['title']?>, 
                    ее написал &lt <?=$result3['authors'][$book['email']]['fio']?>&gt
                    &lt<?=$result3['authors'][$book['email']]['born']?>&gt
                    &#40&lt<?=$book['email']?>&gt&#41
                </span>
                <br><br>
             <?php endforeach; ?>   
        </div>

        <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" name="problem">
            <input type="submit" name="solveIt" value="Перемешать" style ="width: 100vw; height: 50px">
        </form>
      
    </div>
    
</body>
</html>