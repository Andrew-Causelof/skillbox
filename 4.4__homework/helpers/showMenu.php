<?php
namespace menu;

/**
 * функция- правило для сортировки многомерного массива по ключу
 * возвращает true если первое значение больше второго
 */
function moreThan($key) {
    return function ($a, $b) use ($key) {
        return $a[$key] > $b[$key];
    };
}
/**
 * функция- правило для сортировки многомерного массива по ключу
 * возвращает true если первое значение меньше второго
 */
function lessThan($key) {
    return function ($a, $b) use ($key) {
        return $a[$key] < $b[$key];
    };
}

/** Функция для сортировки многомерного ассоциативного массива меню
 * @param array $array - входной массив, для сортировки
 * @param string $key - ключ элементов этого массива, по которому будет осуществлена сортировка
 * @param string $sort - направление сортировки по возрастанию/по убыванию (SORT_ASC/SORT_DESC)
 */
function arraySort(array $array, $key = 'title', $sort = SORT_ASC): array
{

    if($sort == SORT_ASC) {

        usort($array, moreThan($key));

        return $array;

    } elseif ($sort == SORT_DESC) {

        usort($array, lessThan($key));

        return $array;

    }
}

/** Функцию обрезает строку если ее длина больше 15 символов
 * @param string $line - исходная строка для  проверки
 * @param int $length - максимальная длина строки, число символов
 * @param string $appends - постфикс добавляемый к возвращаемой, обрезаной строке
 */
function cutString(string $line, int $length = 12, string $appends = '...'): string
{

    if(mb_strlen($line) > $length + 3){
        return  mb_substr($line, 0, $length) . $appends;
    } else {
        return $line;
    }

}

/**
 * Функция вывода меню в соответствии с переданным параметром
 * @param string $menuName название меню для вывода header/footer
 * @param array $menuArr ассоциированный массив меню для вывода
 * @param string $url  - строка текущего раздела, без запроса
 * @return html список меню в соответствии с переданным параметром
 */
function showMenu(string $menuName, array $menuArr, string $url){

    if(isset($menuArr)) {

        if($menuName == 'header') {

            $menuArr = arraySort($menuArr, 'sort', SORT_ASC);
            foreach($menuArr as $item):
                $item['path'] ==  $url ? $style = "font-size: 16px; text-decoration:underline;" : $style = "font-size: 16px;"
                ?>  
                <li><a href="<?=$item['path']?>" style="<?=$style?>"><?=cutString($item['title'])?></a></li>
                <?
            endforeach;

        } elseif ($menuName == 'footer') {
    
            $menuArr = arraySort($menuArr, 'title', SORT_DESC);
            foreach($menuArr as $item):
                $item['path'] ==  $url ? $style = "font-size: 12px; text-decoration:underline;" : $style = "font-size: 12px;"
                ?>  
                <li><a href="<?=$item['path']?>" style="<?=$style?>"><?=cutString($item['title'])?></a></li>
                <?
            endforeach;
           
        } else {
            echo '<div style="color: red;">ERROR: Не верно передан параметр в функцию menu/showMenu </div>';
        }    
    }
}
