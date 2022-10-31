<?php
//Задание 2. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    setcookie("name", $name, time() + 60 * 60);
    setcookie("time", date('d.m.Y h:i:s'), time() + 60 * 60);
}
if (isset($_COOKIE['name'])) {
    echo "Hello, ". $_COOKIE['name']."<br>";
    echo $_COOKIE['time'];
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name='name' placeholder="Введите имя"><br><br>
        <button type="submit">Запомнить имя</button>
    </form>
</body>

</html>