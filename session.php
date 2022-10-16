<?php
session_start();
$_SESSION['login'] = $_GET['login'];
$_SESSION['password'] = $_GET['password'];

$time = date('l jS \of F Y h:i:s A');

if (empty($_SESSION['time'])) {
    $time = $_SESSION['time'] = time();
}


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
    <h1>Мы на странице index</h1>
    <p>Время захода пользователя: <? echo $time ?></p>
    <p>Был <?echo $timesec = time() - $_SESSION['time'];?> секунд назад</p>
    <a href="about.php">Страница эбаут</a>
    <form action="">
        <input type="text" name= "login">
        <input type="password" name ="password">
        <input type="submit">
    </form>
</body>
</html>