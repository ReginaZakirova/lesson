<?php
echo '<br>' . "<b>Задача 1</b>" . '<br>';
print_r($_GET);

?>


<!-- /*
PHP 9-10
Слайд 13
1. Создать функцию, которая сравнивает два числа и возвращает наибольшее.
1. Объявить функции
2. В функции объявить 2 переменные, присвоить им значения
3. Задать конструкцию if
4. Не забыть про return
*/
echo "1. Создать функцию, которая сравнивает два числа и возвращает наибольшее." . '<br>';
function minmax() {
    $a = 3;
    $b = 5;
    if($a > $b) {
        return $a;
    }
    else {
        return $b;
    }
}
$max = minmax();
echo "максимальное число $max" . '<br>';

/*
2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.
1. Объявить функции
2. Во входных параметрах должны быть 2 переменные - катеты
3. Вспомнить теорему Пифагора
4. По теореме Пифагора вычислить гипотенузу и вернуть ее
*/
echo '<br>' . "2. Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника." . '<br>';
function math($c1, $c2){
    $result = sqrt(($c1)**2 + ($c2)**2);
    return $result;
}
$cat1 = 2;
$cat2 = 2;
math($cat1, $cat2);
$hypotenuse = math($cat1, $cat2);
echo "гипотенуза равна $hypotenuse" . '<br>';

/*
3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран.
Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.
1. Объявить функции
2. Во входных параметрах должна быть 1 переменная
3. Запустить цикл (например, while)
4. В цикле сделать проверку на значение числа (не больше 1 000 000)
5. Как только превысили 1 000 000, написать на экране сообщение
*/
echo '<br>' . "3. Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран.
Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела." . '<br>';
function million($x) {
    while ($x < 1000000) {
        $x = $x*10;
        echo $x . '<br>';
    }
    echo "вы достигли предела" . '<br>';
}
$number = 10;
million($number);

/*
Слайд 14
4. Создать функцию, в которой объявляется массив и случайными элементами.
1. Объявить функции
2. В функции объявить и проинициализировать массив случайными числами (размерность не важна)
*/
echo '<br>' . "4. Создать функцию, в которой объявляется массив и случайными элементами." . '<br>';
function arr() {
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array[$i] = mt_rand(0, 9);
    }
    return $array;
    
}  
echo '<pre>';
print_r(arr());
echo '</pre>';

/*
5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.
1. Объявить и проинициализировать массив случайными числами (размерность не важна)
2. Объявить функции
3. Входной параметр функции - массив из п.1
4. В функции запустить цикл, посчитать сумму всех элементов массива и количество элементов массива (не пользуемся встроенными функциями, пишем свою)
5. Посчитать среднеарифметическое значение массива и вернуть его
*/
echo '<br>' . "5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива." . '<br>';
$array5 = [];
    for ($i = 0; $i < 5; $i++) {
        $array5[$i] = mt_rand(0, 9);
    }
echo '<pre>';
print_r($array5);
echo '</pre>';

function array5($val){
    $count = 0;
    $sum = 0;
    foreach ($val as $value) {
        $count++;
        $sum += $value;
    }
    $res = $sum/$count;
    return $res;
}
$answer = array5($array5);
echo "Среднеарифметическое значение массива равно $answer" . '<br>';

// 6.Создать функцию, которая принимает строку. Вернуть количество слов в строке.
echo '<br>' . "6.Создать функцию, которая принимает строку. Вернуть количество слов в строке." . '<br>';
function stringCount($str) {
    $arr6 = explode(" ", $str);
    $numberWords = 0;
    foreach($arr6 as $word) {
        $numberWords++;
    }
    return $numberWords;
}
$string = "Создать функцию, которая принимает строку";
$result6 = stringCount($string);
echo "Количество слов в строке $result6" . '<br>';

// 7.Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.
echo '<br>' . "7.Написать функцию, которая рассчитывает последовательность чисел Фибоначчи." . '<br>';
function fibonachi($n){
    if($n == 0) {
        return 0;
    }
    if($n == 1 || $n == 2) {
        return 1;
    } else {
        return fibonachi($n - 1) + fibonachi($n - 2);
    }
}

for ($n = 0; $n <= 20; $n++) {
    echo fibonachi($n) . ", ";
}

/*
Слайд 15
1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
4.Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.
5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку
*/
-->
<!-- /*Слайд 15
1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
Выведите на экран значения, которые ввел/выбрал пользователь.

1. Вспомнить html-разметку и создать html-форму
2. Не забудь для тектовых полей указать атрибут name
3. Принять значения из массива $_GET/$_POST
4. Вывести значения на экран
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
	<p>
		<input type="text" name="login">
	</p>
	<p>
		<textarea name="comment" id="" cols="30" rows="10"></textarea>
	</p>
	<p>
		<input type="radio" name="getpost" value="get">Get
		<input type="radio" name="getpost" value="post">Post
	</p>
	<p>
		<input type="checkbox" name="html" value="html">HTML
		<input type="checkbox" name="html" value="php">PHP
		<input type="checkbox" name="html" value="git">GIT
	</p>
    <p>
        <button type="submit">Send!</button>
	</p>
</form>
</body>






<?php
echo '<br>' . "<b>Задача 2</b>" . '<br>';
$_POST['pass'] = md5($_POST['pass']);
print_r($_POST);
/*
2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST
*/
?>
<form action="" method="post">
    Login <input type="text" name = "login">
    Password <input type="password" name = "pass">
    <button type="submit">Send!</button>
</form>

<?php 
/*
3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). 
Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением,
что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
*/
echo "<b>Задача 3</b>" . '<br>';
?>
<form action="" method="post">
    <p>
        <label for="login3">выберете логин:</label>
        <select name="login3" id="login3">
            <option value="tom">Tom</option>
            <option value="bob">Bob</option>
            <option value="kate">Kate</option>
            <option value="anna">Anna</option>
        </select>
    </p>
    <p>
        Password <input type="password" name = "pass3">
    </p>
    <button type="submit">Send!</button>
    </p>
</form>
<?php
if ($_POST['pass3'] == 001 && $_POST['login3'] == "anna") {
    echo "доступ к секретным страницам открыт". "<br>";
} else {
    echo "неверный логин/пароль" . '<br>';
}
unset($_POST);
print_r($_POST);
?>

<!--4. Создайте форму генерации ссылки с параметром:
Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
*/  -->

<?php 
echo "<b>Задача 4</b>" . '<br>';
?>
<form action="" method="get">
    <p>
        <label for="lab">выберите лаб:</label>
        <select name="l" id="lab">
            <option value="1">Лаб1</option>
            <option value="2" >Лаб2</option>
            <option value="3" >Лаб3</option>
            <option value="4" >Лаб4</option>
        </select>
    </p>
        <button type="submit">Send!</button>
    </p>
</form>
<?php
$l = $_GET["l"];
echo "<a href='phpcourse.php?l=$l'>Ссылка</a>";
?>
 

<!-- // Слайд 16
// 1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
// *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
// 2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
// 3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
// Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:
//  - если она оказалась более 15, то результат: «У Вас покладистый характер»;
//  - если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
//  - если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
// Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
// -->

