<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" name="one">
        <select name="year">
            <?php
                for ($i = 2010; $i <= 2022; $i++) {
                    echo "<option value='$i'> $i </option>";
                }
            ?>
        </select>
    </form>

    <form action="" method="post" name="two">
        <p>
            Логин <input name="login" type="text">
        </p>
        <p>
            Пароль <input name="password" type="password">
        </p>
        <button type="submit">
            Войти!
        </button>
    </form>

    <?php
    print_r($_POST);
    $arr_passwd = [
        "Виктор" => "698d51a19d8a121ce581499d7b701668", // md5-хэш для пароля 111
        "Регина" => "bcbe3365e6ac95ea2c0343a2395834dd", // md5-хэш для пароля 222
    ];
    if ($_POST) {
        if ($arr_passwd[$_POST["login"]] == md5($_POST["password"])) {
            echo "<p> Добро пожаловать, " . $_POST["login"] . "!<br></p>";
        }
        else {
            echo "<p>  Нет такого пользователя!<br></p>";
        }
    }
    ?>
</body>
</html>