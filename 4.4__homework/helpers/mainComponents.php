<?php
namespace mainComponents;


/**
 * Функция возвращает true если path на входе равен текущей странице
 * @param string $path - URL страницы для сравнения с текущим URL страницы
 */
function isCurrentUrl($url): bool {

    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == $url;

}

/** Функция выводит текущий заголовок секции соответствующий заголовку в меню
 * @param string $url - адрес текущей секции
 */
function getHeader(array $menuArr): string
{   
    foreach($menuArr as $item) {
        if (isCurrentUrl($item['path'])){
            return  $item['title'];
        }
    }
     
    return "Страница не найдена.";
}
