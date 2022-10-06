<?php
/*
Слайд 15
1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
Выведите на экран значения, которые ввел/выбрал пользователь.

1. Вспомнить html-разметку и создать html-форму
2. Не забудь для тектовых полей указать атрибут name
3. Принять значения из массива $_GET/$_POST
4. Вывести значения на экран */
?>

<?php
// echo $id;
//$_POST ['pass'] = md5($_POST['pass']);
//print md5($_POST['pass']); // отобразить с хэшем
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

<body>
<form action="" method="get">
	<p>
		Name <input type="text" name="login">
	</p>
	<p>
		Comment <textarea name="comment" id="" cols="30" rows="10"></textarea>
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
    <button type="submit">Send!</button>
</form>
</body>
</html>

<?php
/*
=======
4. Вывести значения на экран


2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST
3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
4. Создайте форму генерации ссылки с параметром:
Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.

*/
?>

<?php
//2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST
$_POST ['pass'] = md5($_POST['pass']);
print_r($_POST);
// 4. Создайте форму генерации ссылки с параметром: Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4 При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
$id = $_POST['lab'];
echo "phpcourse.php?l=".$id;
//3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
if ($_POST['login'] == 'Tom' && $_POST['pass'] == 'c4ca4238a0b923820dcc509a6f75849b') // хэш для пароля '1'
  echo "Доступ к секретным страницам открыт";
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
<form action="" method="post">

Select Login <select name="login" >
                  <option value="Tom" selected=""> Tom </option>
                  <option value="Kate" > Kate </option>
                  <option value="Max"> Max </option>
                </select>
	<p>
        Password <input type="text" name="pass">
	</p>
	<p>
		<input type="checkbox" name="lab" value="1">Лаб1
		<input type="checkbox" name="lab" value="2">Лаб2
		<input type="checkbox" name="lab" value="3">Лаб3
		<input type="checkbox" name="lab" value="4">Лаб4
	</p>
    <button type="submit">Send!</button>
</form>
</body>
</html>

=======


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

