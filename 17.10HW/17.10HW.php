<?php
$str = file_get_contents('text.txt');
$str2 = file_get_contents('text2.txt');
$result = explode(" ", $str);
$result2 = explode(" ", $str2);
/*$put =  array_diff($result, $result2);
$put2 = array_diff($result2, $result);*/
$sliv = array_merge($result, $result2);
$put = array_unique($sliv);
$put2 = implode(" ", $put);

file_put_contents('text3.txt', $put2);

?>