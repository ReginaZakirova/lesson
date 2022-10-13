<?php
    session_start();
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
    <?php
        echo "Привет, " . $_SESSION['login'] . "<br>";
        echo "Время входа на сайт:" . date("H:i:s", $_SESSION['time'] . "<br>");
        $diff = time() - $_SESSION['time'];
        echo "<br> Разница между текущим временем и временем входа: " . $diff . " c.";
        ?>
</body>
</html>
