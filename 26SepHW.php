<?php
function primer($arrFunction, $b, $a, $c){
    for ($i = 0; $i < $b; $i++){
        $arrFunction[$i] = mt_rand($a,$c);
        //echo "$arrFunction[$i]" .  ' ';
        
    }
    return $arrFunction;
}



echo '3 ЗАДАНИЕ';
$arr = [];
$b = 3;
primer($arr, $b, -10, 10);
echo '<br>';




echo '4 ЗАДАНИЕ';
echo '<br>';
$b = 5;
$arr1 = [];
$min = 101;
$max = -101;
$arr11 = primer($arr1, $b, $max, $min);
print_r($arr11);
/*for ($i = 0; $i < $b; $i++){
    $arr1[$i] = mt_rand(-100.,100);
    echo "$arr1[$i]" . ' ';
}*/
echo '<br>';
function primer2($arrFunction, $b, $a, $c){
for ($i = 0; $i < $b; $i++){
    if ($arrFunction[$i] < $min){
        if ($arrFunction[$i] > 0){
            echo 'Отрицательные числа отсутствуют';
        }   
        else{
            $min = $arrFunction[$i];

        }
    }
}
for ($i = 0; $i < $b; $i++){
    if ($arrFunction[$i] > $max){
    $max = $arrFunction[$i];
    }
}
echo  $min.' '.'<br>';
echo  $max. '.' ; 

echo '<br>';

}
primer2($arr11, $b, $min, $max);

echo '<br>';
echo '<br>';
echo '5 ЗАДАНИЕ ';
echo '<br>';
$arr2 = [
    'Иванов' => ['Математика'=> '4', 'Физика'=> '3', 'Химия'=> '5', 'Информатика'=> '5'],
    'Котов' => ['Математика'=> '5', 'Физика'=> '3', 'Химия'=> '4', 'Информатика'=> '3'],
    'Носов' => ['Математика'=> '3', 'Физика'=> '4', 'Химия'=> '5', 'Информатика'=> '5'],
    'Петров' => ['Математика'=> '5', 'Физика'=> '4', 'Химия'=> '3', 'Информатика'=> '4'],
];
$sumM = 0;
$sumF=0;
$midM = 0;
$midF = 0;
foreach ($arr2 as $key=>$value){
    foreach ($value as $new_key=>$item){
        if($new_key == "Математика")
        $sumM += $item . '<br>';
        if($new_key == "Физика")
        $sumF += $item . '<br>';
    }
}
echo 'Сумма по математике '. $sumM;
echo '<br>';
$midM = $sumM/count($arr2);
echo 'Среднее по математике '. $midM;
echo '<br>';
echo 'Сумма по физике '. $sumF;
echo '<br>';
$mid = $sumF/count($arr2);
echo 'Среднее по физике '. $mid;


/*$sum = 0;
$mid = 0;
foreach ($arr2 as $item){
    $sum= $sum + $item;
}
echo $sum;

echo '<br>';

foreach ($arr2 as $item){
    $mid = array_sum($arr4) / count($arr4);
}
echo $mid;*/

echo '<br>';
echo '<br>';
echo '6 ЗАДАНИЕ ';
echo '<br>';
$arr8 = [
    'Island' => ['Куба', 'Тринидад', 'Ямайка', 'Гаити'],
    'Month' => ['Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль', 'Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
    'Temperature_Kuba' => ['Январь'=> '+23', 'Февраль'=> '+23,7', 'Март'=> '+24,3','Апрель'=> '+25,9','Май'=> '+26,2','Июнь'=> '+27,4','Июль'=> '+28,1','Август'=> '+27,6','Сентябрь'=> '+27,6','Октябрь'=> '+26,8','Ноябрь'=> '+25,2','Декабрь'=> '+24,1',],
    'Temperature_Trinidad' => ['Январь'=> '+27', 'Февраль'=> '+26', 'Март'=> '+27','Апрель'=> '+26','Май'=> '+24','Июнь'=> '+23','Июль'=> '+23','Август'=> '+24','Сентябрь'=> '+25','Октябрь'=> '+27','Ноябрь'=> '+27','Декабрь'=> '+27',],
    'Temperature_Jamaica' => ['Январь'=> '+26', 'Февраль'=> '+26', 'Март'=> '+27','Апрель'=> '+28','Май'=> '+28','Июнь'=> '+29','Июль'=> '+29','Август'=> '+29','Сентябрь'=> '+29','Октябрь'=> '+28','Ноябрь'=> '+28','Декабрь'=> '+27',],
    'Temperature_Haiti' => ['Январь'=> '+24', 'Февраль'=> '+25', 'Март'=> '+23','Апрель'=> '+26','Май'=> '+25','Июнь'=> '+28','Июль'=> '+22','Август'=> '+24','Сентябрь'=> '+25','Октябрь'=> '+26','Ноябрь'=> '+27','Декабрь'=> '+28',],
];
$MaxTemp = 0;
foreach($arr8 as $key=>$value){
    if($key == "Temperature_Kuba"){ 
        foreach ($value as $new_key=>$item){
            echo $key .  max($value) .'<br>';
         }
    }
}
echo '<br>';
echo '<br>';
echo '7 ЗАДАНИЕ ';
echo '<br>';
$arr9 = [[1,2,3,4,5,6],[7,8,9,10,11,12], [13,14,15,16,17,18], [19,20,21,22,23,24],[25,26,27,28,29,30]];
/*foreach($arr9 as $key=>$value){
 foreach($value as $newkey => $newvalue)
 echo $newvalue . ' ';

}*/
/*$max = 0;
for($i = 2; $i <= 6; $i += 2){
    $max = 
}*/

echo '<pre>';
print_r ($arr9);
//создать arr10 одномерный массив и найти также максмальное значение
echo '<br>';
echo '<br>';
echo 'ДОП ЗАДАНИЕ ЗАДАНИЕ ';
echo '<br>';
$arr10 = ['12','5','47','3','79','23'];
$max=0;
for($i=0; $i<count($arr10);$i++){
    if($arr10[$i] > $max){
        $max = $arr10[$i];
    }
}
echo "Максимальное значение $max";

