<?php
/*print_r($_GET);

/*Слайд 15
1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
Выведите на экран значения, которые ввел/выбрал пользователь.

1. Вспомнить html-разметку и создать html-форму
2. Не забудь для тектовых полей указать атрибут name
3. Принять значения из массива $_GET/$_POST
4. Вывести значения на экран*/

/*?>


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
<form action="" method="get">
<p>
    <input type="text" name = "login">
    </p>
    <p>
    <textarea name="comment" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
    <input type="radio" name="getpost" value = "get"> Get
    <input type="radio" name="getpost" value = "post"> Post
    </p>
    <p>
    <input type="checkbox" name="html" value = "html"> HTML
    <input type="checkbox" name="html" value = "php"> PHP
    <input type="checkbox" name="html" value = "git"> GIT
    </p>
    <p>
        <button type = "submit">Send!</button>
    </p>
</form>
</body>
</html>*/


/*<?php
/*2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST


$_GET['pass'] = md5($_GET['pass']); // Пароль хешируется и передается в массив2
print_r($_GET);
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
<form action="" method="get">
    Login <input type="text" name="login">
    Password <input type="text" name="pass">
    <button type="submit">Send!</button>
</form>
</body>
</html>



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
<form action="" method="get">
<p>
    <input type="text" name = "login">
    </p>
    <p>
    <textarea name="comment" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
    <input type="radio" name="getpost" value = "get"> Get
    <input type="radio" name="getpost" value = "post"> Post
    </p>
    <p>
    <input type="checkbox" name="html" value = "html"> HTML
    <input type="checkbox" name="html" value = "php"> PHP
    <input type="checkbox" name="html" value = "git"> GIT
    </p>
    <p>
        <button type = "submit">Send!</button>
    </p>
</form>
</body>
</html>




*/

/*3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка<div class="
"></div>*/

/*
print_r($_GET);//Почему-то не удается вывести на экран фразу, хотя логин и пароль ввожу верно
$login = $_GET['Login'];
$_GET['pass'] = md5($_GET['pass']);
if($login == 'Jack' && $_GET['pass'] == 777){
    echo 'Доступ к секретным страницам открыт';
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
<form action="" method="get">
<p>
<div class = "Login">
Login <select>
    <option value="Tom" name = "Tom">Tom</option>
    <option value="Jack" name = "Jack">Jack</option>
    <option value="Kevin" name = "Kevin">Kevin</option>
</select>
</div>
Password <input type="password" name="pass">
    <button type="submit">Please Login, Jack!</button>
</form>
</body>
</html>
*/


/*4. Создайте форму генерации ссылки с параметром:
Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
*/
$id = $_GET['id'];//Я понимаю, что нужно выводить либо через кнопку, либо через опции, но к сожаланию, не могу понять как. 
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
<form action="" method="get">
<p>
<select>
    <option value="lab1">Лаб1</option>
    <option value="lab2">Лаб2</option>
    <option value="lab3">Лаб3</option>
</select>
<button type="submit <?echo $id;?>value">Выбрал Лабу!</button>
</form>
</body>
</html>

<?php

/*Слайд 16
1. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на электронный адрес).
*Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.
3. Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:
 - если она оказалась более 15, то результат: «У Вас покладистый характер»;
 - если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;
 - если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».
Отобразите на экране имя анкетируемого, фразу-результат анкетирования.*/

