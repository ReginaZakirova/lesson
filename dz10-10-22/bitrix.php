<?php
session_start();
if($_SESSION['lastpage'] && $_SESSION['login']){
    echo 'Перешли со страницы - '.$_SESSION['lastpage'];
    echo "<br>";
    $_SESSION['lastpage'] = 'bitrix.php';
}else{
    $_SESSION['lastpage'] = 'bitrix.php';
}
?>
<br><a href="index.php">Перейти на главную</a><br>
<a href="hello.php">Перейти на страницу приветствия</a><br>
<a href="fact.php">Перейти на страницу fact</a><br>