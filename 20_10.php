<?php
/*1 задание
$arr1 = array ('4', '45', '72', '7567', '5435', '123');
echo '<pre>';
print_r($arr1);
echo '</pre>';*/
//2 задание
/*$arr2 = array();
$elements = 50;
$num1 = 5;
$num2 = 10;
$count1 = 0;
$count2 = 0;
for ($i = 0; $i < $elements ; $i++){
    $arr2[$i]=rand(0,50);
    if($arr2[$i] == $num1){
        $count1++;}
    if($arr2[$i] == $num2){
            $count2++;
        
        }
}
//print_r($arr2);
echo "Количество 5: $count1";
echo'<br>';
echo "Количество 10:$count2";*/
//3 задание
/*$arr3 = array ();
$len = 50;
for($i = 0; $i < $len; $i++){
    $arr3[$i] = mt_rand(0, 50);
        if($arr3[$i] % 2 == 0){
          echo "<span style='color:red;'> $arr3[$i]  </span>";
        }
          else {
            echo "<span style='color:green;'> $arr3[$i]  </span>";
          }
      }

*/
//4 задание
/*$arr4 = array();
$elements = 100;
$sum = 0;
for($i = 0; $i < $elements; $i++){
    $arr4[$i]=rand(0,50); 
    $sum = $sum + $arr4[$i];
if($arr4[$i] == 0){
    break;  
}
}
print_r($arr4);
echo'<br>';
echo $sum;*/



//5 задание
/*$k = 89632154789;
$sum = 0;
while ($k > 0) {
    if (!($k%2)){
        $sum = $sum + $k % 10;
    }
    $k = $k / 10; 
}    
echo "$sum";*/




?>