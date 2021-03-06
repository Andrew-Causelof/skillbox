<?php
// Полезные массивы с данными
// научимся хранить данные в массивах
// Для хранения однородных структурированных данных очень хорошо подходят ассоциативный массивы


// 1. Создайте ассоциативный массив животных animals
// данные: мышь - это животное грызун, конь - скачет по полям, хрюшка - кушает желуди
// # ключом элементам массива сделайте - имя животного, а значением - его описание (помните про английские ключи)

// 2. Доработаем этот массив, добавим в него больше данных, теперь для каждого животного у нас будет не только описание, но и другие параметры:
// мышь - это животное грызун, 4 лапы, хвост: лысый
// конь - скачет по полям, 4 ноги, хвост: пушистый
// хрюшка - кушает желуди, 4 ноги, хвост: крючком
// # Для каждого животного создайте ассоциативный массив, с 3-мя полями: описание, количество лап, вид хвоста и замените строки в массиве animals этими массивами

// 3. еще одно уточнение теперь мы знаем, чуть больше о хвостах:
// хвост мыши - лысый, 10 см
// хвост коня - пушистый, 50 см
// хвост хрюшки - крючком, 4 см
// # теперь хвост это тоже массив с двумя полями - тип и размер, создайте такие массивы и поместите внутрь массива animals

// 4. А теперь опишем ферму, на которой живут эти животный, и на ней есть разные домики для зверьков
// создайте массив buildings с описанием домов, ключом сделайте название дома на английском языке, на ферме следующие дома:
// Жилой дом, этажей 2, цвет - синий
// Стойла, этаже 1, цвет - зеленый
// Будка, этажей 1, цвет - красный
// Элитный-гараж, этажей 5, цвет - черный

// 5. Теперь нам нужно расселить животных по домам, добавьте каждому животному поле - в котором укажите где оно живет
// мышь живет в жилом доме
// конь живет в стойле
// хрюшка тоже живет в стойле
// # Лучше сделать "ссылку" на дом, для этого в качестве значения укажите ключ из массива buildings

// 6. Теперь нам нужно поделиться информацией о всей ферме с кем-то, но на почте нам сказали, что мы можем отправить только одну переменную
// создайте переменную farm с двумя полями animals и buildings и поместите в них значения из соответствующих массивов
// # в качестве значений можно указать значения из других переменных

// 7. Почта наконец пришла и вы открыли конверт, а там массив farm используя этот массив:
// выведите сколько лап у хрюшки

// выведите какого цвета будка

// выведите длину хвоста местных коней

// создайте переменную animal и поместите в нее имя одно из названий животных, на английском (один из ключей массива $animals)
$animal = 'mouse';
// Выведите описание животного, которое помещено в переменной $animal

// Выведите название помещения, в котором живет мышь
// # зная тип дома, в котором живет мышь, можно по этому типу узнать как называется этот дом на ферме
