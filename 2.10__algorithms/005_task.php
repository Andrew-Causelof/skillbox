<?php

// Задание 5 - Поиск max в двумерном массиве
// Матрица с числами должна быть прямоугольная, ее размер задается двумя случайными числами **m** и **n** от 3 до 10
// Создайте двумерный массив-матрицу matrix из случайных чисел от 0 до 9 размерности m x n

// Найдите в ней максимальное значение, и номер строки и столбца, где оно встречается первый раз.

// Выведите матрицу в удобном формате,
//а также это минимальное значение и номера строки и столбца, где оно встретилось первый раз
// Пример вывода:
// 1 4 1 1
// 4 2 6 3
// 1 7 2 2
// 0 0 0 7
// 4 5 7 0
// Минимальное значение: 7 на строке: 3 в столбце: 2



$matrix = [];

$m = rand(3, 10);
$n = rand(3, 10);

$minValue = 10;
$minValueRow = "";
$minValueColumn = "";
$maxValue = 0;
$maxValueRow = "";
$maxValueColumn = "";


for ($i=0; $i < $m ; $i++) { 
    for ($j=0; $j < $n ; $j++) { 
        $matrix[$i][$j] = rand(0, 9);
    }
}

for ($i=0; $i < $m ; $i++) { 
    for ($j=0; $j < $n ; $j++) { 
        if ($matrix[$i][$j] < $minValue ) {
            $minValue = $matrix[$i][$j];
            $minValueRow = $i;
            $minValueColumn = $j;
        }

        if ($matrix[$i][$j] > $maxValue ) {
            $maxValue = $matrix[$i][$j];
            $maxValueRow = $i;
            $maxValueColumn = $j;
        }

    }
}




?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 5 - Поиск max в двумерном массиве</title>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="description">
        <h1>Задание 5 - Поиск max в двумерном массиве</h1>
        <p>
        
         Матрица с числами должна быть прямоугольная, ее размер задается двумя случайными числами **m** и **n** от 3 до 10 <br>
         Создайте двумерный массив-матрицу matrix из случайных чисел от 0 до 9 размерности m x n <br>
         Найдите в ней максимальное значение, и номер строки и столбца, где оно встречается первый раз. <br>
         Выведите матрицу в удобном формате, а также это минимальное значение и номера строки и столбца, где оно встретилось первый раз <br>
         Пример вывода:<br>
         1 4 1 1<br>
         4 2 6 3<br>
         1 7 2 2<br>
         0 0 0 7<br>
         4 5 7 0<br>
         Минимальное значение: 7 на строке: 3 в столбце: 2 <br>

        </p>
    </div>

    <div class="random-array">
        <h2>Массив случайных чисел матрицы <?=$m ?> * <?=$n ?> </h2>
        <ul>
            <?php for ($i=0; $i < $m; $i++): ?>
                 <span> 
                    <?for ($j=0; $j < $n ; $j++): ?>
                        <?=$matrix[$i][$j] . " "?>
                    <? endfor;  ?>
                </span> <br>
            <?endfor?> 
        </ul>
    </div>

    <div class="output-container">
        <h2>Решение Задачи:</h2>
        <span> Минимальное значение: <?=$minValue ?>, на строке: <?=$minValueRow + 1  ?> в столбце: <?=$minValueColumn + 1 ?> </span>
        <br>
        <span> Максимальное значение: <?=$maxValue ?>, на строке: <?=$maxValueRow + 1  ?> в столбце: <?=$maxValueColumn + 1 ?> </span>
    </div>
</div>

    
</body>
</html>
