<?php

// Задание 4 - Подсчет суммы элементов массива
// Создайте массив numbers случайной длины от 3 до 20. Каждое значение - это случайное число от 0 до 10
// Посчитайте сумму его элементов, стоящих под нечетным индексом.
// Выведите этот массив, и выведите полученную сумму




$array = [];

$rabdomLength = rand(3, 20);

$amount = 0;


for ($i=0; $i < $rabdomLength ; $i++) { 

    $array[$i] =  rand(0 ,  10);

}

for ($i=0; $i < $rabdomLength ; $i++) { 
    if($i % 2 != 0 ) {
        $amount += $array[$i];
    }
}

?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 4 - Подсчет суммы элементов массива</title>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="description">
        <h1>Задание 4 - Подсчет суммы элементов массива</h1>
        <p>
            Создайте массив numbers случайной длины от 3 до 20. Каждое значение - это случайное число от 0 до 10<br> 
            Посчитайте сумму его элементов, стоящих под нечетным индексом. <br>
            Выведите этот массив, и выведите полученную сумму <br>

        </p>
    </div>

    <div class="random-array">
        <h2>Массив случайных чисел</h2>
        <ul>
            <?foreach ($array as $key => $value):?>  
                <li><?=$key ?> -- <?=$value?></li>
            <? endforeach;?>   
        </ul>
    </div>

    <div class="output-container">
        <h2>Решение Задачи:</h2>
        <span> Сумма элементов с нечетным индексом : <?=$amount ?> </span>
    </div>
</div>

    
</body>
</html>