<?php
if($_COOKIE['COUNT']){
    echo 'Посетил раз - '.$_COOKIE['COUNT'];
    $cnt=$_COOKIE['COUNT']+1;
    setcookie('COUNT',$cnt);
}else{
    setcookie('COUNT',1);
}
setcookie("NAME","User", time()+60);
?>
<h1>Привет, <?=$_COOKIE['NAME']?></h1>

<form action="" method="get">
    <input type="text" name="username" placeholder="Имя">
    <input type="submit">
</form>
<?php
    if($_GET['username']!=""){
        setcookie("username",$_GET['username'], time()+60*60);
        setcookie("lastactiv",time(), time()+60*60);
    }
    if($_COOKIE['username']) {
        echo "<div>Пользователь, "
            . $_COOKIE['username'] . " последний раз заходил в "
            . date('Y-m-d H:i:s', $_COOKIE['lastactiv'])
            . "</div>";
    }
?>
<a href="slide16.php">17
</a>

