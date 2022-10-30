<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device_width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forma</title>
</head>

<body>
<h4>Задание 1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь</h4>
    <form action="">
        <p>
            <input type="text" class="text_field" name="login">
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
            <button type="submit">Кнопочка!</button>
        </p>
        <?php
            print_r($_GET);
            print_r($_POST);
        ?>
    </form>
    <h4>Задание 2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя
    пользователя, а пароль захешировать и сохранить его в массив
    $_POST</h4>
    <form action="/dostup.php" method="post">
        <input type="text" class="login" name="login"
        id="login" placeholder="Введите логин">
        <input type="password" class="pass" name="pass"
        id="pass" placeholder="Введите пароль">
        <button type="submit">Кнопочка!</button>
    </form>

    <h4>Задание 3. Создать страницу для ввода имени
    пользователя (login) и пароля (passwd).
    Если пользователь вводит правильную пару (login/passwd),
    то сервер выдает страницу с сообщением, что доступ к секретным
    страницам открыт. Login предлагается выбирать из списка</h4>
    <form action="dostup.php" method="post">
        <select name="login">
            <option value="Egor">Egor</option>
            <option value="Tom">Tom</option>
            <option value="Alice">Alice</option>
            <option value="Bob">Bob</option>
        </select>
        password <input type="password" name="pass"
        id="pass" placeholder="Введите пароль">
        <button type="submit">Кнопочка!</button>
    </form>
<h4>Задание 4. Создайте форму генерации ссылки с параметром:
Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3
 , где 3 – это номер выбранной лабораторной работы</h4>

    <form action="phpcourse.php" method="get">
        <select name="l">
            <option value="1">Лаб1</option>
            <option value="2">Лаб2</option>
            <option value="3">Лаб3</option>
            <option value="4">Лаб4</option>
        </select>
        <button type="submit">Кнопочка!</button>
    </form>
</body>

</html>