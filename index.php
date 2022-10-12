<?php
/*  Это задание - настоящая муть! Слишком много очевидных и неочевидных условностей, которые влияют
    на результат! Например, если я буду обновлять страницу, не выходя из нее после отправки данных с формы,
    браузер будет каждый раз пересылать мой запрос снова и снова. Если же я выйду со страницы и снова зайду
    на нее снова и начну также обновлять ее, то в данном случае браузер уже не будет пересылать данные с формы.
    В общем, сделал - как сделал... */

$arr_user = [
    "Ann" => "123", // Имя и пароль
    "Bob" => "456",
    "Tom" => "789"
];
/*  Будем формировать куки только в случае успешной авторизации на странице.
    Условие авторизации максимально упрощено, чтобы не отвлекаться от основной задачи. */
if (count($_POST) == 2) {
    if (($arr_user[$_POST["login"]] == $_POST["password"]) and ($_POST["password"])) {
        $current_time = time(); // Сразу фиксируем время входа в PHP-код
        /*  Каждый раз, посылая данные с формы, будем формировать куки на основе этих данных.
            Кука "name" - является общей кукой для всех пользователей и содержит текущего авторизованного
            пользователя. А вот две остальные куки: last_time_[user] и count_[user] должны быть индивидуальными
            для каждого пользователя, иначе они будут затирать значения при смене пользователя при авторизации!*/
        setcookie("name", $_POST["login"], time() + 3600 * 24 * 7 * 356);
        setcookie("last_time_" . $_POST["login"], $current_time, $current_time + 60 * 60);
        $name_count = "count_" . $_POST["login"];
        /*  В случае если значение элемента массива $_COOKIE отвечающий за подсчет входов на страницу для
            кокретного пользователя не установлено, т.е. пользователь заходит на страницу впервые, инициализируем
            куку-счетчик нулевым значением. В противном случае инкрементируем ее значение...*/
        if (isset($_COOKIE[$name_count])) {
            setcookie($name_count, ++$_COOKIE[$name_count], time() + 3600 * 24 * 7 * 356);
        }
        else {
            setcookie($name_count, 0, time() + 3600 * 24 * 7 * 356);
        }
    }
}
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
<h3>Задание 12 - 3</h3>
<form action="index.php" method="post">
    <p>
        Login: <input type="text" name="login">
    </p><p>
        Password: <input type="text" name="password">
    </p>
    <p>
        <button type="submit">Войти!</button>
    </p>
</form>
<?php
if (isset($_COOKIE)) {
        echo "Hello, " . $_COOKIE["name"] . "!<br>";
        echo "Вы посетили наш сайт " . $_COOKIE["count_" . $_COOKIE["name"]] . " раз!";
}
?>
</body>
</html>