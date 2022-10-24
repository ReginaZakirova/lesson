<?php
echo 'Первое Задание'; 
echo '<br>';
echo '<br>';
$str = 'fact';
echo str_replace('fact', 'Fact', $str);
echo '<br>';
echo '<br>';
echo 'Второе Задание'; 
echo '<br>';
echo '<br>';
$str = "Никифоров Никита Дмитриевич";
$arr = explode(' ', $str);
///print_r($arr);
echo $arr[1] . ' ' . $arr[0];
echo '<br>';
echo '<br>';
echo 'Третье Задание';
echo '<br>';
echo '<br>';
$str = "Привет, мир";
echo substr_count($str, 'и');
echo '<br>';
echo '<br>';
echo 'Четвертое Задание';
echo '<br>';
echo '<br>';
$str = 'html css php';
echo $str;
echo '<br>';
echo mb_substr($str, 0, 4);
echo '<br>';
echo mb_substr($str, 5, 3);
echo '<br>';
echo mb_substr($str, 9, 3);
echo '<br>';
echo '<br>';
echo 'Пятое Задание';
echo '<br>';
echo '<br>';
$str = 'i am your father, Luke.png';
if(mb_substr($str, -4) =='.png'){
    echo "Да";
}
else{
    echo "Нет";
}
    