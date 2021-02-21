<?php
namespace menu;

use function mainComponents\isCurrentUrl;

/** Функция для сортировки многомерного ассоциативного массива меню
 * @param array $array - входной массив, для сортировки
 * @param string $key - ключ элементов этого массива, по которому будет осуществлена сортировка
 * @param string $sort - направление сортировки по возрастанию/по убыванию (SORT_ASC/SORT_DESC)
 */
function arraySort(array $array, $key = 'title', $sort = SORT_ASC): array
{
     usort($array, function ($a, $b) use ($key, $sort) {
        return $sort == SORT_ASC ? $a[$key] > $b[$key] : $a[$key] < $b[$key];
    });
    return $array;
}

/** Функцию обрезает строку если ее длина больше 15 символов
 * @param string $line - исходная строка для  проверки
 * @param int $length - максимальная длина строки, число символов
 * @param string $appends - постфикс добавляемый к возвращаемой, обрезаной строке
 */
function cutString(string $line, int $length = 12, string $appends = '...'): string
{

    if(mb_strlen($line) > $length + 3){
        return  mb_strimwidth($line, 0, $length + 3, $appends);
    } else {
        return $line;
    }

}

/**
 * Функция вывода меню в соответствии с переданным параметром
 * @param array $menuArr ассоциированный массив меню для вывода
 * @param string $typeMenu название меню для вывода header/footer
 */

function showMenu(array $menuArr, string $typeMenu = ''){

    if(isset($menuArr)) {

        ?> <ul class="main-menu <?=$typeMenu?>"> <?php
        foreach($menuArr as $item):
            ?>  
            <li><a href="<?=$item['path']?>" class="<?= isCurrentUrl($item['path']) ? 'active' : '' ?>"><?=cutString($item['title'])?></a></li>
            <?php
        endforeach;
        ?> </ul> <?php

    } else {
        echo '<div style="color: red;">ERROR: Не верно передан параметр в функцию menu/showMenu </div>';
    }
}

