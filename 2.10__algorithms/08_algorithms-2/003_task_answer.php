<?php

// Задание 3 - Поиск min элемента в массиве
// Создайте массив values содержащий 10 случайных чисел от 0 до 100, найдите в этом массиве минимальное значение.
// Выведите сам массив, минимальное значение и его позицию в массиве, если таких значений несколько, то выведите первое из них.
$values = [];
for ($i = 0; $i < 10; $i++) {
    $values[] = rand(0, 100);
}
$minIndex = 0;
foreach ($values as $i => $value) {
    if ($values[$minIndex] > $values[$i]) {
        $minIndex = $i;
    }
}

var_dump(implode(', ', $values), $values[$minIndex], $minIndex);
