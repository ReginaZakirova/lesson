<?php
session_start();
//$time2 = time ();
date_default_timezone_set('UTC+4');
$time = date('l jS \of F Y h:i:s A'); // время визита
//$time = date('h:i:s'); // время визита

if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();// сохранил время визита
}

// записать время визита в файл
$filename = 'time.txt';
if (! file_exists($filename)) {
    file_put_contents($filename, time());
}
//echo time() - file_get_contents($filename)
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 13-14 PHP SESSION </title>
</head>
<body>
<body>
  <h1> Урок 13-14 PHP SESSION урок 13-14</h1>
  <h2> 2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время на экран </h2>

  Текущее время <?php echo date('l jS \of F Y h:i:s A');?>
<p>
  Сохраненное время из сессии: <?php echo date('l jS \of F Y h:i:s A', $_SESSION['time']);?>


  <h2> 3. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт. </h2>
 Пользователь был

 <?php 
    $interval = time() - $_SESSION['time'];
    echo $interval;
 ?> секунд назад
</body>
</html>
