<?php

// Задание 6 - Сортировка массивов
// Возьмите предыдущую матрицу и отсортируйте четные строки по возрастанию, а нечетные по убыванию, и снова выведите массив в удобном формате
// (запрещено использовать встроенные в php функции сортировки *sort|asort|ksort|usort*)
// Пример вывода:
// 4 1 1 1
// 2 3 4 6
// 7 2 2 1
// 0 0 0 7
// 7 5 4 0



$matrix = [];
$sortedMatrix = [];

$m = rand(3, 10);
$n = rand(3, 10);


for ($i=0; $i < $m ; $i++) { 
    for ($j=0; $j < $n ; $j++) { 
        $matrix[$i][$j] = rand(0, 9);
    }
}



function sortMatrix($array, $m , $n){

    for ($i=0; $i < $m ; $i++) { 
        for ($k=0; $k < $n-2 ; $k++) { 
            for ($j=0; $j < $n - 1 ; $j++) { 
                $nextValue = $array[$i][$j + 1];
                    if( ($array[$i][$j] > $array[$i][$j + 1]) && ($i % 2 == 0) ) {
                    $array[$i][$j + 1] = $array[$i][$j];
                    $array[$i][$j] = $nextValue;
                    }
                    if( ($array[$i][$j] < $array[$i][$j + 1]) && ($i % 2 != 0) ) {
                    $array[$i][$j + 1] = $array[$i][$j];
                    $array[$i][$j] = $nextValue;
                    }
            }            
        }  
    }

    return $array;    
}

$sortedMatrix = sortMatrix($matrix, $m, $n);




?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 6 - Сортировка массивов</title>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="description">
        <h1>Задание 6 - Сортировка массивов</h1>
        <p>

         Возьмите предыдущую матрицу и отсортируйте четные строки по возрастанию,  <br>
         а нечетные по убыванию, и снова выведите массив в удобном формате <br>
         (запрещено использовать встроенные в php функции сортировки *sort|asort|ksort|usort*) <br>
         Пример вывода: <br>
         4 1 1 1 <br>
         2 3 4 6 <br>
         7 2 2 1 <br>
         0 0 0 7 <br>
         7 5 4 0 <br>
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
        <ul>
            <?php for ($i=0; $i < $m; $i++): ?>
                 <span> 
                    <?for ($j=0; $j < $n ; $j++): ?>
                        <?=$sortedMatrix[$i][$j] . " "?>
                    <? endfor;  ?>
                </span> <br>
            <?endfor?> 
        </ul>
        
    </div>
</div>

    
</body>
</html>
