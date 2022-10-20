<?php
$name = $_GET['login'];
setcookie('login', $name);
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
<form action="">
    <input type="text" name="login">
    <input type="submit">
</form>
<p>
    <?php
    $name = $_COOKIE['login'];
    //echo $name;
    $log = trim($_GET['login']);
    if($log == '') {
		$res = 'Введите логин!';
        
    }
    else{
        $res = "Hello  $name!";
    }
    echo $res;
    ?>
</p>
</body>
</html>

<?php
$name2 = $_GET['login2'];
setcookie('lasttime', date('Y-m-d H:i:s'), time()+3600);
setcookie('login2', $name2);
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
<form action="">
    <input type="text" name="login2">
    <input type="submit">
</form>
<?php
$log2 = trim($_GET['login2']);
if($log2 == '') {
		$res2 = 'Введите логин!';
        
    }
    else{
        $res2 = "Красава  $name2!";
    }
    echo $res2;
    ?>
</body>
</html>
<p></p>

<?php
$name3 = $_GET['login3'];
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] :0;
$counter++;
setcookie('counter', $counter, time()+3600*24*7);
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
<form action="">
    <input type="text" name="login3">
    <input type="submit">
</form>
<?php
echo "$name3, вы посетили страницу $counter раз"// через if сделать вывод после формы индивидульный айди
?>
</body>
</html>