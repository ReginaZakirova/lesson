<?
/*Задание 4*/
$str = file_get_contents("text1.txt");

$search = explode(" ", $str);

$str2 = file_get_contents("text2.txt");

$search2 = explode(" ", $str2);

$sum = array_merge($search,$search2);
$res = array_unique($sum);

$res_text = implode(' ',$res);

$fh = fopen('text3.txt', 'w');
fwrite($fh, $res_text);
fclose($fh);


echo $res_text;
echo '<pre>';
print_r($res);
echo '</pre>';
/*Задание 5*/

    $f = fopen('text4.txt','w');
    foreach ($search as $item){
        foreach ($search2 as $item2){
            if($item==$item2){
                fwrite($f,$item2 . ' ');              
            }
        }
    }
    fclose($f);
?>