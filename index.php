Задание 15 - 1
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
<form name="one" action="" method="get">
    <p>
        Login: <input type="text" name="login">
    </p>
    <p>
        <textarea name="comment" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="radio" name="getpost" value="get">Get
        <input type="radio" name="getpost" value="post">Post
    </p>
    <p>
        <input type="checkbox" name="html" value="html">HTML
        <input type="checkbox" name="html" value="php">PHP
        <input type="checkbox" name="html" value="git">GIT
    </p>
    <p>
        <button type="submit"> Send! </button>
    </p>
</form>
<?php
print_r($_GET);
?>
<br><br>
<hr>
<br>

Задание 15 -2
<form name="two" action="" method="post">
    <p>
        Login: <input type="text" name="login">
    </p>
    <p>
        Password: <input type="password" name="password">
    </p>
    <p>
        <button type="submit"> Send! </button>
    </p>
</form>
<?php
$_POST['password'] = md5($_POST['password']);
echo "<br>Имя пользователя: " . $_POST['login'] . "<br>";
?>
<br>
<hr>
<br>

Задание 15 - 3
<form name="three" action="" method="post">
    <p>
        <label>
            Login:
        </label>
        <select name="login">
            <option value="john">John</option>
            <option value="mike">Mike</option>
            <option value="peter">Peter</option>
        </select>
    </p>
    <p>
        Password: <input name="passwd" type="password">
    </p>
    <p>
        <button type="submit">Send!</button>
    </p>
</form>
<?php
    $arr_passwd = [
            "john" => "202cb962ac59075b964b07152d234b70", // md5-хэш для пароля 123
            "mike" => "250cf8b51c773f3f8dc8b4be867a9a02", // md5-хэш для пароля 456
            "peter" => "68053af2923e00204c3ca7c6a3150cf7" // md5-хэш для пароля 789
    ];
    if ($arr_passwd[$_POST['login']] == md5($_POST['passwd'])) {
        echo "Доступ к секретным страницам открыт! <br>";
    }
?>
<br>
<hr>
<br>

Задание 15 - 4
<form name="four" action="phpcourse.php" method="get">
    <p>
        <label>
            Лабораторная работа:
        </label>
        <select name="l">
            <option value="1">Лаб1</option>
            <option value="2">Лаб2</option>
            <option value="3">Лаб3</option>
            <option value="4">Лаб4</option>
        </select>
    </p>
    <p>
        <button type="submit">Send!</button>
    </p>
</form>

</body>
</html>

<?php
/*
Слайд 16
1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:
 - если она оказалась более 15, то результат: «У Вас покладистый характер»;
 - если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
 - если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
*/
?>