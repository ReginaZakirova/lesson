<?php
setcookie('user', $_GET['user'], time() + 3600);
$isUser = $_COOKIE['user'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 1</title>
</head>
<body>
    <a href="task2.php">Задача 2</a> 
    <a href="task3.php">Задача 3</a>
    <?php
        if($isUser) {
            echo "<h1>Hello $isUser</h1>";
        }else {
            echo '<form action="">
            <label for="user">Введите Ваш логин: </label>
            <input type="text" name="user" id="user">
            <input type="submit">
        </form>';
        }
    
    
    
    ?> 

</body>
</html>