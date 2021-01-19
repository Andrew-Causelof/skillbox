<!--
    Задание 5
Шоссе распростерлось от 0 до 1000 км. На этом шоссе в случайных местах находятся два города.
 В каждом городе действует ограничение скорости: 70 км/ч, а за городом ограничение: 90 км/ч.

Даны (заведите переменные со значением)

$city1 — километр шоссе — центр первого города,
$city1Radius — радиус города 1,
$city2 — километр шоссе — центр второго города,
$city2Radius — радиус второго города.
По шоссе едут 10 машин, для каждой известен километр шоссе (случайное целое число от 0 до 1000) на котором машина находится в данный момент. Все автолюбители строго соблюдают скоростной режим. Для каждой машины выведите подобную строку:

"Машина 4 едет по городу на 3 км со скоростью не более 70"
 -->
 <?php
    $city1 = rand(0,1000);
    $city1Radius = rand(10, 100);
    $city2 = rand(0,1000);
    $city2Radius = rand(10, 100); 
    $cars = []; 

    for ($i=0; $i < 10; $i++) { 
        $cars[$i]['location'] = rand(0, 1000);
        $location = $cars[$i]['location'];
        
        if (($location > $city1 - $city1Radius) && ($location < $city1 + $city1Radius) || ($location > $city2 - $city2Radius) && ($location < $city2 + $city2Radius)){
            $cars[$i]['speed']  = '70';
            $cars[$i]['where']  = 'по городу';

        } else {
            $cars[$i]['speed']  = '90';
            $cars[$i]['where']  = 'за городом';
        }
        
    }

 ?>

 <!DOCTYPE html>
 <html lang="ru">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Задание 5</title>
     <h4>Исходные данные</h4>
     <p> <b><?= $city1?></b> километр шоссе — центр первого города</p>
     <p> <b><?= $city1Radius?></b> радиус первого города</p>
     <p> <b><?= $city2?></b> километр шоссе — центр второго города</p>
     <p> <b><?= $city2Radius?></b> радиус второго города</p>

     <div class="autoban" style="width:1000px; border: 2px solid #000; margin: 100px 0px 100px 0px; height: 1px; position: relative;">
        <div class="first-city" style="position:absolute; left: <?= $city1?>px; top:-<?=$city1Radius?>px">
            <div class="first-city_radius" 
                 style=
                 "
                    width: <?=$city1Radius * 2?>px; 
                    height: <?=$city1Radius * 2?>px;
                    border: 1px solid red;
                    background: transparent;
                    border-radius: 50%;
                    transform: translateX(-50%);
                 ">
            </div>
        </div>
        <div class="second-city" style="position:absolute; left: <?= $city2?>px; top:-<?=$city2Radius?>px">
            <div class="first-city_radius" 
                 style=
                 "
                    width: <?=$city2Radius * 2?>px; 
                    height: <?=$city2Radius * 2?>px;
                    border: 1px solid green;
                    background: transparent;
                    border-radius: 50%;
                    transform: translateX(-50%);
                 ">
            </div>
        </div>

        <?php foreach ($cars as $number => $car):?>
            <div class="car-<?=$number?>" style="position:absolute; left: <?= $car['location']?>px; top: -5px">
                <div class="car_radius"
                style=
                "
                    width: 10px; 
                    height: 10px;
                    background: orange;
                    border-radius: 50%;
                ">
                <span><?=$number + 1?></span>
                </div>
            </div>
         <?php endforeach; ?>


     </div>


     <h4>Автомобили на трассе</h4>

     <?php foreach ($cars as $number => $car):?>
        <p>
            Машина <?= $number + 1?> 
            едет <?=$car['where']?>
            на <?= $car['location']?> км  
            со скоростью не более <?= $car['speed']?>
        </p>
     <?php endforeach; ?>

 </head>
 <body>
    
     
 </body>
 </html>