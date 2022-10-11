<?php
session_start();
if($_SESSION['lastpage'] && $_SESSION['login']){
    echo 'Перешли со страницы - '.$_SESSION['lastpage'];
    echo "<br>";
    $_SESSION['lastpage'] = 'fact.php';
}else{
    $_SESSION['lastpage'] = 'fact.php';
}
?>
<br><a href="index.php">Перейти на главную</a><br>
<a href="hello.php">Перейти на страницу приветствия</a><br>
<a href="bitrix.php">Перейти на страницу bitrix</a><br>