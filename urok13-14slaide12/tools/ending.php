<?php
function ending($num) {
    $num10 = $num % 10;
    $num100 = $num % 100;
    if ($num100 > 11 and $num100 <= 14) { 
        return "раз";
    }
    if ($num10 <= 4 and $num10 >= 2) {
        return "раза";
    }
    return "раз";
}