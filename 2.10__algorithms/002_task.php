<?php

// Задание 2 - Перестановка букв в слове (циклический сдвиг влево)
// Дано слово (поместите любой текст в переменную word), нужно взять первую букву в слове и поставить ее в конец.
$word = '';

//var_dump($_POST);

if(isset($_POST["solveIt"])){
    $word = $_POST["inputstring"];

    $word = str_split($word);

    array_push($word, $word[0]);

    $word = implode("", $word);

}

?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перестановка букв в слове (циклический сдвиг влево)</title>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="description">
        <h1>Перестановка букв в слове (циклический сдвиг влево)</h1>
        <p>Дано слово (поместите любой текст в переменную word),<br> 
        нужно взять первую букву в слове и поставить ее в конец. <br>
    </div>

    <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" name="problem">
        <input type="text" value="" name="inputstring">

        <input type="submit" name="solveIt" value="calculate">

    </form>

    <div class="output-container">
        <h2>Решение Задачи:</h2>
        <p> <?= $word ?></p>
    </div>
</div>

    
</body>
</html>