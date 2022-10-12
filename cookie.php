<?php
$name = $_GET['login'];
setcookie('login', $name);
$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'никогда'; 
setcookie('last', date('Y-m-d H:i:s'), time()+60*60, '/');
$count = isset($_COOKIE['counter']) ? $_COOKIE['counter']:0;
$count ++;
setcookie('counter',$count);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="login" placeholder="Имя">
    <input type="submit">
</form>
    <p>Привет <? $name = $_COOKIE['login'];
        echo $name;
    ?> </p>
    <p>В последний раз ты заходил <? echo $last; ?></p>
    <p>Заходил на сайт <? echo $count;?> раз</p>
</body>
</html>