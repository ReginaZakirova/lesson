<?php
// Задание 3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'
include "tools/ending.php";
if (isset($_COOKIE["visit"])) {
    $count = intval($_COOKIE["visit"]);
    echo "вы посетили наш сайт ".$count. " ". ending($count);
    setcookie("visit", $count + 1, 0);
}
else {
    setcookie("visit", "1", 0);
}