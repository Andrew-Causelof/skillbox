<!--
    Задание 4
Возьмите массив из задания 3, создайте переменную $title — в нее впишите любую строку — это будет заголовок страницы.
Также создайте переменную boolean типа $red = (bool) rand(0, 1);
Сформируйте небольшую веб-страницу (верстка приложена), у которой будет заголовок, и в абзацах выведены книги в том же формате, что и в задании 3. Каждая книга должна быть в отдельном абзаце.
Интегрируйте код в приложенную верстку, при этом если переменная $red истинна — необходимо к заголовку h1 добавить атрибут class=”red” (файл.php в прикрепленных материалах)
    -->
<?php 
    $title = 'Задание 4';
    $red = (bool) rand(0, 1);

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
    ];?>    

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
    <h1 class="<? $red ? $attr="red" : $attr=""; echo $attr;?>"><?=$title?></h1>
    <div>Авторов на портале &lt<?=count($result3['authors'])?>&gt</div>
    <?php foreach ($result3['books'] as $book): ?>
        <p> 
            Книга &lt<?=$book['title']?>&gt, 
            ее написал &#160 &lt <?=$result3['authors'][$book['email']]['fio']?>&gt &#160 
            &lt<?=$result3['authors'][$book['email']]['born']?>&gt &#160
            &#40&lt<?=$book['email']?>&gt&#41
        </p>
    <?php endforeach; ?>   
</body>
</html>
