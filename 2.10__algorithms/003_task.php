<?php

// Задание 3 - Поиск min элемента в массиве
// Создайте массив values содержащий 10 случайных чисел от 0 до 100, найдите в этом массиве минимальное значение.
// Выведите сам массив, минимальное значение и его позицию в массиве, если таких значений несколько, то выведите первое из них.
$values = [];
$valPosition = 0 ;
$minValue = 101;

for ($i=0; $i < 10 ; $i++) { 

    $values[$i] =  rand(0 ,  100);

}

foreach ($values as $key => $value) {
   
    if($value < $minValue) {
        $minValue = $value ; 
        $valPosition = $key + 1;
    } 

}



?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3 - Поиск min элемента в массиве</title>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="description">
        <h1>Задание 3 - Поиск min элемента в массиве</h1>
        <p>Создайте массив values содержащий 10 случайных чисел от 0 до 100,<br> 
        найдите в этом массиве минимальное значение. <br>
        Выведите сам массив, минимальное значение и его позицию в массиве,<br>
        если таких значений несколько, то выведите первое из них.<br>
    </div>

    <div class="random-array">
        <h2>Массив случайных чисел</h2>
        <ul>
            <?foreach ($values as $key => $value):?>  
                <li><?=$key + 1?> -- <?=$value?></li>
            <? endforeach;?>   
        </ul>
    </div>

    <div class="output-container">
        <h2>Решение Задачи:</h2>
        <span>Минимальное значение <?=  $minValue?> на позиции <?= $valPosition ?> </span>
    </div>
</div>

    
</body>
</html>