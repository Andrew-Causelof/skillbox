<?php
namespace mainComponents;

/**
 * Функция возвращает текущий путь от корневой папки без учета запроса
 * @param string $path - полный URL страницы включая запрос
 */
function isCurrentUrl($path): string {
    return parse_url($path, PHP_URL_PATH);
}

/** Функция выводит текущий заголовок секции соответствующий заголовку в меню
 * @param string $url - адрес текущей секции
 */
function getHeader(string $url,array $menuArr): string
{   
    $url = isCurrentUrl($url);

    if ($url == '/index.php') {
        $url =  "/";
    } 
    
    foreach($menuArr as $item) {
        if ($item['path'] == $url ){
            return  $item['title'];
        }
    }
      
}
