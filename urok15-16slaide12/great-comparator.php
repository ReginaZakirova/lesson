<?php
// Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл
$txt1 = file("text1.txt", FILE_IGNORE_NEW_LINES);
$txt2 = file("text2.txt", FILE_IGNORE_NEW_LINES);
$kley = array_merge($txt1, $txt2);
file_put_contents("text3.txt", implode("\n", array_unique($kley)));

// Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения
file_put_contents("text4.txt", implode("\n", array_intersect($txt1, $txt2)));