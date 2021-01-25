<!--
    Задание 6
Создайте переменную $studentsCount — присвойте ей случайное значение от 1 до 1000000.
Создайте программу, которая выведет в нужной форме текстовое сообщение,
 например такие “на учебе 100 студентов”, или “на учебе 2 студента” и т.д.
 -->

<?php
$studentsCount = rand(1, 1000000);

if (preg_match("/([05-9]|1\d)$/", $studentsCount)){
    $ending = 'ов';
}  elseif (preg_match("/([234])$/", $studentsCount)) {
    $ending = 'а';
}  else {
    $ending = '';
}

echo "На учебе $studentsCount студент" . $ending . '<br>';

// Проверка - типовой шаблон для окончаний
function plural($n, $form1, $form2, $form5){
    $n = abs($n) % 100;
    $n1 = $n % 10;
    if ($n > 10 && $n < 20) return $form5;        
    if ($n1 > 1 && $n1 < 5) return $form2;        
    if ($n1 == 1) return $form1;        
    return $form5;
    }

$ending = plural($studentsCount, "", "а", "ов");
echo "На учебе $studentsCount студент" . $ending;

?>




