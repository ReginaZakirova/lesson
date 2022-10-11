<?php
    session_start();
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
<body style="background-color: <?=select_color($_SESSION["ID_COLOR"])?>">
<form action="" method="get">
    <input name="login" type="text" placeholder="Логин">
    <input type="submit"><br>
</form>
<br>
<br>
<form action="" method="get">
    <select name="color" id="cl">
        <option value="1">синий</option>
        <option value="2">зеленый</option>
        <option value="3">желтый</option>
    </select>
    <input type="submit"><br><br>
</form>
<?php
    function select_color($id){
        if($id==1){
            echo "#3f79db";
        }elseif($id==2){
            echo  "green";
        }elseif($id==3){
            echo  "yellow";
        }
    }
    if($_GET['color']){
        $_SESSION['ID_COLOR'] = $_GET['color'];
    }

    if($_SESSION['lastpage'] && $_SESSION['login']){
        echo 'Перешли со страницы - '.$_SESSION['lastpage'];
        $_SESSION['lastpage'] = 'index.php';
    }else{
        $_SESSION['lastpage'] = 'index.php';
    }

    echo '<br><br>';

        if($_GET['login']!='' && !isset($_SESSION['login'])){
            $_SESSION['login']=$_GET['login'];
            $_SESSION['time']=time();
        }

        if($_SESSION['time']){
            echo "Привет, ". $_SESSION['login']." Дата входа - ".date('Y-m-d H:i:s',$_SESSION['time']).'<br><br>';
            $razn=time()-$_SESSION['time'];
            $time=round($razn/60) . ' - мин., '.$razn%60 . ' - сек. назад';
            echo "Был - ".$time.'<br><br>';
        }

        if(!empty($_GET['login'])){
            header('Location: index.php');
        }
    //session_destroy();
?>
<a href="hello.php">Перейти на страницу приветствия</a><br>
<a href="bitrix.php">Перейти на страницу bitrix</a><br>
<a href="fact.php">Перейти на страницу fact</a><br>

</body>
</html>