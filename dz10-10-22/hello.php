<?php
session_start();
echo "Привет, ". $_SESSION['login']." Дата входа - ".$_SESSION['time'].'<br><br>';

if($_SESSION['lastpage'] && $_SESSION['login']){
    echo 'Перешли со страницы - '.$_SESSION['lastpage'];
    $_SESSION['lastpage'] = 'hello.php';
}else{
    $_SESSION['lastpage'] = 'hello.php';
}
?>
<br><a href="index.php">Перейти на главную</a><br>
<a href="bitrix.php">Перейти на страницу bitrix</a><br>
<a href="fact.php">Перейти на страницу fact</a><br>