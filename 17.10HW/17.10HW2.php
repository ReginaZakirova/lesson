<?php
$hello = file_get_contents('hello.txt');
$helloex = explode(" ", $hello);
echo '<pre>';
print_r($helloex);
echo '</pre>';
$hello2 = file_get_contents('hello2.txt');
$helloex2 = explode(" ", $hello2);
echo '<pre>';
print_r($helloex2);
echo '</pre>';
$hellomerge=[];
$k=0;
$max_count = max(count($helloex), count($helloex2));
for($i = 0; $i < count($helloex); $i++){
    for($j = 0; $j < count($helloex2); $j++){
           if($helloex[$i] == $helloex2[$j]){
               $hellomerge[$k] = $helloex[$i];
               $k++;
           }
       }
   }
   $result = implode(' ', $hellomerge);
   file_put_contents('hello3.txt', $result);
/*$result = array_intersect($helloex, $helloex2);
echo '<pre>';
print_r($result);
echo '</pre>';
$result1 = implode(' ', $result);
file_put_contents('hello3.txt', $result1);*/

?>