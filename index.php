<?php
/*

Слайд 13
1. Создать функцию, которая сравнивает два числа и возвращает наибольшее.
1. Объявить функции
2. В функции объявить 2 переменные, присвоить им значения
3. Задать конструкцию if
4. Не забыть про return*/

function lesson10(){
    $a = 10;
    $b = 5;

    if($a>$b){
        return $a;
    }
    else{
        return $b;
    }
}
$result = lesson10();
echo $result;
echo '<hr/>';

/*2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.
1. Объявить функции
2. Во входных параметрах должны быть 2 переменные - катеты
3. Вспомнить теорему Пифагора
4. По теореме Пифагора вычислить гипотенузу и вернуть ее*/
function zadanie2($a, $b){

    $c = sqrt($a*$a + $b*$b);
    return $c;
}
$a=4;
$b=6;
$otvet = zadanie2($a, $b);
    echo $otvet;
    echo '<hr/>';

/*3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран.
Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
1. Объявить функции
2. Во входных параметрах должна быть 1 переменная
3. Запустить цикл (например, while)
4. В цикле сделать проверку на значение числа (не больше 1 000 000)
5. Как только превысили 1 000 000, написать на экране сообщение*/
function zadanie3(){
    $x = 10;
    while($x<1000000){
        $x *= 10;
    echo "$x <br>";
    } 
    echo "Вы достигли предела";
}
$result = zadanie3();
echo $result;
echo '<hr/>';

/*Слайд 14
4. Создать функцию, в которой объявляется массив и случайными элементами.
1. Объявить функции
2. В функции объявить и проинициализировать массив случайными числами (размерность не важна)*/
/*function zadanie4($a, $b){
    $m = array_rand($a, $b);
    echo $m;
}
$a = 0;
$b = 11;
$result = zadanie4($a, $b);
echo $result;
echo '<hr/>';*/

$f4 = function zadanie4(){
    $a = mt_rand(0,11);
    $b = mt_rand(0,11);
    $m = array(array_rand($a,$b));
    print($m)
}
function zadanie4()
echo '<hr/>';

/*5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.
1. Объявить и проинициализировать массив случайными числами (размерность не важна)
2. Объявить функции
3. Входной параметр функции - массив из п.1
4. В функции запустить цикл, посчитать сумму всех элементов массива и количество элементов массива (не пользуемся встроенными функциями, пишем свою)
5. Посчитать среднеарифметическое значение массива и вернуть его*/
function zadanie5(){
    $m = sum($f4)/count($f4)
    print($m)
}
function zadanie5($f4)
echo '<hr/>';


/*6.Создать функцию, которая принимает строку. Вернуть количество слов в строке.
7.*Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.

Слайд 15
1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
4.Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку*/




