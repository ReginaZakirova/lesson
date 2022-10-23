<?php 
// 4. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. 
// Повторы не добавлять в третий файл.
// 5. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.

$textOne = file_get_contents('one.txt');  // функция вывода текста из файла
$textTwo = file_get_contents('two.txt');  // функция вывода текста из файла

$arrTextOne = explode(". ", rtrim($textOne, ". "));  //разделение строки по точке и запись элементов в массив $arrTextOne
$arrTextTwo = explode(". ", rtrim($textTwo, ". "));  //разделение строки по точке и запись элементов в массив $arrTextTwo

$repeats = [];  // инициализируем пустой массив
$k = 0;  // инициализируем переменную $k (счетчик) и присваиваем ей значение 0. 
$max_count = max(count($arrTextOne), count($arrTextTwo));
// Проходимся по массивам, находим одинаковые элементы и записываем их в массив $repeats.
for($i=0; $i < count($arrTextOne); $i++) {
    for($j = 0; $j < count($arrTextTwo); $j++) {
        if($arrTextOne[$i] == $arrTextTwo[$j]) {
            $repeats[$k] = $arrTextOne[$i];
            $k++;
        }
    }
}

// Из второго файла удаляем повторы
foreach ($arrTextTwo as $k => $v) {
    foreach($repeats as $kk => $vv) {
        if($v == $vv){
            unset($arrTextTwo[$k]);   //удаление элемента массива по ключу
        }
    }
}

$arrThreeTmp = array_merge($arrTextOne, $arrTextTwo); //объединяем два массива

foreach($arrThreeTmp as &$item) {$item = $item . '. ';}

foreach($repeats as &$item) {$item = $item . '. ';}

file_put_contents('three.txt', $arrThreeTmp);  //передаем $arrThreeTmp в файл three.txt
file_put_contents('four.txt', $repeats);  //передаем $repeats в файл four.txt
?>