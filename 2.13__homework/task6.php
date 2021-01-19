<!--
    Задание 6
Создайте переменную $studentsCount — присвойте ей случайное значение от 1 до 1000000.
Создайте программу, которая выведет в нужной форме текстовое сообщение,
 например такие “на учебе 100 студентов”, или “на учебе 2 студента” и т.д.
 -->

 <?php
    $studentsCount = rand(1, 1000000);

        if (preg_match("/([234])$/", $studentsCount)) {
            $ending = 'а';
        }  elseif (preg_match("/([05-9]|1\d)$/", $studentsCount)) {
            $ending = 'ов';
        }  else {
            $ending = '';
        }
      
       echo "На учебе $studentsCount студент" . $ending;

 ?>


