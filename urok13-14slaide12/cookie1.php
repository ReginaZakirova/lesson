<?php
// Задание 1. Пользователь заходит на страницу. 
// Вам необходимо сохранить куки со значением name = "User". 
// После обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из куки)
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    setcookie("name", $name, time() + 15555555555);
}
if (isset($_COOKIE['name'])) {
    echo "Hello, ". $_COOKIE['name'];
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