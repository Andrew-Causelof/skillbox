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
    $red ? $attr="red" : $attr="";

    $result3 = [
        'AUTHORS' => [
            'pelevin@eksmo.ru' =>[
    
                'FIO' => 'Viiktor Olegovich Pelevin',
                'BORN' => '22 november 1962'
    
            ],
    
            'duma@eksmo.ru'=>[
                'FIO' => 'Aleksandr Duma',
                'BORN' => '24 july 1802'
            ]
        ],
    
        'BOOKS' => [
            [
                'TITLE' => 'Nepobedimoe solnce',
                'EMAIL' => 'pelevin@eksmo.ru'
            ],
    
            [
                'TITLE' => 'Secret Views of Mount Fuji',
                'EMAIL' => 'pelevin@eksmo.ru'
            ],
    
            [
                'TITLE' => 'Caligula',
                'EMAIL' => 'duma@eksmo.ru'
            ],
    
            [
                'TITLE' => 'The Hunter and the Lover',
                'EMAIL' => 'duma@eksmo.ru'
            ]      
        ]
    ];?>    

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<div class=<?=$attr?>>
    <h1><?=$title?></h1>
</div>

<div>Авторов на портале &lt<?=count($result3['AUTHORS'])?>&gt</div>
    <?php foreach ($result3['BOOKS'] as $book): ?>
        <p> 
            Книга &lt<?=$book['TITLE']?>&gt, 
            ее написал &#160 &lt <?=$result3['AUTHORS'][$book['EMAIL']]['FIO']?>&gt &#160 
            &lt<?=$result3['AUTHORS'][$book['EMAIL']]['BORN']?>&gt &#160
            &#40&lt<?=$book['EMAIL']?>&gt&#41
        </p>
    <?php endforeach; ?>   
</body>
</html>
