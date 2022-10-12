<?php
$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'никогда';
setcookie('last', date('H:i:s', strtotime('+5 hours')), time()+3600);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
    <a href="task1.php">Задача 1</a> 
    <a href="task3.php">Задача 3</a> 
    <h1>Последний раз вы заходили <?php echo $last; ?></h1> 
    <form action="">
        <label for="login">Введите Ваш логин: </label>
        <input type="text" name="login" id="login">
        <input type="submit">
    </form>
</body>
</html>