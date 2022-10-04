<?php
/*

Слайд 13
1. Создать функцию, которая сравнивает два числа и возвращает наибольшее.
1. Объявить функции
2. В функции объявить 2 переменные, присвоить им значения
3. Задать конструкцию if
4. Не забыть про return */
echo "<br>Задание 1 <br>";
function firstTaskLesson10() {
    $a = 10;
    $b = 5;
    if ($a > $b) {
        return $a;
    }
    else {
        return $b;
    }
}
$result = firstTaskLesson10();
echo $result . "<br>";

/*
2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.
1. Объявить функции
2. Во входных параметрах должны быть 2 переменные - катеты
3. Вспомнить теорему Пифагора
4. По теореме Пифагора вычислить гипотенузу и вернуть ее */
echo "<br>Задание 2 <br>";
function secondTaskLesson10($a, $b) {
    $c = sqrt($a * $a + $b *  $b);
    return $c;
}
echo "Гипотенуза = " . secondTaskLesson10(3, 4) . "<br>";

/*
3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран.
Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
1. Объявить функции
2. Во входных параметрах должна быть 1 переменная
3. Запустить цикл (например, while)
4. В цикле сделать проверку на значение числа (не больше 1 000 000)
5. Как только превысили 1 000 000, написать на экране сообщение */
echo "<br>Задание 3 <br>";
function thirdTaskLesson10($num)
{
    while ($num <= 1000000) {
        $num *= 10;
        echo "$num <br>";
    }
    echo "Предел достигнут! <br>";
}
thirdTaskLesson10(10);

/*
Слайд 14
4. Создать функцию, в которой объявляется массив и случайными элементами.
1. Объявить функции
2. В функции объявить и проинициализировать массив случайными числами (размерность не важна) */
echo "<br>Задание 4 <br>";
function fourthTaskLesson10()
{
    $arr1 = [];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $arr1[$i][$j] = mt_rand(1, 10);
        }
    }
    print_r($arr1);
}
fourthTaskLesson10();
echo "<br>";

/*
5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.
1. Объявить и проинициализировать массив случайными числами (размерность не важна)
2. Объявить функции
3. Входной параметр функции - массив из п.1
4. В функции запустить цикл, посчитать сумму всех элементов массива и количество элементов массива (не пользуемся встроенными функциями, пишем свою)
5. Посчитать среднеарифметическое значение массива и вернуть его */
echo "<br>Задание 5 <br>";
function fifthTaskLesson10($arr) {
    $length = 0;
    $sum = 0;
    foreach($arr as $value) {
        $sum += $value;
        $length++;
    }
    $average = $sum / $length;
    return $average;
}

$arr2 = [];
for ($i = 0; $i < 10; $i++) {
    $arr2[$i] = mt_rand(1, 100);
}
print_r($arr2);
echo "Среднеарифметическое равно " . fifthTaskLesson10($arr2) . "<br>";

/*
6.Создать функцию, которая принимает строку. Вернуть количество слов в строке. */
echo "<br>Задание 6 <br>";
function sixthTaskLesson10($str) {
    return count(explode(' ', $str));
}
$message = "Мама мыла раму";
echo "В строке '$message' " . sixthTaskLesson10($message) . " слов(а). <br>";

/*
7.Написать функцию, которая рассчитывает последовательность чисел Фибоначчи. */
echo "<br>Задание 7<br>";
function seventhTaskLesson10($n = 1) {
    echo "Последовательность Фибоначчи для первых $n элементов: 0"; // <-- Сразу выводим всегда первый элемент
    /*
        fib1    0   1   1   2   3   <-- На каждом шаге (кроме 1-ого) выводим fib1 как текущий элемент последовательности
        fib2    1   1   2   3   5
        fibn    1   2   3   5   8
    */
    $fib1 = 0;
    $fib2 = 1;
        for ($i = 0, --$n; $i < $n; $i++) {
            $fibn = $fib1 + $fib2;
            $fib1 = $fib2;
            $fib2 = $fibn;
            echo ", $fib1";
        }
}
seventhTaskLesson10(10);


/*
Слайд 15
1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
4.Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку */
