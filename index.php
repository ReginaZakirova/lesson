<?php
    $time = time();
    session_start();
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['time'] = $time;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>index1.php</h1>
<p>
<form action="" method="get">
    <p>
        Ваше имя <input type="text" name="login">
    </p>
    <p>
        <button type="submit">Отправить!</button>
    </p>
</form>
<a href="hello.php"> hello.php</a>
</p>
</body>
</html>
