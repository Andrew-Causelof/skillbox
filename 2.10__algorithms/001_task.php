<?php

// Задание 1 - Подсчет различных букв в слове
// Дано слово или предложение (поместите любой текст в переменную line), необходимо подсчитать сколько раз в нем встречается каждый различный символ (большие и маленькие буквы считать за разные символы).
// например: "Student, hello!"
// S - 1
// t - 2
// u - 1
// d - 1
// e - 2
// n - 1
// , - 1
//   - 1
// h - 1
// l - 2
// o - 1
// ! - 1

$line = '';

if(isset($_POST['solveIt'])) {
    $line = $_POST['inputstring'];
    $outputArray = [];

    foreach(str_split($line) as $letter) {
        $outputArray[$letter] == NULL ? $outputArray[$letter] = 1 : $outputArray[$letter] += 1;
    }

}
    

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1 - Подсчет различных букв в слове</title>
        
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="description">
        <h1>Задание 1 - Подсчет различных букв в слове</h1>
        <p>Дано слово или предложение (поместите любой текст в переменную line),<br> 
        необходимо подсчитать сколько раз в нем встречается каждый различный символ <br>
         (большие и маленькие буквы считать за разные символы). <br>
            например: "Student, hello!"</p>
    </div>

    <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" name="problem">
        <input type="text" value="" name="inputstring">

        <input type="submit" name="solveIt" value="calculate">

    </form>

    <div class="output-container">
        <h2>Решение Задачи:</h2>
            <ul>
                <?php foreach($outputArray as $letter => $value ):?>
                     <li><?=$letter?> --- <?=$value?> </li> 
                <?endforeach;?>
            </ul>   
    </div>
</div>

    
</body>
</html>

