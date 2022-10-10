<?php 

/*
Слайд 15
1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей.
Выведите на экран значения, которые ввел/выбрал пользователь.

1. Вспомнить html-разметку и создать html-форму
2. Не забудь для тектовых полей указать атрибут name
3. Принять значения из массива $_GET/$_POST
4. Вывести значения на экран
*/
print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="">
    <p>
        <input type="text" name ="login">
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
        <button type="submit">GO</button>
    </p>
  </form>  
</body>
</html>

<?php
/*
2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST
*/
print md5($_POST['pass']);
echo "<br>";
if(isset( $_POST['button_id']))
    {
        $login = $_POST['login'];
        $log = $_POST['log'];
    
    }
echo $login;
$_POST['pass'] = md5($_POST['pass']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Выбрать логин <select name ="log">
            <option>Tom</option>
            <option>Danil</option>
            <option>Timur</option>
        login <input type="text" name="login">
        password <input type="password" name="pass">
        <button type="submit" name="button_id">Send!</button>
        <?php
        if ($log == 'Tom' && $_POST['pass'] =='202cb962ac59075b964b07152d234b70' || 
        $log == 'Danil' && $_POST['pass'] =='250cf8b51c773f3f8dc8b4be867a9a02' ||
        $log == 'Timur' && $_POST['pass'] =='d81f9c1be2e08964bf9f24b15f0e4900'){
            echo 'доступ к секретным страницам открыт';
        } else echo 'доступ закрыт';
        ?>
    </form>
    <form action="phpcourse.php" method="get">
    <p>
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
3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
*/

/*
4. Создайте форму генерации ссылки с параметром:
Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.

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
